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

    $idSporta = $_GET["id"];

    // Dohvat podataka za odabranog igrača
    $conn =  new Baza();
    $conn->spojiDB();

    $sport = array();
    $query = "SELECT * FROM sport WHERE sport.Sport_ID = '$idSporta'";

    $rezultat = $conn->selectDB($query);

    while($red = mysqli_fetch_array($rezultat)){
        $sport[] = $red;
    }
    $conn->zatvoriDB();

    if(isset($_POST["submit"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $id = $_POST["id"];
        $naziv = $_POST["naziv"];
        $opis = $_POST["opis"];
        $pravila = $_POST["pravila  "];
        $popularnost = $_POST["popularnost"];
        $godinaNastanka = $_POST["godinaNastanka"];
        
    
        $igrac = array();
        $query = "UPDATE
                    `sport`
                 SET
                    `Naziv` = '$naziv',
                    `Opis` = '$opis',
                    `Pravila` = '$pravila',
                    `Popularnost`= '$popularnost',
                    `Godina_nastanka` = '$godinaNastanka'
                 WHERE
                    Sport_ID = '$id'";
    
        $rezultat = $conn->selectDB($query);
    
        $conn->zatvoriDB();
        header('Location: ../ostalo/podaciAdmin.php');
    }

    $trenutnaStranica = "Ažuriraj sport";
    $smarty->assign("sport", $sport);
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("urediSport.tpl");

?>