<?php
  $path = dirname($_SERVER["REQUEST_URI"]);
  $folder = getcwd();
  include_once './header.php';
  $smarty->assign("path", $path);
 
  $trenutnaStranica = "Početna stranica";
  $smarty->assign("trenutnaStranica", $trenutnaStranica);

  if($sess->korisnikUlogiran()){
    $korisnik = intval($sess->dajKorisnika()[10]);
    $korisnikId = intval($sess->dajKorisnika()[0]);
  }
  
  /*
  if (isset($_COOKIE['UvjetiKoristenja'])){ 


      $conn =  new Baza();
      $conn->spojiDB();

      $datumVrijemePrihvacanjaUvjeta = date('Y-m-d H:i:s');
      $query = "UPDATE korisnik SET Uvjeti='{$datumVrijemePrihvacanjaUvjeta}' WHERE Korisnik_ID='{$korisnikId}'";
      $rezutat = $conn->updateDB($query);
      $conn->zatvoriDB();
   
  }
   */
  

  $smarty->display("heading.tpl");
  $smarty->display("menu.tpl");
  $smarty->display("index.tpl");
 
?>

