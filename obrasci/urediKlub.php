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

    $idKluba = $_GET["id"];

    // Dohvat podataka za odabrani klub
    $conn =  new Baza();
    $conn->spojiDB();

    $klub = array();
    $query = "SELECT * FROM klub WHERE klub.Klub_ID = '$idKluba'";

    $rezultat = $conn->selectDB($query);

    while($red = mysqli_fetch_array($rezultat)){
        $klub[] = $red;
    }
    $conn->zatvoriDB();

    if(isset($_POST["submit"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $id = $_POST["id"];
        $naziv = $_POST["naziv"];
        $datumOsnutka = $_POST["datumOsnutka"];
        $adresa = $_POST["adresa"];
        $iban = $_POST["iban"];
        $mjesto = $_POST["mjesto"];
        $stadion = $_POST["stadion"];
        $titule = $_POST["titule"];
        $predsjednik = $_POST["predsjednik"];
        $vlasnikId = $_POST["vlasnik-id"];
        $sportId = $_POST["sport-id"];
        
        
    
        $igrac = array();
        $query = "UPDATE
                    `klub`
                 SET
                    `Klub_ID` = '$id',
                    `Naziv` = '$naziv',
                    `Godina_Osnutka` = '$datumOsnutka',
                    `Adresa`= '$adresa',
                    `IBAN` = '$iban',
                    `Mjesto` = '$mjesto',
                    `Stadion` = '$stadion',
                    `Titule` = '$titule',
                    `Predsjednik` = '$predsjednik',
                    `Korisnik_Korisnik_ID` = '$vlasnikId',
                    `Sport_Sport_ID` = '$sportId'
                 WHERE
                    Klub_ID = '$id'";
    
        $rezultat = $conn->selectDB($query);
    
        $conn->zatvoriDB();
        header('Location: ../ostalo/podaciAdmin.php');
    }

    $trenutnaStranica = "Ažuriraj klub";
    $smarty->assign("klub", $klub);
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("urediKlub.tpl");

?>