<?php

    $message = "";
    $path = dirname($_SERVER["REQUEST_URI"], 2);
    $folder = dirname(getcwd());
    $server = $_SERVER["PHP_SELF"];
    include_once '../header.php';

    if($sess->korisnikUlogiran()){
        $korisnik = intval($sess->dajKorisnika()[10]);
    }
    
    $smarty->assign("path", $path);

    $idKorisnika = $_GET["id"];

    // Dohvat podataka za odabranog korisnika
    $conn =  new Baza();
    $conn->spojiDB();

    $korisnik = array();
    $query = "SELECT * FROM korisnik WHERE korisnik.Korisnik_ID = '$idKorisnika'";

    $rezultat = $conn->selectDB($query);

    while($red = mysqli_fetch_array($rezultat)){
        $korisnik[] = $red;
    }
    $conn->zatvoriDB();

    if(isset($_POST["submit"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $id = $_POST["id"];
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $korisnickoIme = $_POST["korIme"];
        $lozinka = $_POST["lozinka"];
        $lozinkaSHA1 = $_POST["lozinkaSHA1"];
        $uvjeti = $_POST["uvjeti"];
        $email = $_POST["email"];
        $status = $_POST["status"];
        $datumVrijemeRegistracije = $_POST["datumVrijemeRegistracije"];
        $ulogaId = $_POST["ulogaId"];
        $blokiran = $_POST["blokiran"];
        $verifikacijskiKod = $_POST["verifikacijskiKod"];
        
        
    
        $igrac = array();
        $query = "UPDATE
                    `korisnik`
                 SET
                    `Korisnik_ID` = '$id',
                    `Ime` = '$ime',
                    `Prezime` = '$prezime',
                    `Korisnicko_ime`= '$korisnickoIme',
                    `Lozinka` = '$lozinka',
                    `Lozinka_SHA1` = '$lozinkaSHA1',
                    `Uvjeti` = '$uvjeti',
                    `Email` = '$email',
                    `Status` = '$status',
                    `Datum_Vrijeme_Registracije` = '$datumVrijemeRegistracije',
                    `Uloga_Uloga_ID` = '$ulogaId',
                    `Blokiran` = '$blokiran',
                    `Verifikacijski_Kod` = '$verifikacijskiKod'
                 WHERE
                    Korisnik_ID = '$id'";
    
        $rezultat = $conn->selectDB($query);
    
        $conn->zatvoriDB();
        header('Location: ../ostalo/podaciAdmin.php');
    }

    $trenutnaStranica = "Ažuriraj korisnika";
    $smarty->assign("korisnik", $korisnik);
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("urediKorisnika.tpl");

?>