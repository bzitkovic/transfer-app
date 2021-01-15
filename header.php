<?php
    require_once "$folder/vanjske_biblioteke/smarty-3.1.34/libs/Smarty.class.php";
    require_once "$folder/vanjske_biblioteke/sesija.class.php";
    require_once "$folder/vanjske_biblioteke/baza.class.php";

    $sess = new Sesija();
   

    $smarty = new Smarty();
    $smarty->setTemplateDir("$folder/templates")
           ->setCompileDir("$folder/templates_c")
           ->setCacheDir("$folder/cache")
           ->setConfigDir("$folder/configs")
           ->setPluginsDir(SMARTY_PLUGINS_DIR);

    if($sess->korisnikUlogiran()){
        $prijavljeniKorisnik = $sess->dajKorisnika()[3];
        $idKorisnika = $sess->dajKorisnika()[10];

        $smarty->assign("prijavljeniKorisnik", $prijavljeniKorisnik);
        $smarty->assign("idKorisnika", $idKorisnika);
    }
    
    
?>