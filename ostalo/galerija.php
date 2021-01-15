<?php
    $path = dirname($_SERVER["REQUEST_URI"], 2);
    $folder = dirname(getcwd());
    $server = $_SERVER["PHP_SELF"];
    include_once '../header.php';

    if($sess->korisnikUlogiran()){
        $korisnik = intval($sess->dajKorisnika()[10]);
    }

    $trenutnaStranica = "Galerija igrača";
    $smarty->assign("trenutnaStranica", $trenutnaStranica);

    // Određivanje rezultata po stranici i određivanje trenutne stranice
    $rezultatiPoStrainici = 7;
    if(!isset($_GET["page"])){
        $page = 1;
    }
    else {
        $page = $_GET["page"];
    }
    $smarty->assign("page",$page);


    // Dohvati igrače za odabrani klub, inače prikaži sve igrače
    if(isset($_GET["id"])){
        $conn =  new Baza();
        $conn->spojiDB();
        $profili = array();
        $query = "SELECT DISTINCT profil.Ime, profil.Prezime, profil.Slika, profil.Suglasnost
                 from profil INNER JOIN klub on profil.Klub_Klub_ID = '{$_GET["id"]}'";
        $rezultatProfila = $conn->selectDB($query);
        $brojRezultata = mysqli_num_rows($rezultatProfila);
        $brojStranica = ceil($brojRezultata/$rezultatiPoStrainici);
        $conn->zatvoriDB();

        if(mysqli_num_rows($rezultatProfila) != 1){
            $greska = "Neuspješno dohvaćanje podataka, pokušajte ponovo!";
        } 
    

        while($red = mysqli_fetch_array($rezultatProfila)){
            $profili[] = $red;
        }

    }
    else{
        $conn =  new Baza();
        $conn->spojiDB();
        $profili = array();
        $brojPrvogRezultata = ($page-1)*$rezultatiPoStrainici;
        $query1 = "SELECT DISTINCT profil.Ime, profil.Prezime, profil.Slika, profil.Suglasnost from profil";
        $rezultatProfila = $conn->selectDB($query1);

        // Broj dohvaćenih rezulatata
        $brojRezultata = mysqli_num_rows($rezultatProfila);
        $brojStranica = ceil($brojRezultata/$rezultatiPoStrainici);

        $query2 = "SELECT DISTINCT profil.Ime, profil.Prezime, profil.Slika, profil.Suglasnost from profil LIMIT $brojPrvogRezultata, $rezultatiPoStrainici ";
        $rezultatProfila = $conn->selectDB($query2);

        while($red = mysqli_fetch_array($rezultatProfila)){
            $profili[] = $red;
        
        }
        
        $smarty->assign("brojStranica", $brojStranica);
        $conn->zatvoriDB();
    }

   
    
    // Pretraži igrače
    if(isset($_POST["Pretrazivana_vrijednost"])){
       
        $conn =  new Baza();
        $conn->spojiDB();
        $sport =  $_POST["Sportovi"];
        $sortiraj =  $_POST["Sortiranja"];
        $profili = array();
        $pretrazivanaVrijednost = $_POST['Pretrazivana_vrijednost'];
       
        if(!empty($sport) && empty($sortiraj)){
            $query = "SELECT
            profil.Ime,
            profil.Prezime,
            profil.Slika, 
            profil.Suglasnost
            FROM
                profil          
            WHERE CONCAT(`Ime`, `Prezime`) 
            LIKE '%".$pretrazivanaVrijednost."%' AND profil.Sport = '$sport'             
            ORDER BY
                profil.Sport ASC";

            $rezultatProfila = $conn->selectDB($query);
        }
        else if(!empty($sortiraj) && empty($sport)){
            $query = "SELECT
            profil.Ime,
            profil.Prezime,
            profil.Slika, 
            profil.Suglasnost
            FROM
                profil
            LEFT JOIN klub ON klub.Klub_ID = profil.Klub_Klub_ID
            LEFT JOIN sport ON sport.Sport_ID = klub.Sport_Sport_ID    
            WHERE CONCAT(`Ime`, `Prezime`) 
            LIKE '%".$pretrazivanaVrijednost."%'        
            ORDER BY
                $sortiraj.Naziv ASC";
            $rezultatProfila = $conn->selectDB($query);
        }
        else if(!empty($sport) && !empty($sortiraj)){
            $query = "SELECT
            profil.Ime,
            profil.Prezime,
            profil.Slika, 
            profil.Suglasnost
            FROM
                profil
            LEFT JOIN klub ON klub.Klub_ID = profil.Klub_Klub_ID
            LEFT JOIN sport ON sport.Sport_ID = klub.Sport_Sport_ID    
            WHERE CONCAT(`Ime`, `Prezime`) 
            LIKE '%".$pretrazivanaVrijednost."%' AND profil.Sport = '$sport'             
            ORDER BY
                $sortiraj.Naziv ASC";

            $rezultatProfila = $conn->selectDB($query);
            
        }
        else {
            $query = "SELECT profil.Ime, profil.Prezime, profil.Slika, profil.Suglasnost FROM profil WHERE CONCAT(`Ime`, `Prezime`) 
            LIKE '%".$pretrazivanaVrijednost."%'";

            $rezultatProfila = $conn->selectDB($query);
        }
   

        while($red = mysqli_fetch_array($rezultatProfila)){
            $profili[] = $red;
        }
        $conn->zatvoriDB();
       
        $jsonObjekt = $profili;
        echo json_encode($jsonObjekt);
        exit();
    }
    
    if(isset($_POST["PretraziSve"])){
        $conn =  new Baza();
        $conn->spojiDB();

        $pretraziSve =  $_POST["PretraziSve"];
        $profili = array();
        $brojPrvogRezultata = ($page-1)*$rezultatiPoStrainici;
        $query1 = "SELECT DISTINCT profil.Ime, profil.Prezime, profil.Slika, profil.Suglasnost from profil";
        $rezultatProfila = $conn->selectDB($query1);

        // Broj dohvaćenih rezulatata
        $brojRezultata = mysqli_num_rows($rezultatProfila);
        $brojStranica = ceil($brojRezultata/$rezultatiPoStrainici);
       
      

        if(mysqli_num_rows($rezultatProfila) != 1){
            $greska = "Neuspješno dohvaćanje podataka, pokušajte ponovo!";
        } 
    
        $query2 = "SELECT DISTINCT profil.Ime, profil.Prezime, profil.Slika, profil.Suglasnost from profil 
                   LIMIT $brojPrvogRezultata, $rezultatiPoStrainici";
        $rezultatProfila = $conn->selectDB($query2);
        while($red = mysqli_fetch_array($rezultatProfila)){
            $profili[] = $red;
        }

       
        $conn->zatvoriDB();

        $jsonObjekt = $profili;
        echo json_encode($jsonObjekt);
        exit();
    }

    // Dohvati sportove
    $conn =  new Baza();
    $conn->spojiDB();

    
    $query = "SELECT sport.Naziv from sport";
    $rezultatiSportova = $conn->selectDB($query);
    $sportovi = array();
    $conn->zatvoriDB();

    if(mysqli_num_rows($rezultatiSportova) != 1){
        $greska = "Neuspješno dohvaćanje podataka, pokušajte ponovo!";
    } 
    

    while($red = mysqli_fetch_array($rezultatiSportova)){
        $sportovi[] = $red;
    }

    $smarty->assign("sportovi", $sportovi);


    //Dohvati profil koji igra u selektiranom sportu
    if(isset($_POST['pretraziPoSportu'])){
        $sport =  $_POST["sportovi"];
        $conn =  new Baza();
        $conn->spojiDB();

        $query = "SELECT profil.Ime, profil.Prezime, profil.Slika, profil.Suglasnost
                  from profil INNER JOIN klub on profil.Klub_Klub_ID = klub.Klub_ID 
                  INNER JOIN sport on sport.Sport_ID = klub.Sport_Sport_ID
                  WHERE sport.Naziv LIKE '%{$sport}%'";
        $rezultatProfila = $conn->selectDB($query);
        $profili = array();
        $conn->zatvoriDB();

        if(mysqli_num_rows($rezultatProfila) != 1){
            $greska = "Neuspješno dohvaćanje podataka, pokušajte ponovo!";
        } 
        

        while($red = mysqli_fetch_array($rezultatProfila)){
            $profili[] = $red;
        }
    }

    $smarty->assign("profili", $profili);
    $smarty->assign("path", $path);
    $smarty->assign("server", $server);
    $smarty->assign("brojStranica", $brojStranica);
    $smarty->display("heading.tpl");
    $smarty->display("menu.tpl");
    $smarty->display("galerija.tpl");

?>