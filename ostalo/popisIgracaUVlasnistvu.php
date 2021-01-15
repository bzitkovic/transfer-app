<?php
    $message = "";
    $path = dirname($_SERVER["REQUEST_URI"], 2);
    $folder = dirname(getcwd());
    include_once '../header.php';
    $server = $_SERVER["PHP_SELF"];
    
    $smarty->assign("path", $path);

    $trenutnaStranica = "Popis igrača";
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
   
    if($sess->korisnikUlogiran()){
        $korisnik = intval($sess->dajKorisnika()[0]);
        $korisnikId = intval($sess->dajKorisnika());
        $ulogaKorisnika = $sess->dajKorisnika()[10];
        $korisnikovID = $sess->dajKorisnika()[0];
        $smarty->assign("korisnikId", $korisnikId);
    }

    if(isset($_POST["PrikaziTablicuIgracaUVlasnistvu"])){
        // Dohvat igrača kluba određenog vlasnika
        $conn =  new Baza();
        $conn->spojiDB();

        $igraci = array();
        $query = "SELECT
                    profil.Profil_ID,
                    profil.Ime,
                    profil.Prezime,
                    profil.Pozicija
                FROM
                    profil
                INNER JOIN klub ON klub.Klub_ID = profil.Klub_Klub_ID
                INNER JOIN korisnik ON korisnik.Korisnik_ID = klub.Korisnik_Korisnik_ID
                WHERE
                    korisnik.Korisnik_ID = '$korisnikovID'";

        $rezultat = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultat)){
            $igraci[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $igraci;
        echo json_encode($jsonObjekt);
        exit();

    }
   

    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("popisIgracaUVlasnistvu.tpl");
   
?>