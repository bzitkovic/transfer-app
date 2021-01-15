<?php
    $message = "";
    $path = dirname($_SERVER["REQUEST_URI"], 2);
    $folder = dirname(getcwd());
    include_once '../header.php';
    $server = $_SERVER["PHP_SELF"];
    
    $smarty->assign("path", $path);

    $trenutnaStranica = "Profil igrača";
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
   
    if($sess->korisnikUlogiran()){
        $korisnik = intval($sess->dajKorisnika()[0]);
        $korisnikId = intval($sess->dajKorisnika());
        $ulogaKorisnika = $sess->dajKorisnika()[10];
        $korisnikovID = $sess->dajKorisnika()[0];
        $smarty->assign("korisnikId", $korisnikId);
    }


    // Provjera postojili li već profil za igrača
    $conn =  new Baza();
    $conn->spojiDB();

    $query = "SELECT
                korisnik.Ime
             FROM
                korisnik
             INNER JOIN profil ON profil.Korisnik_Korisnik_ID = korisnik.Korisnik_ID
             WHERE
                korisnik.Uloga_Uloga_ID = '$ulogaKorisnika' && korisnik.Korisnik_ID = '$korisnikovID'";

    $rezultatProfila = $conn->selectDB($query);

    if(mysqli_num_rows($rezultatProfila) == 0){
        $profilPostoji = 0;
    } else {
        $profilPostoji = 1;
    };

    // Dohvat naziva sporta
    $sportovi = array();
    $query2 = "SELECT sport.Naziv FROM sport" ;
    $rezultatSportova = $conn->selectDB($query2);

    while($red = mysqli_fetch_array($rezultatSportova)){
        $sportovi[] = $red;
    }

    $conn->zatvoriDB();
    
    $smarty->assign("sportovi", $sportovi);
    $smarty->assign("profilPostoji", $profilPostoji);

    // Spremi novokreirani profil
    if(isset($_POST["submit"])){
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $slikaProfila = $_POST["slika-profila"];
        $nacionalnost = $_POST["nacionalnost"];
        $datumRodenja = $_POST["datum-rodenja"];
        $tezina = $_POST["tezina"];
        $visina = $_POST["visina"];
        $suglasnostSlike = $_POST["suglasnostSlike"];
        $mjestoRodenja = $_POST["mjesto-rodenja"];
        $sportProfila = $_POST["sportProfila"];
        $pozicija = $_POST["pozicija"];


        $conn =  new Baza();
        $conn->spojiDB();

    
        $query = "INSERT INTO `profil`(Ime, Prezime, Nacionalnost, Godina_Rodenja, Mjesto_Rodenja, Tezina, 
                Cijena, Slika, Visina, Sport, Pozicija, Zahtjev_Za_Napustanje, Suglasnost, Korisnik_Korisnik_ID, Klub_Klub_ID) 
                 VALUES ('$ime','$prezime','$nacionalnost','$datumRodenja','$mjestoRodenja','$tezina',0,'$slikaProfila', '$visina', '$sportProfila', 
                 '$pozicija', 0, '$suglasnostSlike', '$korisnikovID', null)";
    
        $rezutat = $conn->updateDB($query);
        
        $conn->zatvoriDB();
        header("Location: ./profilIgraca.php");

    }

    // Dohvat profila igrača
    $conn =  new Baza();
    $conn->spojiDB();

    $profil = array();
    $query = "SELECT
                profil.Ime, profil.Prezime, profil.Nacionalnost, profil.Slika, 
                profil.Tezina, profil.Visina, profil.Cijena, klub.Naziv,
                profil.Pozicija, profil.Mjesto_Rodenja, profil.Godina_Rodenja, profil.Suglasnost
             FROM
                profil
             INNER JOIN klub ON klub.Klub_ID = profil.Klub_Klub_ID
             INNER JOIN korisnik ON korisnik.Korisnik_ID = profil.Korisnik_Korisnik_ID
             WHERE
                korisnik.Korisnik_ID = '$korisnikovID'";
    
    $rezultatProfila = $conn->selectDB($query);
    if(mysqli_num_rows($rezultatProfila) == 0){
        $query2 = "SELECT
                        profil.Ime,
                        profil.Prezime,
                        profil.Nacionalnost,
                        profil.Slika,
                        profil.Tezina,
                        profil.Visina,
                        profil.Cijena,
                        profil.Pozicija,
                        profil.Mjesto_Rodenja,
                        profil.Godina_Rodenja,
                        profil.Suglasnost
                    FROM
                        profil
                    INNER JOIN korisnik ON korisnik.Korisnik_ID = profil.Korisnik_Korisnik_ID
                    WHERE
                        korisnik.Korisnik_ID = '$korisnikovID'" ;
        $rezultatProfila2 = $conn->selectDB($query2);
        while($red = mysqli_fetch_array($rezultatProfila2)){
            $profil[] = $red;
        }
    } else {
        while($red = mysqli_fetch_array($rezultatProfila)){
            $profil[] = $red;
        }
    };
    
   
    $conn->zatvoriDB();
    

    if(isset($_POST["PrikaziTransfere"])){
        // Dohvat transfera igrača
        $conn =  new Baza();
        $conn->spojiDB();

        $transferi = array();
        $query = "SELECT
                        klub.Naziv as nazivKluba,
                        transfer.Datum_Transfera
                    FROM
                        profil
                    INNER JOIN transfer ON transfer.Profil_Profil_ID = profil.Profil_ID
                    INNER JOIN korisnik ON korisnik.Korisnik_ID = transfer.Korisnik_Korisnik_ID
                    INNER JOIN klub ON klub.Klub_ID = transfer.Klub
                    WHERE
                        profil.Korisnik_Korisnik_ID = '$korisnikovID'";

        $rezultatProfila = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultatProfila)){
            $transferi[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $transferi;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["PrikaziPonude"])){
        // Dohvat ponuda igrača
        $conn =  new Baza();
        $conn->spojiDB();

        $ponude = array();
        $query = "SELECT
                    ponuda.Iznos,
                    klub.Naziv
                 FROM
                    ponuda
                 INNER JOIN profil ON ponuda.Profil_Profil_ID = profil.Profil_ID
                 INNER JOIN korisnik ON korisnik.Korisnik_ID = ponuda.Korisnik_Korisnik_ID
                 INNER JOIN klub On korisnik.Korisnik_ID = klub.Korisnik_Korisnik_ID
                 WHERE profil.Korisnik_Korisnik_ID = '$korisnikovID' && ponuda.Pristanak_Igraca = 0";

        $rezultatProfila = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultatProfila)){
            $ponude[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $ponude;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["PrikaziZahtjeve"])){
        // Dohvat zahtjeva za transferom igrača
        $conn =  new Baza();
        $conn->spojiDB();

        $zahtjeviZaTransferom = array();
        $query = "SELECT DISTINCT
                    klub.Naziv,
                    transferni_zahtjevi.Cijena
                 FROM
                    transferni_zahtjevi
                 INNER JOIN profil ON profil.Profil_ID = transferni_zahtjevi.Profil_Profil_ID
                 INNER JOIN korisnik ON korisnik.Korisnik_ID = transferni_zahtjevi.Korisnik_Korisnik_ID
                 INNER JOIN klub ON klub.Korisnik_Korisnik_ID = korisnik.Korisnik_ID
                 WHERE
                 profil.Korisnik_Korisnik_ID = '$korisnikovID' && 
                 transferni_zahtjevi.Pristanak_Vlasnika = 1 &&
                 transferni_zahtjevi.Pristanak_Igraca = 0";

        $rezultatProfila = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultatProfila)){
            $zahtjeviZaTransferom[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $zahtjeviZaTransferom;
        echo json_encode($jsonObjekt);
        exit();
    }
    

    //Igrač je prihvatio zahtjev za transferom
    if(isset($_POST["ImeKluba"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $informacijeZaUnosUTransfer = array();
        $imeKluba = $_POST["ImeKluba"];
        $cijenaTransfera = $_POST["CijenaTransfera"];

        $queryInformacija = "SELECT
                                profil.Profil_ID,
                                klub.Klub_ID,
                                korisnik.Korisnik_ID
                            FROM
                                profil,
                                klub
                            INNER JOIN korisnik ON klub.Korisnik_Korisnik_ID = korisnik.Korisnik_ID
                            WHERE
                                profil.Korisnik_Korisnik_ID = '$korisnikovID' AND klub.Naziv = '$imeKluba'";
        
        $rezultatiInformacija = $conn->selectDB($queryInformacija);

        while($red = mysqli_fetch_array($rezultatiInformacija)){
            $informacijeZaUnosUTransfer[] = $red;
        }

        $profilID = $informacijeZaUnosUTransfer[0][0];
        $klubID = $informacijeZaUnosUTransfer[0][1];
        $vlasnikID = $informacijeZaUnosUTransfer[0][2];
        $danasnjiDatum = date("Y/m/d");

        $query = "UPDATE
                    profil,
                    klub
                 SET
                    profil.Klub_Klub_ID = klub.Klub_ID, profil.Cijena = '$cijenaTransfera'
                 WHERE
                    klub.Naziv = '$imeKluba' AND profil.Korisnik_Korisnik_ID = '$korisnikovID'";
        
        $conn->selectDB($query);

        $query2 = "UPDATE
                      transferni_zahtjevi,
                      profil
                  SET
                      transferni_zahtjevi.Pristanak_Igraca = 1
                  WHERE
                      profil.Korisnik_Korisnik_ID = '$korisnikovID' AND transferni_zahtjevi.Cijena = '$cijenaTransfera'";

        $conn->selectDB($query2);

        $query3 = "INSERT INTO `transfer`(
                    `Datum_Transfera`,
                    `Iznos`,
                    `Klub`,
                    `dolazni_odlazni`,
                    `Profil_Profil_ID`,
                    `Korisnik_Korisnik_ID`
                )
                VALUES('$danasnjiDatum', '$cijenaTransfera', '$klubID', 1, '$profilID', '$vlasnikID')";

        $conn->selectDB($query3);

        $conn->zatvoriDB();

        $jsonObjekt = "Zahtjev uspješno prihvaćen!";
        echo json_encode($jsonObjekt);
        exit();
    }

    //Igrač je odbio zahtjev za transferom
    if(isset($_POST["ImeKlubaOdbij"])){
        $conn =  new Baza();
        $conn->spojiDB();
        $imeKluba = $_POST["ImeKlubaOdbij"];
        $cijenaTransfera = $_POST["CijenaTransfera"];

        $query = "UPDATE
                    profil,
                    klub
                 SET
                    profil.Cijena = profil.Cijena * 1.05
                 WHERE
                    klub.Naziv = '$imeKluba' AND profil.Korisnik_Korisnik_ID = '$korisnikovID'";
        
        $conn->selectDB($query);

        $query2 = "UPDATE
                      transferni_zahtjevi,
                      profil
                  SET
                      transferni_zahtjevi.Pristanak_Vlasnika = 0
                  WHERE
                      profil.Korisnik_Korisnik_ID = '$korisnikovID' AND transferni_zahtjevi.Cijena = '$cijenaTransfera'";

        $conn->selectDB($query2);
        
        $conn->zatvoriDB();

        $jsonObjekt = "Zahtjev uspješno odbijen!";
        echo json_encode($jsonObjekt);
        exit();
    }

    //Igrač je podnio zahtjev za napuštanje
    if(isset($_POST["GumbZahtjev"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $query = "UPDATE
                    profil
                 SET
                    profil.Zahtjev_Za_Napustanje = 1
                 WHERE
                    profil.Korisnik_Korisnik_ID = '$korisnikovID'";

        $conn->selectDB($query);

        $conn->zatvoriDB();
        $jsonObjekt = "Zahtjev poslan!";
        echo json_encode($jsonObjekt);
        exit();
    }

    //Igrač je prihvatio ponudu
    if(isset($_POST["ImeKlubaPonude"])){

        $conn =  new Baza();
        $conn->spojiDB();

        $informacijeZaUnosUTransfer = array();
        $imeKlubaPonude = $_POST["ImeKlubaPonude"];
        $ponudeniIznos = $_POST["PonudeniIznos"];

        $queryInformacija = "SELECT
                                profil.Profil_ID,
                                klub.Klub_ID,
                                korisnik.Korisnik_ID
                            FROM
                                profil,
                                klub
                            INNER JOIN korisnik ON klub.Korisnik_Korisnik_ID = korisnik.Korisnik_ID
                            WHERE
                                profil.Korisnik_Korisnik_ID = '$korisnikovID' AND klub.Naziv = '$imeKlubaPonude'";
        
        $rezultatiInformacija = $conn->selectDB($queryInformacija);

        while($red = mysqli_fetch_array($rezultatiInformacija)){
            $informacijeZaUnosUTransfer[] = $red;
        }

        $profilID = $informacijeZaUnosUTransfer[0][0];
        $klubID = $informacijeZaUnosUTransfer[0][1];
        $vlasnikID = $informacijeZaUnosUTransfer[0][2];
        $danasnjiDatum = date("Y/m/d");

        $query = "UPDATE
                    profil,
                    klub
                 SET
                    profil.Klub_Klub_ID = klub.Klub_ID,
                    profil.Cijena = '$ponudeniIznos'
                 WHERE
                    klub.Naziv = '$imeKlubaPonude' AND profil.Korisnik_Korisnik_ID = '$korisnikovID'";

        $conn->selectDB($query);

        $query2 = "UPDATE
                    ponuda,
                    profil
                 SET
                    ponuda.Pristanak_Igraca = 1
                 WHERE
                    profil.Korisnik_Korisnik_ID = '$korisnikovID' AND ponuda.Iznos = '$ponudeniIznos'";

        $conn->selectDB($query2);

        $query3 = "INSERT INTO `transfer`(
                    `Datum_Transfera`,
                    `Iznos`,
                    `Klub`,
                    `dolazni_odlazni`,
                    `Profil_Profil_ID`,
                    `Korisnik_Korisnik_ID`
                )
                VALUES('$danasnjiDatum', '$ponudeniIznos', '$klubID', 0, '$profilID', '$vlasnikID')";

        $conn->selectDB($query3);
        $conn->zatvoriDB();

        $jsonObjekt = "Ponuda prihvaćena!";
        echo json_encode($jsonObjekt);
        exit();
    }

    $smarty->assign("profil", $profil);
    
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("profilIgraca.tpl");
?>