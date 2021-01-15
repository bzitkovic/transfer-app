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

    // Spremanje novog korisnika u bazu
    if(isset($_POST["submit"])){
        $ime = $_POST["ime"];
        $prezime = $_POST["prezime"];
        $korisnickoIme = $_POST["korisnicko-ime"];
        $email = $_POST["email"];
        $lozinka = $_POST["lozinka"];
        $lozinkaSha1 = sha1($lozinka);
        $ponovljenaLozinka = $_POST["potvrda-lozinke"];
        $datumVrijemeRegistracije = date('Y-m-d H:i:s');

        if(ProvjeriEmail($email)) {
            if(ProvjeriLozinku($lozinka, $ponovljenaLozinka)){
                $conn =  new Baza();
                $conn->spojiDB();
        
                $generiraniKod = rand(5,1000000);
                $kodSha1 = sha1($generiraniKod);
            
                $query = "INSERT INTO korisnik(Ime, Prezime, Korisnicko_ime, Lozinka, Lozinka_SHA1, Uvjeti, Email,
                          Status, Datum_Vrijeme_Registracije, Uloga_Uloga_ID , Blokiran, Verifikacijski_Kod)
                          VALUES('$ime', '$prezime', '$korisnickoIme', '$lozinka', '$lozinkaSha1', 'uvjeti', '$email', '0', 
                          '$datumVrijemeRegistracije','3', '0', '$kodSha1')";
            
                $rezutat = $conn->updateDB($query);

                mail("brunozitkovic@gmail.com","Aktivacijski kod: ","http://barka.foi.hr/WebDiP/2019_projekti/WebDiP2019x148/obrasci/prijava.php?kod=".$kodSha1);
                if(count($_POST) > 0) { 
                    $message = "Zapis je uspješno pohranjen!";
                }
                $conn->zatvoriDB();
            }
            else {
                $message = "Lozinka mora sadržavati najmanje 5 znakova i lozinke se moraju podudarati!";
            }
        }
        else {
            $message = "Email nije ispravno unesen!";
        }

    }


    // Provjera zauzetosti korisničkog imena u bazi
    if(isset($_POST["Korisnicko_ime"])){
       
        $conn =  new Baza();
        $conn->spojiDb();
        $korisnickoIme = $_POST['Korisnicko_ime'];
     
        $query = "SELECT * FROM korisnik WHERE Korisnicko_ime='".$korisnickoIme."'";
        $rezultat = $conn->selectDB($query);
       
        if(mysqli_num_rows($rezultat) > 0){
            
            $message = "Korisničko ime zauzeto!";

         
         } else {
            $message = "";
         }

         $conn->zatvoriDB();
         $jsonObjekt["poruka"] = $message;
         echo json_encode($jsonObjekt);
         exit();
  
    }

   

    function ProvjeriEmail($email){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    function ProvjeriLozinku($lozinka, $ponovljenaLozinka) {
        if((strlen($lozinka) < 5) || ($lozinka != $ponovljenaLozinka)) {
            return false;
        }
        else {
            return true;
        }
    }


    $trenutnaStranica = "Registracija";
    $smarty->assign("trenutnaStranica", $trenutnaStranica);
    $smarty->assign("message", $message);
    $smarty->assign("server", $server);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("registracija.tpl");
    
    
?>