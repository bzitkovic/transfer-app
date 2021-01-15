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

    $idTipa = $_GET["id"];

    // Dohvat podataka za odabranog igrača
    $conn =  new Baza();
    $conn->spojiDB();

    $tip = array();
    $query = "SELECT * FROM tip WHERE tip.Tip_ID = '$idTipa'";

    $rezultat = $conn->selectDB($query);

    while($red = mysqli_fetch_array($rezultat)){
        $tip[] = $red;
    }
    $conn->zatvoriDB();

    if(isset($_POST["submit"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $id = $_POST["id"];
        $naziv = $_POST["naziv"];
        $opis = $_POST["opis"];
        
    
        $igrac = array();
        $query = "UPDATE
                    `tip`
                 SET
                    `Naziv` = '$naziv',
                    `Opis` = '$opis'
                 WHERE
                    Tip_ID = '$id'";
    
        $rezultat = $conn->selectDB($query);
    
        $conn->zatvoriDB();
        header('Location: ../ostalo/podaciAdmin.php');
    }

    $trenutnaStranica = "Ažuriraj tip";
    $smarty->assign("tip", $tip);
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("urediTip.tpl");

?>