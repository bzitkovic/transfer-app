<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 18:49:50
  from 'E:\xampp\htdocs\projekt\templates\profilAdministratora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ede6c2e73b2e7_66720134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daae16376bf3e55eeb77acc5eb10a2f023f53e11' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\profilAdministratora.tpl',
      1 => 1591634939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede6c2e73b2e7_66720134 (Smarty_Internal_Template $_smarty_tpl) {
?><br/><br/><strong><p id="message" class="message"></p></strong>
<div class="admin-info">
    <table id="tablicaZahtjevaZaNapustanje">
        <caption>Zahtjevi za napuštanje kluba</caption><br/>
        <thead>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th></th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
            <tr class="neparni-red">
            </tr>
            
        </tbody>
    </table>
    <div class="buttonZahtjeviZaNapustanje-container">
        <button class="btn-prikazi" value="prikaziZahtjeveZaNapustanje" id="prikaziZahtjeveZaNapustanje"> Prikaži zahtjeve </button>
    </div>
</div>

<div class="admin-info">
    <table id="tablicaBlokiranihKorisnika">
        <caption>Blokirani korisnici</caption><br/>
        <thead>
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th></th>
                <th></th>
            </tr>  
        </thead>
        <tbody>
            
            <tr class="neparni-red">
            </tr>
            
        </tbody>
    </table>
    <div class="buttonBlokiraniKorisnici-container">
        <button class="btn-prikazi" value="prikaziBlokiraneKorisnike" id="prikaziBlokiraneKorisnike"> Prikaži korisnike </button>
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
