<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 22:29:47
  from 'E:\xampp\htdocs\projekt\templates\podaciAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee142bb1fcd99_61247356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74b0ef5387cd9a42ae56c6c5f3d9df48222d166c' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\podaciAdmin.tpl',
      1 => 1591820986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee142bb1fcd99_61247356 (Smarty_Internal_Template $_smarty_tpl) {
?><br/><br/><strong><p id="message" class="message"></p></strong>
<div class="admin-info">
    <table id="tablicaDnevnik">
        <caption>Podaci dnevnika</caption><br/>
        <thead>
            <tr>
                <th>ID dnevnika</th>
                <th>Datum i vrijeme radnje</th>
                <th>Radnja</th>
                <th>Upit</th>
                <th>ID korisnika</th>
                <th>ID tipa radnje</th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
            <tr class="neparni-red">
            </tr>
            
        </tbody>
    </table>
    <div class="buttonDnevnik-container">
        <button class="btn-prikazi" value="prikaziTablicuDnevnik" id="prikaziTablicuDnevnik"> Prikaži podatke </button>
    </div>
</div>

<div class="admin2-info">
    <table id="tablicaKlub">
        <caption>Podaci kluba</caption><br/>
        <thead>
            <tr>
                <th>ID kluba</th>
                <th>Naziv</th>
                <th>datum osnutka</th>
                <th>Adresa</th>
                <th>IBAN</th>
                <th>Mjesto</th>
                <th>Stadion</th>
                <th>Titule</th>
                <th>Predsjednik</th>
                <th>ID vlasnika</th>
                <th>ID sporta</th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
          
            
        </tbody>
    </table>
    <div class="buttonKlub-container">
        <button class="btn-prikazi" value="prikaziTablicuKlub" id="prikaziTablicuKlub"> Prikaži podatke </button>
    </div>
</div>

<div class="admin2-info">
    <table id="tablicaKorisnik">
        <caption>Podaci korisnika</caption><br/>
        <thead>
            <tr>
                <th>ID korisnika</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Korisničko ime</th>
                <th>Lozinka</th>
                <th>Lozinka SHA1</th>
                <th>Prihvaćeni uvjeti</th>
                <th>Email</th>
                <th>Status</th>
                <th>Datum i vrijeme registracije</th>
                <th>ID uloge</th>
                <th>Blokiran</th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <div class="buttonKorisnik-container">
        <button class="btn-prikazi" value="prikaziTablicuKorisnik" id="prikaziTablicuKorisnik"> Prikaži podatke </button>
    </div>
</div>

<div class="admin-info">
    <table id="tablicaPonuda">
        <caption>Podaci ponuda</caption><br/>
        <thead>
            <tr>
                <th>ID ponude</th>
                <th>Iznos</th>
                <th>Datum</th>
                <th>Pristanak igrača</th>
                <th>ID igrača</th>
                <th>ID Vlasnika</th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <div class="buttonPonuda-container">
        <button class="btn-prikazi" value="prikaziTablicuPonuda" id="prikaziTablicuPonuda"> Prikaži podatke </button>
    </div>
</div>

<div class="admin2-info">
    <table id="tablicaProfil">
        <caption>Podaci profila igrača</caption><br/>
        <thead>
            <tr>
                <th>ID profila</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Nacionalnost</th>
                <th>Datum rođenja</th>
                <th>Mjesto rođenja</th>
                <th>Težina</th>
                <th>Cijena</th>
                <th>Visina</th>
                <th>Sport</th>
                <th>Pozicija</th>
                <th>Zahtjev za napustanje</th>
                <th>Suglasnost</th>
                <th>ID kluba</th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <div class="buttonProfil-container">
        <button class="btn-prikazi" value="prikaziTablicuProfil" id="prikaziTablicuProfil"> Prikaži podatke </button>
    </div>
</div>


<div class="admin-info">
    <table id="tablicaSport">
        <caption>Podaci sporta</caption><br/>
        <thead>
            <tr>
                <th>ID sporta</th>
                <th>Naziv</th>
                <th>Opis</th>
                <th>Pravila</th>
                <th>Popularnost </th>
                <th>Godina nastanka</th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <div class="buttonSport-container">
        <button class="btn-prikazi" value="prikaziTablicuSporta" id="prikaziTablicuSporta"> Prikaži podatke </button>
    </div>
</div>

<div class="admin-info">
    <table id="tablicaTip">
        <caption>Podaci tipa radnje</caption><br/>
        <thead>
            <tr>
                <th>ID tipa</th>
                <th>Naziv</th>
                <th>Opis</th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <div class="buttonTip-container">
        <button class="btn-prikazi" value="prikaziTablicuTipa" id="prikaziTablicuTipa"> Prikaži podatke </button>
    </div>
</div>

<div class="admin-info">
    <table id="tablicaTransfera">
        <caption>Podaci transfera</caption><br/>
        <thead>
            <tr>
                <th>ID transfera</th>
                <th>Datum</th>
                <th>Iznos</th>
                <th>Klub</th>
                <th>Dolazni/odlazni</th>
                <th>ID igrača</th>
                <th>ID vlasnika</th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <div class="buttonTransfer-container">
        <button class="btn-prikazi" value="prikaziTablicuTransfera" id="prikaziTablicuTransfera"> Prikaži podatke </button>
    </div>
</div>

<div class="admin-info">
    <table id="tablicaTransfernizahtjevi">
        <caption>Podaci transfernih zahtjeva</caption><br/>
        <thead>
            <tr>
                <th>ID zahtjeva</th>
                <th>Cijena</th>
                <th>Datum</th>
                <th>Pristanak igrača</th>
                <th>Pristanak Vlasnika</th>
                <th>ID igrača</th>
                <th>ID vlasnika</th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <div class="buttonTransferniZahtjevi-container">
        <button class="btn-prikazi" value="prikaziTablicuTransferneZahtjeve" id="prikaziTablicuTransferneZahtjeve"> Prikaži podatke </button>
    </div>
</div>

<div class="admin-info">
    <table id="tablicaUloga">
        <caption>Podaci uloga</caption><br/>
        <thead>
            <tr>
                <th>ID uloge</th>
                <th>Naziv</th>
                <th>Obveze</th>
                <th>Opis</th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
        </tbody>
    </table>
    <div class="buttonUloga-container">
        <button class="btn-prikazi" value="prikaziTablicuUloga" id="prikaziTablicuUloga"> Prikaži podatke </button>
    </div>
</div>

<footer>
        <div class="grid-footer">
            <div class="footer-main">
                <div class="footer-description">
                    <label>&copy; 2020 &nbsp; Bruno Žitković &nbsp; | &nbsp; <a href="mailto: bzitkovic@foi.hr ">bzitkovic@foi.hr</a></label>
                </div>
                <div class="footer-image">
                    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fbarka.foi.hr%2FWebDiP%2F2019%2Fzadaca_01%2Fbzitkovic%2Findex.html"><img class="icon " src="../multimedija/HTML5-icon.png " alt="HTMLSLika "></a>
                    <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fbarka.foi.hr%2FWebDiP%2F2019%2Fzadaca_01%2Fbzitkovic%2Fcss%2Fbzitkovic.css&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en"><img class="icon " src="../multimedija/CSS3-icon.png " alt="CSSSlika "></a>
                </div>
            </div>   
        </div>
</footer>   
</body>
</html><?php }
}
