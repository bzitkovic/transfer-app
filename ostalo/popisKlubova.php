<?php
    $path = dirname($_SERVER["REQUEST_URI"], 2);
    $folder = dirname(getcwd());
    $server = $_SERVER["PHP_SELF"];
    include_once '../header.php';
    
    if($sess->korisnikUlogiran()){
        $korisnik = intval($sess->dajKorisnika()[10]);
    }
   
    $smarty->assign("path", $path);

    $trenutnaStranica = "Popis klubova";
    $smarty->assign("trenutnaStranica", $trenutnaStranica);

    // Određivanje rezultata po stranici i određivanje trenutne stranice
    $rezultatiPoStrainici = 7;
    if(!isset($_GET["page"])){
        $page = 1;
    }
    else {
        $page = $_GET["page"];
    }
    


    // Uspostava konekcije 
    $conn =  new Baza();
    $conn->spojiDB();
    $brojPrvogRezultata = ($page-1)*$rezultatiPoStrainici;
    
    $query1 = "SELECT klub.Klub_ID, klub.Naziv, SUM(profil.Cijena) as ukupnaVrijednost 
            from klub LEFT JOIN profil on profil.Klub_Klub_ID = klub.Klub_ID 
            GROUP BY klub.Naziv;";
    $rezultatiKlubova = $conn->selectDB($query1);

    // Broj dohvaćenih rezulatata
    $brojRezultata = mysqli_num_rows($rezultatiKlubova);
    $brojStranica = ceil($brojRezultata/$rezultatiPoStrainici);

    $klubovi = array();
    
    
    $smarty->assign("brojStranica", $brojStranica);
    $smarty->assign("klubovi", $klubovi);
    $conn->zatvoriDB();

    if(isset($_POST["Page"])){
        // Uspostava konekcije 
        $conn =  new Baza();
        $conn->spojiDB();
        
        $page = $_POST["Page"];
        $brojPrvogRezultata = ($page-1)*$rezultatiPoStrainici;
      
        $query1 = "SELECT klub.Klub_ID, klub.Naziv, SUM(profil.Cijena) as ukupnaVrijednost 
                from klub LEFT JOIN profil on profil.Klub_Klub_ID = klub.Klub_ID 
                GROUP BY klub.Naziv;";
        $rezultatiKlubova = $conn->selectDB($query1);

        // Broj dohvaćenih rezulatata
        $brojRezultata = mysqli_num_rows($rezultatiKlubova);
        $brojStranica2 = ceil($brojRezultata/$rezultatiPoStrainici);

        
        

        if(mysqli_num_rows($rezultatiKlubova) != 1){
            $message = "Neuspješno dohvaćanje podataka, pokušajte ponovo!";
        } 
        

        $query2 = "SELECT klub.Klub_ID, klub.Naziv, SUM(profil.Cijena) as ukupnaVrijednost 
                from klub LEFT JOIN profil on profil.Klub_Klub_ID = klub.Klub_ID          
                GROUP BY klub.Naziv LIMIT $brojPrvogRezultata, $rezultatiPoStrainici ";
        $rezultatiKlubova = $conn->selectDB($query2);

        while($red = mysqli_fetch_array($rezultatiKlubova)){
            $klubovi[] = $red;
        }
        
        $smarty->assign("page",$page);
        $smarty->assign("brojStranica", $brojStranica2);
        $smarty->assign("klubovi", $klubovi);
        $conn->zatvoriDB();

        $jsonObjekt = $klubovi;
        echo json_encode($jsonObjekt);
        exit();
    }
    
  
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("popisKlubova.tpl");
    
    
?>