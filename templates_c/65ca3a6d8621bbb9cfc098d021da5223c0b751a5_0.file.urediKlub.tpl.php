<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 22:50:01
  from 'E:\xampp\htdocs\projekt\templates\urediKlub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee14779162ae2_46458263',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65ca3a6d8621bbb9cfc098d021da5223c0b751a5' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\urediKlub.tpl',
      1 => 1591822198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee14779162ae2_46458263 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br/> <br/>
<strong><p id="message" class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>ID</b></label><br>
            <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['klub']->value[0]['Klub_ID'];?>
" readonly required><br>

            <label><b>Naziv</b></label><br>
            <input id="naziv" type="text" name="naziv" value="<?php echo $_smarty_tpl->tpl_vars['klub']->value[0]['Naziv'];?>
" required><br>

            <label><b>Datum osnutka</b></label><br>
            <input id="datumOsnutka" type="text" name="datumOsnutka"  value="<?php echo $_smarty_tpl->tpl_vars['klub']->value[0]['Godina_Osnutka'];?>
" required>
            <br/>

            <label><b>Adresa</b></label><br>
            <input id="adresa" type="text" name="adresa"  value="<?php echo $_smarty_tpl->tpl_vars['klub']->value[0]['Adresa'];?>
" required>
            <br/>

            <label><b>IBAN</b></label><br>
            <input id="iban" type="text"  name="iban" value="<?php echo $_smarty_tpl->tpl_vars['klub']->value[0]['IBAN'];?>
" required>
            <br/>

            <label><b>Mjesto</b></label><br>
            <input id="mjesto" type="text" name="mjesto"  value="<?php echo $_smarty_tpl->tpl_vars['klub']->value[0]['Mjesto'];?>
" required>
            <br/>

            <label><b>Stadion</b></label><br>
            <input id="stadion" type="text" name="stadion"  value="<?php echo $_smarty_tpl->tpl_vars['klub']->value[0]['Stadion'];?>
" required>
            <br/>

            <label><b>Titule</b></label><br>
            <input id="titule" type="number"  name="titule" min="0" max="1000000" value="<?php echo $_smarty_tpl->tpl_vars['klub']->value[0]['Titule'];?>
" required>
            <br/>

            <label><b>Predsjednik</b></label><br>
            <input id="predsjednik" type="text" name="predsjednik"  value="<?php echo $_smarty_tpl->tpl_vars['klub']->value[0]['Predsjednik'];?>
" required>
            <br/>

            <label><b>ID vlasnika</b></label><br>
            <input id="vlasnik-id" type="number"  name="vlasnik-id" min="0" max="1000000" value="<?php echo $_smarty_tpl->tpl_vars['klub']->value[0]['Korisnik_Korisnik_ID'];?>
" required>
            <br/>

            <label><b>ID Sporta</b></label><br>
            <input id="sport-id" type="number" name="sport-id" min="0" max="1000000" value="<?php echo $_smarty_tpl->tpl_vars['klub']->value[0]['Sport_Sport_ID'];?>
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
