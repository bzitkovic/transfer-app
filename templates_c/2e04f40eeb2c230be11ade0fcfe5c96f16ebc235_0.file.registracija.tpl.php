<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-05 17:34:18
  from 'E:\xampp\htdocs\projekt\templates\registracija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eda65fa809d73_68226743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e04f40eeb2c230be11ade0fcfe5c96f16ebc235' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\registracija.tpl',
      1 => 1591371257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eda65fa809d73_68226743 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <br/> <br/>
    <strong><p id="message" class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></strong>
     <div class="registration-container">
        <form id="registracija-form" novalidate method="POST" action="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
" enctype="multipart/form-data">
            <div class="form-container">
                <label><b>Ime</b></label><br>
                <input type="text" placeholder="Unesite vaše ime" name="ime" required><br>

                <label><b>Prezime</b></label><br>
                <input type="text" placeholder="Unesite vaše prezime" name="prezime" required><br>

                <label><b>Korisničko ime</b></label><br>
                <input id="korisnicko-ime" type="text" placeholder="Unesite vaše korisničko ime" name="korisnicko-ime" size="15" maxlength="15" required><br>

                <label><b>Email</b></label><br>
                <input id="email" type="email" placeholder="Unesite email" name="email" required><br>

                <label><b>Lozinka</b></label><br>
                <input id="lozinka" type="password" placeholder="Unesite lozinku" name="lozinka" required><br>

                <label><b>Potvrda lozinke</b></label><br>
                <input id="potvrda-lozinke" type="password" placeholder="Potvrdite lozinku" name="potvrda-lozinke" required>
                <br/>

                <div id="captcha"></div>
                <input type="text" placeholder="Unesite Captcha kod" id="captchaInput"/><br/>
               <button name="submit" id="registriraj" type="submit" value="submit" class="btn-obrasci">Registracija</button>
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
</html>

<?php }
}
