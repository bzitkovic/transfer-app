<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-11 00:51:52
  from 'E:\xampp\htdocs\projekt\templates\urediUlogu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee16408901a53_16542078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '327e1de7d6f1c701e93df5ea2542d39765054eba' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\urediUlogu.tpl',
      1 => 1591829454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee16408901a53_16542078 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br/> <br/>
<strong><p id="message" class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>ID</b></label><br>
            <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['uloga']->value[0]['Uloga_ID'];?>
" readonly required><br>

            <label><b>Naziv</b></label><br>
            <input type="text" name="naziv" value="<?php echo $_smarty_tpl->tpl_vars['uloga']->value[0]['Naziv'];?>
" required><br>

            <label><b>Obveze</b></label><br>
            <input type="text" name="obveze"  value="<?php echo $_smarty_tpl->tpl_vars['uloga']->value[0]['Obveze'];?>
" required><br>


            <label><b>Opis</b></label><br>
            <input type="text" name="opis" value="<?php echo $_smarty_tpl->tpl_vars['uloga']->value[0]['Opis'];?>
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
