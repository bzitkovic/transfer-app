<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 22:19:01
  from 'E:\xampp\htdocs\projekt\templates\urediDnevnik.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee14035906544_56556036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50e81c0e19bdabca2e8b21efced92662d4ee0414' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\urediDnevnik.tpl',
      1 => 1591820340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee14035906544_56556036 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br/> <br/>
<strong><p id="message" class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>ID</b></label><br>
            <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['dnevnik']->value[0]['Dnevnik_ID'];?>
" readonly required><br>

            <label><b>Datum - vrijeme radnje</b></label><br>
            <input id="datum-vrijeme-radnje" type="text" name="datum-vrijeme-radnje" value="<?php echo $_smarty_tpl->tpl_vars['dnevnik']->value[0]['Datum_Vrijeme_Radnje'];?>
" required><br>

            <label><b>Radnja</b></label><br>
            <input id="radnja" type="text" name="radnja" value="<?php echo $_smarty_tpl->tpl_vars['dnevnik']->value[0]['Radnja'];?>
" required><br>

            <label><b>Upit</b></label><br>
            <input id="upit" type="text" name="upit"  value="<?php echo $_smarty_tpl->tpl_vars['dnevnik']->value[0]['Upit'];?>
" required>
            <br/>

            <label><b>ID korisnika</b></label><br>
            <input id="korisnik-id" type="number"  name="korisnik-id" min="0" max="1000000" value="<?php echo $_smarty_tpl->tpl_vars['dnevnik']->value[0]['Korisnik_Korisnik_ID'];?>
" required>
            <br/>

            <label><b>ID tipa radnje</b></label><br>
            <input id="tip-id" type="number"  name="tip-id" min="0" max="1000000" value="<?php echo $_smarty_tpl->tpl_vars['dnevnik']->value[0]['Tip_Tip_ID'];?>
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
