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

    $idUloga = $_GET["id"];

    // Dohvat podataka za odabranog igrača
    $conn =  new Baza();
    $conn->spojiDB();

    $uloga = array();
    $query = "SELECT * FROM uloga WHERE uloga.Uloga_ID = '$idUloga'";

    $rezultat = $conn->selectDB($query);

    while($red = mysqli_fetch_array($rezultat)){
        $uloga[] = $red;
    }
    $conn->zatvoriDB();

    if(isset($_POST["submit"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $id = $_POST["id"];
        $naziv = $_POST["naziv"];
        $obveze = $_POST["obveze"];
        $opis = $_POST["opis"];
        
    
        $igrac = array();
        $query = "UPDATE
                    `uloga`
                 SET
                    `Naziv` = '$naziv',
                    `Obveze` = '$obveze',
                    `Opis` = '$opis'
                 WHERE
                    Uloga_ID = '$id'";
    
        $rezultat = $conn->selectDB($query);
    
        $conn->zatvoriDB();
        header('Location: ../ostalo/podaciAdmin.php');
    }

    $trenutnaStranica = "Ažuriraj ulogu";
    $smarty->assign("uloga", $uloga);
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("urediUlogu.tpl");

?>