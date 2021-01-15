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

    $idZahtjeva = $_GET["id"];

    // Dohvat podataka za odabranu ponudu
    $conn =  new Baza();
    $conn->spojiDB();

    $zahtjev = array();
    $query = "SELECT * FROM transferni_zahtjevi WHERE transferni_zahtjevi.Trasferni_zahtjevi_ID = '$idZahtjeva'";

    $rezultat = $conn->selectDB($query);

    while($red = mysqli_fetch_array($rezultat)){
        $zahtjev[] = $red;
    }
    $conn->zatvoriDB();

    if(isset($_POST["submit"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $id = $_POST["id"];
        $cijena = $_POST["cijena"];
        $datum = $_POST["datum"];
        $pristanakIgraca = $_POST["pristanakIgraca"];
        $pristanakVlasnika = $_POST["pristanakVlasnika"];
        $igracId = $_POST["igracId"];
        $vlasnikId = $_POST["vlasnikId"];
        
        
        
    
        $igrac = array();
        $query = "UPDATE
                    `transferni_zahtjevi`
                 SET
                    `Cijena` = '$iznos',
                    `Datum_zahtjeva` = '$datum',
                    `Pristanak_Igraca`= '$pristanakIgraca',
                    `Pristanak_Vlasnika`= '$pristanakVlasnika',
                    `Profil_Profil_ID` = '$igracId',
                    `Korisnik_Korisnik_ID` = '$vlasnikId'
                 WHERE
                     Trasferni_zahtjevi_ID = '$id'";
    
        $rezultat = $conn->selectDB($query);
    
        $conn->zatvoriDB();
        header('Location: ../ostalo/podaciAdmin.php');
    }

    $trenutnaStranica = "Ažuriraj Transferni zahtjev";
    $smarty->assign("zahtjev", $zahtjev);
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("urediTransferniZahtjev.tpl");

?>