<?php
    $message = "";
    $path = dirname($_SERVER["REQUEST_URI"], 2);
    $folder = dirname(getcwd());
    include_once '../header.php';
    $server = $_SERVER["PHP_SELF"];
    
    $smarty->assign("path", $path);

    $trenutnaStranica = "Podaci sustava";
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
   
    if($sess->korisnikUlogiran()){
        $korisnik = intval($sess->dajKorisnika()[0]);
        $korisnikId = intval($sess->dajKorisnika());
        $ulogaKorisnika = $sess->dajKorisnika()[10];
        $korisnikovID = $sess->dajKorisnika()[0];
        $smarty->assign("korisnikId", $korisnikId);
    }

    if(isset($_POST["PrikaziTablicuDnevnik"])){
        // Dohvat podataka iz tablice dnevnik
        $conn =  new Baza();
        $conn->spojiDB();

        $podaciDnevnika = array();
        $query = "SELECT * FROM dnevnik";

        $rezultat = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultat)){
            $podaciDnevnika[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $podaciDnevnika;
        echo json_encode($jsonObjekt);
        exit();
    }

    
    if(isset($_POST["PrikaziTablicuKlub"])){
        // Dohvat podataka iz tablice klub
        $conn =  new Baza();
        $conn->spojiDB();

        $podaciKluba = array();
        $query = "SELECT * FROM klub";

        $rezultat = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultat)){
            $podaciKluba[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $podaciKluba;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["PrikaziTablicuKorisnik"])){
        // Dohvat podataka iz tablice korisnik
        $conn =  new Baza();
        $conn->spojiDB();

        $podaciKorisnika = array();
        $query = "SELECT * FROM korisnik";

        $rezultat = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultat)){
            $podaciKorisnika[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $podaciKorisnika;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["PrikaziTablicuPonuda"])){
        // Dohvat podataka iz tablice ponuda
        $conn =  new Baza();
        $conn->spojiDB();

        $podaciPonuda = array();
        $query = "SELECT * FROM ponuda";

        $rezultat = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultat)){
            $podaciPonuda[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $podaciPonuda;
        echo json_encode($jsonObjekt);
        exit();
    }


    if(isset($_POST["PrikaziTablicuProfil"])){
        // Dohvat podataka iz tablice profil
        $conn =  new Baza();
        $conn->spojiDB();

        $podaciProfila = array();
        $query = "SELECT * FROM profil";

        $rezultat = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultat)){
            $podaciProfila[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $podaciProfila;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["PrikaziTablicuSport"])){
        // Dohvat podataka iz tablice sport
        $conn =  new Baza();
        $conn->spojiDB();

        $podaciSporta = array();
        $query = "SELECT * FROM sport";

        $rezultat = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultat)){
            $podaciSporta[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $podaciSporta;
        echo json_encode($jsonObjekt);
        exit();
    }

    
    if(isset($_POST["PrikaziTablicuTipa"])){
        // Dohvat podataka iz tablice sport
        $conn =  new Baza();
        $conn->spojiDB();

        $podaciTipa = array();
        $query = "SELECT * FROM tip";

        $rezultat = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultat)){
            $podaciTipa[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $podaciTipa;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["PrikaziTablicuTransfera"])){
        // Dohvat podataka iz tablice transfera
        $conn =  new Baza();
        $conn->spojiDB();

        $podaciTransfera = array();
        $query = "SELECT * FROM transfer";

        $rezultat = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultat)){
            $podaciTransfera[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $podaciTransfera;
        echo json_encode($jsonObjekt);
        exit();
    }

    if(isset($_POST["PrikaziTablicuTransferneZahtjeve"])){
        // Dohvat podataka iz tablice transfernih zahtjeva
        $conn =  new Baza();
        $conn->spojiDB();

        $podaciTransfernihZahtjeva = array();
        $query = "SELECT * FROM transferni_zahtjevi";

        $rezultat = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultat)){
            $podaciTransfernihZahtjeva[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $podaciTransfernihZahtjeva;
        echo json_encode($jsonObjekt);
        exit();
    }


    if(isset($_POST["PrikaziTablicuUloga"])){
        // Dohvat podataka iz tablice uloga
        $conn =  new Baza();
        $conn->spojiDB();

        $podaciUloga = array();
        $query = "SELECT * FROM uloga";

        $rezultat = $conn->selectDB($query);

        while($red = mysqli_fetch_array($rezultat)){
            $podaciUloga[] = $red;
        }
        $conn->zatvoriDB();

        $jsonObjekt = $podaciUloga;
        echo json_encode($jsonObjekt);
        exit();
    }



    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("podaciAdmin.tpl");
?>