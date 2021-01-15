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

    $idIgraca = $_GET["id"];

    // Dohvat podataka za odabranog igrača
    $conn =  new Baza();
    $conn->spojiDB();

    $igrac = array();
    $query = "SELECT * FROM profil WHERE profil.Profil_ID = '$idIgraca'";

    $rezultat = $conn->selectDB($query);

    while($red = mysqli_fetch_array($rezultat)){
        $igrac[] = $red;
    }
    $conn->zatvoriDB();

    if(isset($_POST["submit"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $id = $_POST["id"];
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $nacionalnost = $_POST["nacionalnost"];
        $datumRodenja = $_POST["datum-rodenja"];
        $mjestoRodenja = $_POST["mjesto-rodenja"];
        $tezina = $_POST["tezina"];
        $cijena = $_POST["cijena"];
        $slika = $_POST["slika-igraca"];
        $visina = $_POST["visina"];
        $pozicija = $_POST["pozicija"];
    
        $igrac = array();
        $query = "UPDATE
                    `profil`
                 SET
                    `Ime` = '$ime',
                    `Prezime` = '$prezime',
                    `Nacionalnost` = '$nacionalnost',
                    `Godina_Rodenja`= '$datumRodenja',
                    `Mjesto_Rodenja` = '$mjestoRodenja' ,
                    `Tezina` = '$tezina',
                    `Cijena` = '$cijena',
                    `Slika`= '$slika',
                    `Visina` = '$visina',
                    `Pozicija` = '$pozicija'
                 WHERE
                    Profil_ID = '$id'";
    
        $rezultat = $conn->selectDB($query);
    
        $conn->zatvoriDB();
        header('Location: ../ostalo/podaciAdmin.php');
    }

    $trenutnaStranica = "Ažuriraj profil";
    $smarty->assign("igrac", $igrac);
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("azurirajProfilIgraca.tpl");

?>