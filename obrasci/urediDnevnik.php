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

    $idDnevnika = $_GET["id"];

    // Dohvat podataka za odabrani zapis u dnevniku
    $conn =  new Baza();
    $conn->spojiDB();

    $dnevnik = array();
    $query = "SELECT * FROM dnevnik WHERE dnevnik.Dnevnik_ID = '$idDnevnika'";

    $rezultat = $conn->selectDB($query);

    while($red = mysqli_fetch_array($rezultat)){
        $dnevnik[] = $red;
    }
    $conn->zatvoriDB();

    if(isset($_POST["submit"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $id = $_POST["id"];
        $datumVrijeme = $_POST["datum-vrijeme-radnje"];
        $radnja = $_POST["radnja"];
        $upit = $_POST["upit"];
        $korisnikId = $_POST["korisnik-id"];
        $tipId = $_POST["tip-id"];
        
    
        $igrac = array();
        $query = "UPDATE
                    `dnevnik`
                 SET
                    `Dnevnik_ID` = '$id',
                    `Datum_Vrijeme_Radnje` = '$datumVrijeme',
                    `Radnja` = '$radnja',
                    `Upit`= '$upit',
                    `Korisnik_Korisnik_ID` = '$korisnikId' ,
                    `Tip_Tip_ID` = '$tipId'
                 WHERE
                    Dnevnik_ID = '$id'";
    
        $rezultat = $conn->selectDB($query);
    
        $conn->zatvoriDB();
        header('Location: ../ostalo/podaciAdmin.php');
    }

    $trenutnaStranica = "Ažuriraj dnevnik";
    $smarty->assign("dnevnik", $dnevnik);
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("urediDnevnik.tpl");

?>