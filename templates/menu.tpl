<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{$path}/css/bzitkovic.css">
    <link rel="stylesheet" href="{$path}/css/bzitkovic_prilagodbe.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>  

    <script src="{$path}/js/bzitkovic.js"></script>
    <title>TransMarkt</title>
</head>
<body id="body" class="dark-mode">

    
    
    <div class="grid-navigation">
        <nav>
            <div class="navigation-list">
                <ul>
                    <li> <a href="{$path}/o_autoru.html">Autor</a> </li>
                     <li> <a href="{$path}/dokumentacija.html">Dokumentacija</a> </li>
                    <li> <a href="{$path}/index.php">Početna</a> </li>
                    <li> <a href="{$path}/ostalo/popisKlubova.php">Klubovi</a> </li>
                    {if !isset($smarty.session.korisnik)}<li> <a href="{$path}/obrasci/registracija.php">Registracija</a> </li>{/if}
                    <li> <a href="{$path}/ostalo/galerija.php">Galerija</a> </li>
                    {if isset($smarty.session.korisnik) && $idKorisnika == 1 }<li> <a href="{$path}/obrasci/kreirajSport.php">Novi sport</a> </li>{/if}
                    {if isset($smarty.session.korisnik) && $idKorisnika == 1 }<li> <a href="{$path}/obrasci/kreirajKlub.php">Novi klub</a> </li>{/if}
                    {if isset($smarty.session.korisnik) && $idKorisnika == 1 }<li> <a href="{$path}/ostalo/profilAdministratora.php">Profil</a> </li>{/if}
                    {if isset($smarty.session.korisnik) && $idKorisnika == 1 }<li> <a href="{$path}/ostalo/podaciAdmin.php">Podaci</a> </li> {/if}
                    {if isset($smarty.session.korisnik) && $idKorisnika == 3 }<li> <a href="{$path}/ostalo/profilIgraca.php">Profil</a> </li> {/if}
                    {if isset($smarty.session.korisnik) && $idKorisnika == 2 }<li> <a href="{$path}/ostalo/profilVlasnika.php">Profil</a> </li> {/if}
                    {if isset($smarty.session.korisnik) && $idKorisnika == 2 }<li> <a href="{$path}/ostalo/popisIgracaUVlasnistvu.php">Popis igrača</a> </li> {/if}
                    {if !isset($smarty.session.korisnik)} <li> <a href="{$path}/obrasci/prijava.php">Prijava</a> </li>{/if}
                    {if isset($smarty.session.korisnik)} <li> <a href="{$path}/obrasci/prijava.php?logout=1">Odjava</a> </li>{/if}
                </ul>
            </div>
        </nav>
    </div>