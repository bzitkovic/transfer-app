<?php
    $message = "";
    $path = dirname($_SERVER["REQUEST_URI"], 2);
    $folder = dirname(getcwd());
    include_once '../header.php';
    $server = $_SERVER["PHP_SELF"];
    
    $smarty->assign("path", $path);

    $trenutnaStranica = "Profil administratora";
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
   
    if($sess->korisnikUlogiran()){
        $korisnik = intval($sess->dajKorisnika()[0]);
        $korisnikId = intval($sess->dajKorisnika());
        $ulogaKorisnika = $sess->dajKorisnika()[10];
        $korisnikovID = $sess->dajKorisnika()[0];
        $smarty->assign("korisnikId", $korisnikId);
    }
   
    if(isset($_POST["PrikaziZahtjeveZaNapustanje"])){
        // Dohvat zahtjeva za napuštanja kluba
        $conn =  new Baza();
        $conn->spojiDB();

        $zahtjeviZaNapustanje = array();
        $query = "SELECT
                    profil.Ime,
                    profil.Prezime
                 FROM
                    profil
                 WHERE
                    profil.Zahtjev_Za_Napustanje = 1";

        $rezultatZahtjeva = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultatZahtjeva)){
            $zahtjeviZaNapustanje[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $zahtjeviZaNapustanje;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["ImeIgracaPrihvacen"])){
        // Prihvati igračev zahtjev za napuštanje
        $conn =  new Baza();
        $conn->spojiDB();

        $imeIgraca = $_POST["ImeIgracaPrihvacen"];
        $prezimeIgraca = $_POST["PrezimeIgraca"];
    
        $query = "UPDATE
                    profil
                 SET
                    profil.Zahtjev_Za_Napustanje = 0,
                    profil.Cijena = profil.Cijena - profil.Cijena * 0.1,
                    profil.Klub_Klub_ID = NULL
                 WHERE
                    profil.Ime = '$imeIgraca' AND profil.Prezime = '$prezimeIgraca'";

        $rezultatZahtjeva = $conn->selectDB($query);

        
        $conn->zatvoriDB();

        $jsonObjekt = "Zahtjev uspješno prihvaćen!";
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["ImeIgracaOdbijen"])){
        // Odbij igračev zahtjev za napuštanje
        $conn =  new Baza();
        $conn->spojiDB();

        $imeIgraca = $_POST["ImeIgracaOdbijen"];
        $prezimeIgraca = $_POST["PrezimeIgraca"];
    
        $query = "UPDATE
                    profil
                 SET
                    profil.Zahtjev_Za_Napustanje = 0
                 WHERE
                    profil.Ime = '$imeIgraca' AND profil.Prezime = '$prezimeIgraca'";

        $rezultatZahtjeva = $conn->selectDB($query);

        
        $conn->zatvoriDB();

        $jsonObjekt = "Zahtjev uspješno odbijen!";
        echo json_encode($jsonObjekt);
        exit();
    }
   

    if(isset($_POST["PrikaziBlokiraneKorisnike"])){
        // Dohvat blokiranih korisnika
        $conn =  new Baza();
        $conn->spojiDB();

        $blokiraniKorisnici = array();
        $query = "SELECT
                    korisnik.Ime,
                    korisnik.Prezime
                 FROM
                    korisnik
                 WHERE
                    korisnik.Blokiran = 1";

        $rezultatKorisnika = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultatKorisnika)){
            $blokiraniKorisnici[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $blokiraniKorisnici;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["ImeKorisnikaOtkljucaj"])){
        // Odbij igračev zahtjev za napuštanje
        $conn =  new Baza();
        $conn->spojiDB();

        $imeKorisnikaOtkljucaj = $_POST["ImeKorisnikaOtkljucaj"];
        $prezimeKorisnikaOtkljucaj = $_POST["PrezimeKorisnikaOtkljucaj"];
    
        $query = "UPDATE
                    korisnik
                 SET
                    korisnik.Blokiran = 0
                 WHERE
                    korisnik.Ime = '$imeKorisnikaOtkljucaj' AND korisnik.Prezime = '$prezimeKorisnikaOtkljucaj' ";

        $rezultatOtkljucavanja = $conn->selectDB($query);

        
        $conn->zatvoriDB();

        $jsonObjekt = "Korisnik uspješno otključan!";
        echo json_encode($jsonObjekt);
        exit();
    }
   

    
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("profilAdministratora.tpl");
?>