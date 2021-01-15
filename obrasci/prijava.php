<?php
    
    if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
        $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $location);
        exit;
    }
    
    $message = "";
    $path = dirname($_SERVER["REQUEST_URI"], 2);
    $folder = dirname(getcwd());
    include_once '../header.php';
    $server = $_SERVER["PHP_SELF"];
    
    
    $smarty->assign("path", $path);

    $trenutnaStranica = "Prijava";
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
   
    // Delete session
    if(isset($_GET["logout"])){
       
        $sess->obrisiSesiju();
        $message = "Korisnik odjavljen!";
    }

    if(isset($_GET["kod"])){
        $conn =  new Baza();
        $conn->spojiDb();

        $verifikacijskiKod = $_GET["kod"];

        $query = "UPDATE
                        korisnik
                 SET
                    Status = 1
                 WHERE
                    korisnik.Verifikacijski_Kod = '$verifikacijskiKod'";

        $rezultat = $conn->selectDB($query);

        $conn->zatvoriDB();
        $message = "Korisnički račun je uspješno aktiviran!";
    }
   
    // User login
    if(isset($_POST["KorisnickoImeDobro"])){
        // Povezivanje na bazu
        $conn =  new Baza();
        $conn->spojiDb();
        if(empty($message)){
            $query = "SELECT * FROM korisnik
                      WHERE Korisnicko_ime = '".$_POST["KorisnickoImeDobro"]."' 
                      AND lozinka = '".$_POST["Lozinka"]."' AND Blokiran = 0 AND Status = 1";
            $rezultat = $conn->selectDB($query);
            $korisnik = mysqli_fetch_array($rezultat);
            $conn->zatvoriDB();
 
            if(mysqli_num_rows($rezultat) == 0){
                $jsonObjekt = "Neuspješna prijava, pokušajte ponovo!";
                echo json_encode($jsonObjekt);
                exit();

            } else {
                $sess->kreirajKorisnika($korisnik);
                $korisnik = intval($sess->dajKorisnika()[10]);
                $jsonObjekt = "Prijava ok";
                echo json_encode($jsonObjekt);
                exit();
            }
            
        }
        
    }

    if(isset($_POST["KorisnickoImeEmail"])){
        // Pošalji email na zahtjev zaboravljene lozinke
        $conn =  new Baza();
        $conn->spojiDb();

        $korisnickoIme = $_POST["KorisnickoImeEmail"];

        function generateRandomString($length = 6) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
    
        $query = "SELECT * FROM korisnik WHERE Korisnicko_ime = '$korisnickoIme'";
        $rezultat = $conn->selectDB($query);
        $korisnik = mysqli_fetch_array($rezultat);
        $email = $korisnik["Email"];
        $novaLozinka = generateRandomString();
        $sha1Lozinka = sha1($novaLozinka);
        
        $query2 = "UPDATE
                        korisnik
                    SET
                        Lozinka = '$novaLozinka',
                        Lozinka_SHA1 = '$sha1Lozinka'
                    WHERE
                        korisnik.Korisnicko_ime = '$korisnickoIme'";
        $rezultat2 = $conn->selectDB($query2);


        $conn->zatvoriDB();

        mail("brunozitkovic@gmail.com","Nova lozinka",$novaLozinka);
        $jsonObjekt = "Poslan email s novom lozinkom!";
        echo json_encode($jsonObjekt);
        exit();
        
    }

   

    if(isset($_POST["BrojPokusaja"])){
        // Zaključaj korisnikov račun
        $conn =  new Baza();
        $conn->spojiDb();

        $korisnickoIme = $_POST["KorisnickoIme"];
    
        $query = "UPDATE
                    korisnik
                 SET
                    korisnik.Blokiran = 1
                 WHERE
                    korisnik.Korisnicko_ime = '$korisnickoIme'";
        $rezultat = $conn->selectDB($query);
      
   

        $conn->zatvoriDB();

        $jsonObjekt = "Unijeli ste krive podatke 3 puta i vaš račun je zaključan!";
        echo json_encode($jsonObjekt);
        exit();
        
    }
    
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("prijava.tpl");
?>