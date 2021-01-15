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

    $idPonude = $_GET["id"];

    // Dohvat podataka za odabranu ponudu
    $conn =  new Baza();
    $conn->spojiDB();

    $ponuda = array();
    $query = "SELECT * FROM ponuda WHERE ponuda.Ponuda_ID = '$idPonude'";

    $rezultat = $conn->selectDB($query);

    while($red = mysqli_fetch_array($rezultat)){
        $ponuda[] = $red;
    }
    $conn->zatvoriDB();

    if(isset($_POST["submit"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $id = $_POST["id"];
        $iznos = $_POST["iznos"];
        $datum = $_POST["datum"];
        $pristanakIgraca = $_POST["pristanakIgraca"];
        $igracId = $_POST["igracId"];
        $vlasnikId = $_POST["vlasnikId"];
        
        
        
    
        $igrac = array();
        $query = "UPDATE
                    `ponuda`
                 SET
                    `Ponuda_ID` = '$id',
                    `Iznos` = '$iznos',
                    `Datum` = '$datum',
                    `Pristanak_Igraca`= '$pristanakIgraca',
                    `Profil_Profil_ID` = '$igracId',
                    `Korisnik_Korisnik_ID` = '$vlasnikId'
                 WHERE
                    Ponuda_ID = '$id'";
    
        $rezultat = $conn->selectDB($query);
    
        $conn->zatvoriDB();
        header('Location: ../ostalo/podaciAdmin.php');
    }

    $trenutnaStranica = "Ažuriraj ponudu";
    $smarty->assign("ponuda", $ponuda);
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("urediPonudu.tpl");

?>