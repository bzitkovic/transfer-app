<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 00:40:01
  from 'E:\xampp\htdocs\projekt\templates\kreirajSport.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edd6cc196be90_96672067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1de742d2ec7aab52037deb57078d86b12d1f9b34' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\kreirajSport.tpl',
      1 => 1591569600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edd6cc196be90_96672067 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br/> <br/>
<strong><p id="message" class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>Naziv sporta</b></label><br/>
            <input id="nazivSporta" type="text" placeholder="Unesite naziv sporta" name="naziv-sporta" required><br>

            <label><b>Opis sporta</b></label><br/><br/>
            <textarea id="opisSporta" rows="4" cols="55" placeholder="Opišite sport ..." ></textarea><br/><br/>

            <label><b>Pravila sporta</b></label><br><br/>
            <textarea id="pravilaSporta" name="pravila-sporta" rows="4" cols="55" placeholder="Opišite pravila sporta ..."></textarea><br/><br/>

            <label><b>Popularnost</b></label><br>
            <select id="popularnostSporta">
                <option name="Popularan">Popularan</option>
                <option name="Srednje popularan">Srednje popularan</option>
                <option name="Slabo popularanopularan">Slabo popularan</option  >
            </select><br>

            <label><b>Godina nastanka</b></label><br>
            <input id="godinanastankaSporta" type="number" placeholder="Unesite godinu nastanka" name="godina-nastanka" min="1000" max="2020" required><br>

            <button id="submit" name="submit" type="submit" class="btn-obrasci">Unesi</button> <br/> <br/>
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
