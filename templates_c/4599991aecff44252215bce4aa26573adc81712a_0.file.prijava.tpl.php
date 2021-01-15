<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-11 12:29:15
  from 'E:\xampp\htdocs\projekt\templates\prijava.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee2077b10b396_50686395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4599991aecff44252215bce4aa26573adc81712a' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\prijava.tpl',
      1 => 1591871309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee2077b10b396_50686395 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <br/> <br/>
    <strong><p id="message" class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></strong>
    <div class="login-container">
        <form novalidate method="GET" action="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
">
            <div class="form-container">
                <label><b>Korisničko ime</b></label> <br/>
                <input id="korisnicko-ime" type="text" placeholder="Unesite vaše korisničko ime" name="korisnicko-ime" maxlength="15" required> <br/>
                <label><b>Lozinka</b></label> <br/>
                <input id="lozinka" type="password" placeholder="Unesite lozinku" name="lozinka" required> <br/>
                <input type="checkbox" name="zapamtiMe" value="zapamtiMe"> <label> Zapamti me </label> <br/> <br/>

                <button type="reset" class="btn-obrasci">Očisti</button>
                <button id="submit" name="submit" type="submit" class="btn-obrasci">Prijava</button> <br/> <br/>
                <a id="zaboravljenaLozinka" href="#" name="zaboravljenaLozinka"> Zaboravljena lozinka? </a>
            </div><br>
            <p>Administrator: bzitkovic - admin_01</p>
            <p>Moderator: aagnelli - vlasnik_01</p>
            <p>Registrirani korisnik: mpjaca - igrac_05</p>
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
