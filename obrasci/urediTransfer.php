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

    $idTransfera = $_GET["id"];

    // Dohvat podataka za odabranog igrača
    $conn =  new Baza();
    $conn->spojiDB();

    $transfer = array();
    $query = "SELECT * FROM transfer WHERE transfer.Transfer_ID = '$idTransfera'";

    $rezultat = $conn->selectDB($query);

    while($red = mysqli_fetch_array($rezultat)){
        $transfer[] = $red;
    }
    $conn->zatvoriDB();

    if(isset($_POST["submit"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $id = $_POST["id"];
        $datum = $_POST["datum"];
        $iznos = $_POST["iznos"];
        $klubId = $_POST["klubId"];
        $dolazniOdlazni = $_POST["dolazniOdlazni"];
        $igracId = $_POST["igracId"];
        $vlasnikId = $_POST["vlasnikId"];
        
    
        $igrac = array();
        $query = "UPDATE
                    `transfer`
                 SET
                    `Datum_Transfera` = '$datum',
                    `Iznos` = '$iznos',
                    `Klub` = '$klubId',
                    `dolazni_odlazni` = '$dolazniOdlazni',
                    `Profil_Profil_ID` = '$igracId',
                    `Korisnik_Korisnik_ID` = '$vlasnikId'
                 WHERE
                    Transfer_ID = '$id'";
    
        $rezultat = $conn->selectDB($query);
    
        $conn->zatvoriDB();
        header('Location: ../ostalo/podaciAdmin.php');
    }

    $trenutnaStranica = "Ažuriraj transfer";
    $smarty->assign("transfer", $transfer);
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("urediTransfer.tpl");

?>