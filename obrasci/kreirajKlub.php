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

    // Dohvaćanje kategorija sporta i svih vlasnika
    $conn =  new Baza();
    $conn->spojiDb();
 
    $query = "SELECT
                sport.Sport_ID,
                sport.Naziv
             FROM
                sport";

    $rezultatSportova = $conn->selectDB($query);
   
    while($red = mysqli_fetch_array($rezultatSportova)){
        $sportovi[] = $red;
    }

    $query2 = "SELECT
                korisnik.Korisnik_ID,
                korisnik.Ime,
                korisnik.Prezime
             FROM
                korisnik
             WHERE
                korisnik.Uloga_Uloga_ID = 2";

    $rezultatVlasnika = $conn->selectDB($query2);

    while($red = mysqli_fetch_array($rezultatVlasnika)){
        $vlasnici[] = $red;
    }
    
    $conn->zatvoriDB();

    // Unos novog kluba
    if(isset($_POST["NazivKluba"])){
       
        $conn =  new Baza();
        $conn->spojiDb();

        $nazivKluba = $_POST['NazivKluba'];
        $datumOsnutka = $_POST['DatumOsnutka'];
        $adresaKluba = $_POST['AdresaKluba'];
        $iban = $_POST['Iban'];
        $mjestoKluba = $_POST['MjestoKluba'];
        $stadionKluba = $_POST['StadionKluba'];
        $titule = $_POST['Titule'];
        $predsjednikKluba = $_POST['PredsjednikKluba'];
        $vlasnikKluba = $_POST['VlasnikKluba'];
        $sportKluba = $_POST['SportKluba'];
     
        $query = "INSERT INTO `klub`(
                    `Naziv`,
                    `Godina_Osnutka`,
                    `Adresa`,
                    `IBAN`,
                    `Mjesto`,
                    `Stadion`,
                    `Titule`,
                    `Predsjednik`,
                    `Korisnik_Korisnik_ID`,
                    `Sport_Sport_ID`
                )
                VALUES(
                    '$nazivKluba',
                    '$datumOsnutka',
                    '$adresaKluba',
                    '$iban',
                    '$mjestoKluba',
                    '$stadionKluba',
                    '$titule',
                    '$predsjednikKluba',
                    '$vlasnikKluba',
                    '$sportKluba'
                )";

        $rezultat = $conn->selectDB($query);
       
         $conn->zatvoriDB();
         $jsonObjekt = "Klub uspješno kreiran!";
         echo json_encode($jsonObjekt);
         exit();
  
    }
    

    $trenutnaStranica = "Kreiraj klub";
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("sportovi", $sportovi);
    $smarty->assign("vlasnici", $vlasnici);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("kreirajKlub.tpl");

?>