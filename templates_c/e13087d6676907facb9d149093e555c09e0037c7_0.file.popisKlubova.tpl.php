<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-01 01:59:32
  from 'E:\xampp\htdocs\projekt\templates\popisKlubova.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed444e4337dd1_08472958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e13087d6676907facb9d149093e555c09e0037c7' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\popisKlubova.tpl',
      1 => 1590969552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed444e4337dd1_08472958 (Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-table">
        <table id="tablica">
            <thead>
                <tr>
                    <th>Ime kluba</th>
                    <th>Ukupna vrijednost</th>
                    <th></th>
                </tr>
            </thead>
    
            <tbody>
            
            </tbody>
    
        </table>    
    </div>
    
    <div class="pagination">
        <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['brojStranica']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['brojStranica']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
            <a id="brojStranice" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ostalo/popisKlubova.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
        <?php }
}
?>
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
