<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 23:30:56
  from 'E:\xampp\htdocs\projekt\templates\urediPonudu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee151109ff694_89755246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '732d5f65b9a336834e71cc975db849e1b7868864' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\urediPonudu.tpl',
      1 => 1591824654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee151109ff694_89755246 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br/> <br/>
<strong><p id="message" class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>ID</b></label><br>
            <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ponuda']->value[0]['Ponuda_ID'];?>
" readonly required><br>

            <label><b>Iznos</b></label><br>
            <input id="iznos" type="text" name="iznos" value="<?php echo $_smarty_tpl->tpl_vars['ponuda']->value[0]['Iznos'];?>
" required><br>

            <label><b>Datum</b></label><br>
            <input id="datum" type="text" name="datum"  value="<?php echo $_smarty_tpl->tpl_vars['ponuda']->value[0]['Datum'];?>
" required>
            <br/>

            <label><b>Pristanak igrača</b></label><br>
            <input id="pristanakIgraca" type="number" min="0" max="1" name="pristanakIgraca"  value="<?php echo $_smarty_tpl->tpl_vars['ponuda']->value[0]['Pristanak_Igraca'];?>
" required>
            <br/>

            <label><b>ID igrača</b></label><br>
            <input id="igracId" type="number" name="igracId" min="0" max="1000000" value="<?php echo $_smarty_tpl->tpl_vars['ponuda']->value[0]['Profil_Profil_ID'];?>
" required>
            <br/>

            <label><b>ID vlasnika</b></label><br>
            <input id="vlasnikId" type="number" min="0" max="1000000" name="vlasnikId"  value="<?php echo $_smarty_tpl->tpl_vars['ponuda']->value[0]['Korisnik_Korisnik_ID'];?>
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
