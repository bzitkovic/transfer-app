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


    if(isset($_POST["NazivSporta"])){
       
        $conn =  new Baza();
        $conn->spojiDb();

        $nazivSporta = $_POST['NazivSporta'];
        $opisSporta = $_POST['OpisSporta'];
        $pravilaSporta = $_POST['PravilaSporta'];
        $popularnostSporta = $_POST['PopularnostSporta'];
        $godinaSporta = $_POST['GodinaSporta'];
     
        $query = "INSERT INTO `sport`(
                    `Naziv`,
                    `Opis`,
                    `Pravila`,
                    `Popularnost`,
                    `Godina_nastanka`
                )
                VALUES(
                    '$nazivSporta',
                    '$opisSporta',
                    '$pravilaSporta',
                    '$popularnostSporta',
                    '$godinaSporta'
                )";

        $rezultat = $conn->selectDB($query);
       
         $conn->zatvoriDB();
         $jsonObjekt = "Sport uspješno kreiran!";
         echo json_encode($jsonObjekt);
         exit();
  
    }



    $trenutnaStranica = "Kreiraj sport";
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("kreirajSport.tpl");

?>