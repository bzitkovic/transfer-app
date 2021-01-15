<?php
    $message = "";
    $path = dirname($_SERVER["REQUEST_URI"], 2);
    $folder = dirname(getcwd());
    include_once '../header.php';
    $server = $_SERVER["PHP_SELF"];
    
    $smarty->assign("path", $path);

    $trenutnaStranica = "Profil vlasnika";
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
   
    if($sess->korisnikUlogiran()){
        $korisnik = intval($sess->dajKorisnika()[0]);
        $korisnikId = intval($sess->dajKorisnika());
        $ulogaKorisnika = $sess->dajKorisnika()[10];
        $korisnikovID = $sess->dajKorisnika()[0];
        $smarty->assign("korisnikId", $korisnikId);
    }
   

    if(isset($_POST["PrikaziSlobodneIgrace"])){
        // Dohvat slobodnih igrača
        $conn =  new Baza();
        $conn->spojiDB();

        $slobodniIgraci = array();
        $query = "SELECT DISTINCT
                    profil.Ime,
                    profil.Prezime,
                    profil.Cijena
                FROM
                    profil
                INNER JOIN klub ON klub.Korisnik_Korisnik_ID = '$korisnikovID'
                INNER JOIN sport ON sport.Sport_ID = klub.Sport_Sport_ID
                WHERE
                    profil.Klub_Klub_ID IS NULL AND profil.Sport = sport.Naziv";

        $rezultatIgraca = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultatIgraca)){
            $slobodniIgraci[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $slobodniIgraci;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["PrikaziIgrace"])){
        // Dohvat igrača u klubovima
        $conn =  new Baza();
        $conn->spojiDB();

        $informacijeZaPopisIgraca = array();
       
        $queryInformacija = "SELECT
                                sport.Naziv
                            FROM
                                sport
                            INNER JOIN klub ON klub.Sport_Sport_ID = sport.Sport_ID
                            INNER JOIN korisnik ON korisnik.Korisnik_ID = klub.Korisnik_Korisnik_ID
                            WHERE
                                korisnik.Korisnik_ID = '$korisnikovID'";

        $rezultatiInformacija = $conn->selectDB($queryInformacija);

        while($red = mysqli_fetch_array($rezultatiInformacija)){
            $informacijeZaPopisIgraca[] = $red;
        }

        $nazivSporta = $informacijeZaPopisIgraca[0][0];

        $igraci = array();
        $query = "SELECT
                    profil.Ime,
                    profil.Prezime,
                    profil.Cijena
                 FROM
                     profil
                 INNER JOIN klub ON klub.Klub_ID = profil.Klub_Klub_ID 
                 INNER JOIN sport ON sport.Sport_ID = klub.Sport_Sport_ID 
                 INNER JOIN korisnik ON korisnik.Korisnik_ID = klub.Korisnik_Korisnik_ID 
                 WHERE
                    korisnik.Korisnik_ID != '$korisnikovID' AND sport.Naziv = '$nazivSporta'";

        $rezultatIgraca = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultatIgraca)){
            $igraci[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $igraci;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["PrikaziTransferneZahtjeve"])){
        // Dohvat transfernih zahtjeva za vlasnikov klub
        $conn =  new Baza();
        $conn->spojiDB();

        $transferniZahtjevi = array();
        $query = "SELECT DISTINCT
                    profil.Ime,
                    profil.Prezime,
                    transferni_zahtjevi.Cijena
                 FROM
                    profil
                 INNER JOIN transferni_zahtjevi ON transferni_zahtjevi.Profil_Profil_ID = profil.Profil_ID
                 INNER JOIN klub ON klub.Klub_ID = profil.Klub_Klub_ID
                 WHERE
                    klub.Korisnik_Korisnik_ID = '$korisnikovID' AND transferni_zahtjevi.Pristanak_Vlasnika = 0";

        $rezultatTransfernihZahtjeva= $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultatTransfernihZahtjeva)){
            $transferniZahtjevi[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $transferniZahtjevi;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["PonudaZaIgraca"])){
        // Slanje ponude za slobodnog igrača
        $conn =  new Baza();
        $conn->spojiDB();

        $informacijeSlanjePonude = array();

        $imeIgraca = $_POST["ImeIgraca"];
        $prezimeIgraca = $_POST["PrezimeIgraca"];
        $iznosPonude = $_POST["PonudaZaIgraca"];
       
        $queryInformacija = "SELECT
                                profil.Profil_ID,
                                profil.Cijena
                            FROM
                                profil
                            WHERE
                                profil.Ime = '$imeIgraca' AND profil.Prezime = '$prezimeIgraca'";
        $rezultatiInformacija = $conn->selectDB($queryInformacija);

        while($red = mysqli_fetch_array($rezultatiInformacija)){
            $informacijeSlanjePonude[] = $red;
        }

        $profilID = $informacijeSlanjePonude[0][0];
        $cijenaIgraca = $informacijeSlanjePonude[0][1];
        $danasnjiDatum = date("Y/m/d");

        if($iznosPonude >= $cijenaIgraca){
            $query = "INSERT INTO `ponuda`(
                `Iznos`,
                `Datum`,
                `Pristanak_Igraca`,
                `Profil_Profil_ID`,
                `Korisnik_Korisnik_ID`
            )
            VALUES(
                '$iznosPonude',
                '$danasnjiDatum',
                0,
                '$profilID',
                '$korisnikovID'
            )";
            $conn->selectDB($query);

            $jsonObjekt = "Ponuda uspješno poslana!";
        }
        else {
            $jsonObjekt = "Cijena je manja od cijene igrača!";
        }

        $conn->zatvoriDB();
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["PonudaZaIgracaUKlubu"])){
        // Slanje ponude za igrača u klubu
        $conn =  new Baza();
        $conn->spojiDB();

        $informacijeSlanjePonude = array();

        $imeIgraca = $_POST["ImeIgraca"];
        $prezimeIgraca = $_POST["PrezimeIgraca"];
        $iznosPonude = $_POST["PonudaZaIgracaUKlubu"];
       
        $queryInformacija = "SELECT
                                profil.Profil_ID,
                                profil.Cijena
                            FROM
                                profil
                            WHERE
                                profil.Ime = '$imeIgraca' AND profil.Prezime = '$prezimeIgraca'";
        $rezultatiInformacija = $conn->selectDB($queryInformacija);

        while($red = mysqli_fetch_array($rezultatiInformacija)){
            $informacijeSlanjePonude[] = $red;
        }

        $profilID = $informacijeSlanjePonude[0][0];
        $cijenaIgraca = $informacijeSlanjePonude[0][1];
        $cijenaIgraca = $cijenaIgraca*1.1;
        $danasnjiDatum = date("Y/m/d");

        if($iznosPonude >= $cijenaIgraca){
            $query = "INSERT INTO `transferni_zahtjevi`(
                `Cijena`,
                `Datum_zahtjeva`,
                `Pristanak_Igraca`,
                `Pristanak_Vlasnika`,
                `Profil_Profil_ID`,
                `Korisnik_Korisnik_ID`
            )
            VALUES(
               '$iznosPonude',
               '$danasnjiDatum',
               0,
               0,
               '$profilID',
               '$korisnikovID'
            )";
            $conn->selectDB($query);

            $jsonObjekt = "Ponuda uspješno poslana!";
        }
        else {
            $jsonObjekt = "Cijena je manja od cijene igrača!";
        }

        $conn->zatvoriDB();
        echo json_encode($jsonObjekt);
        exit();
    }

    //Vlasnik je prihvatio zahtjev za transferom
    if(isset($_POST["PonudeniIznosZahtjeva"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $informacijeZaUnosUTransfer = array();
        $imeIgraca = $_POST["ImeIgraca"];
        $prezimeIgraca = $_POST["PrezimeIgraca"];
        $cijenaTransfera = $_POST["PonudeniIznosZahtjeva"];

        $queryInformacija = "SELECT
                                profil.Profil_ID
                            FROM
                                profil
                            WHERE
                                profil.Ime = '$imeIgraca' AND profil.Prezime = '$prezimeIgraca'";
        
        $rezultatiInformacija = $conn->selectDB($queryInformacija);

        while($red = mysqli_fetch_array($rezultatiInformacija)){
            $informacijeZaUnosUTransfer[] = $red;
        }

        $profilID = $informacijeZaUnosUTransfer[0][0];


        $query = "UPDATE
                    transferni_zahtjevi
                SET
                    transferni_zahtjevi.Pristanak_Vlasnika = 1
                WHERE
                    transferni_zahtjevi.Profil_Profil_ID = '$profilID' AND  transferni_zahtjevi.Cijena = '$cijenaTransfera'";

        $conn->selectDB($query);

        $conn->zatvoriDB();

        $jsonObjekt = "Zahtjev uspješno potvrđen!";
        echo json_encode($jsonObjekt);
        exit();
    }

    //Vlasnik je odbio zahtjev za transferom
    if(isset($_POST["PonudeniIznosZahtjevaOdbij"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $informacijeZaUnosUTransfer = array();
        $imeIgraca = $_POST["ImeIgraca"];
        $prezimeIgraca = $_POST["PrezimeIgraca"];
        $cijenaTransfera = $_POST["PonudeniIznosZahtjevaOdbij"];

        $queryInformacija = "SELECT
                                profil.Profil_ID
                            FROM
                                profil
                            WHERE
                                profil.Ime = '$imeIgraca' AND profil.Prezime = '$prezimeIgraca'";
        
        $rezultatiInformacija = $conn->selectDB($queryInformacija);

        while($red = mysqli_fetch_array($rezultatiInformacija)){
            $informacijeZaUnosUTransfer[] = $red;
        }

        $profilID = $informacijeZaUnosUTransfer[0][0];


        $query = "DELETE FROM
                    transferni_zahtjevi
                WHERE
                    transferni_zahtjevi.Profil_Profil_ID = '$profilID' AND  transferni_zahtjevi.Cijena = '$cijenaTransfera'";

        $conn->selectDB($query);

        $conn->zatvoriDB();

        $jsonObjekt = "Zahtjev uspješno odbijen!";
        echo json_encode($jsonObjekt);
        exit();
    }


    if(isset($_POST["PrikaziTransferePoDatumuDolazni"])){
        // Dohvat transfera po klubovima
        $conn =  new Baza();
        $conn->spojiDB();

        $datumOd = $_POST["DatumOd"];
        $datumDo = $_POST["DatumDo"];

        $transferi = array();
        $query = "SELECT klub.Naziv, COUNT(transfer.dolazni_odlazni) as brojDolaznih
                 FROM klub
                 INNER JOIN transfer ON transfer.Klub = klub.Klub_ID
                 WHERE transfer.dolazni_odlazni = 1 AND transfer.Datum_Transfera BETWEEN '$datumOd' AND '$datumDo'
                 GROUP BY klub.Naziv";

        $rezultatTransfera = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultatTransfera)){
            $transferi[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $transferi;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["PrikaziTransferePoDatumuOdlazni"])){
        // Dohvat transfera po klubovima
        $conn =  new Baza();
        $conn->spojiDB();

        $datumOd = $_POST["DatumOd"];
        $datumDo = $_POST["DatumDo"];

        $transferi = array();
        $query = "SELECT klub.Naziv, COUNT(transfer.dolazni_odlazni) as brojDolaznih
                 FROM klub
                 INNER JOIN transfer ON transfer.Klub = klub.Klub_ID
                 WHERE transfer.dolazni_odlazni = 0 AND transfer.Datum_Transfera BETWEEN '$datumOd' AND '$datumDo'
                 GROUP BY klub.Naziv";

        $rezultatTransfera = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultatTransfera)){
            $transferi[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $transferi;
        echo json_encode($jsonObjekt);
        exit();
    }


    
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("profilVlasnika.tpl");
?>