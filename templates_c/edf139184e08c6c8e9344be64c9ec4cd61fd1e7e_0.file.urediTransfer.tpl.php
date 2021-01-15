<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-11 00:24:59
  from 'E:\xampp\htdocs\projekt\templates\urediTransfer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee15dbb0fbc24_91620437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edf139184e08c6c8e9344be64c9ec4cd61fd1e7e' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\urediTransfer.tpl',
      1 => 1591827896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee15dbb0fbc24_91620437 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br/> <br/>
<strong><p id="message" class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>ID</b></label><br>
            <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['transfer']->value[0]['Transfer_ID'];?>
" readonly required><br>

            <label><b>Datum</b></label><br>
            <input type="text" name="datum" value="<?php echo $_smarty_tpl->tpl_vars['transfer']->value[0]['Datum_Transfera'];?>
" required><br>

            <label><b>Iznos</b></label><br>
            <input type="text" name="iznos" value="<?php echo $_smarty_tpl->tpl_vars['transfer']->value[0]['Iznos'];?>
" required><br>

            <label><b>ID kluba</b></label><br>
            <input type="text" name="klubId" value="<?php echo $_smarty_tpl->tpl_vars['transfer']->value[0]['Klub'];?>
" required><br>

            <label><b>Dolazni/Odlazni</b></label><br>
            <input type="text" name="dolazniOdlazni" value="<?php echo $_smarty_tpl->tpl_vars['transfer']->value[0]['dolazni_odlazni'];?>
" required><br>

            <label><b>ID igrača</b></label><br>
            <input type="text" name="igracId" value="<?php echo $_smarty_tpl->tpl_vars['transfer']->value[0]['Profil_Profil_ID'];?>
" required><br>

            <label><b>ID vlasnika</b></label><br>
            <input type="text" name="vlasnikId" value="<?php echo $_smarty_tpl->tpl_vars['transfer']->value[0]['Korisnik_Korisnik_ID'];?>
" required><br>

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
