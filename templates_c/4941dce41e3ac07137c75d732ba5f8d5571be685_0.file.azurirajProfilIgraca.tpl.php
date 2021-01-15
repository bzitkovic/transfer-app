<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 14:59:57
  from 'E:\xampp\htdocs\projekt\templates\azurirajProfilIgraca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee0d94ddc5924_98982798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4941dce41e3ac07137c75d732ba5f8d5571be685' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\azurirajProfilIgraca.tpl',
      1 => 1591793996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee0d94ddc5924_98982798 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br/> <br/>
<strong><p id="message" class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>ID</b></label><br>
            <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['igrac']->value[0]['Profil_ID'];?>
" readonly required><br>

            <label><b>Ime</b></label><br>
            <input type="text" placeholder="Unesite ime igrača . . ." name="ime" value="<?php echo $_smarty_tpl->tpl_vars['igrac']->value[0]['Ime'];?>
" required><br>

            <label><b>Prezime</b></label><br>
            <input type="text" placeholder="Unesite prezime igrača . . ." name="prezime"  value="<?php echo $_smarty_tpl->tpl_vars['igrac']->value[0]['Prezime'];?>
" required><br>

            <label><b>Nacionalnost</b></label><br>
            <input id="nacionalnost" type="text" placeholder="Unesite nacionalnost igraca . . ." name="nacionalnost" size="15" maxlength="15" value="<?php echo $_smarty_tpl->tpl_vars['igrac']->value[0]['Nacionalnost'];?>
" required><br>

            <label><b>Datum rođenja</b></label><br>
            <input id="datum-rodenja" type="date" placeholder="Unesite datum rođenja igrača . . ." name="datum-rodenja" value="<?php echo $_smarty_tpl->tpl_vars['igrac']->value[0]['Godina_Rodenja'];?>
" required><br>

            <label><b>Mjesto rođenja</b></label><br>
            <input id="mjesto-rodenja" type="text" placeholder="Unesite mjesto rodenja igrača . . ." name="mjesto-rodenja" value="<?php echo $_smarty_tpl->tpl_vars['igrac']->value[0]['Mjesto_Rodenja'];?>
" required><br>

            <label><b>Težina</b></label><br>
            <input id="tezina" type="number" placeholder="Unesite tezinu igrača . . ." name="tezina" min="40" max="150"  value="<?php echo $_smarty_tpl->tpl_vars['igrac']->value[0]['Tezina'];?>
" required>
            <br/>

            <label><b>Cijena</b></label><br>
            <input id="cijena" type="number" placeholder="Unesite cijenu igrača . . ." name="cijena" min="0" max="1000000" value="<?php echo $_smarty_tpl->tpl_vars['igrac']->value[0]['Cijena'];?>
" required>
            <br/>

            <label><b>Slika igrača</b></label><br>
            <input id="slika-igraca" type="url" placeholder="Unesite url slike igrača . . ." name="slika-igraca" value="<?php echo $_smarty_tpl->tpl_vars['igrac']->value[0]['Slika'];?>
" required>
            <br/>

            <label><b>Visina</b></label><br>
            <input id="visina" type="number" placeholder="Unesite visinu igrača . . ." name="visina" value="<?php echo $_smarty_tpl->tpl_vars['igrac']->value[0]['Visina'];?>
" required>
            <br/>

            <label><b>Pozicija</b></label><br>
            <input id="pozicija" type="text" placeholder="Unesite poziciju igrača . . ." name="pozicija" value="<?php echo $_smarty_tpl->tpl_vars['igrac']->value[0]['Pozicija'];?>
" required>
            <br/>
            
            <button name="submit" id="registriraj" type="submit" value="submit" class="btn-obrasci">Ažuriraj</button>
        </div>
    </form>
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
