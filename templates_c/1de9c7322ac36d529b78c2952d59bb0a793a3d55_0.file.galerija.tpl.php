<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-06 16:07:13
  from 'E:\xampp\htdocs\projekt\templates\galerija.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5edba31199a364_54162662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1de9c7322ac36d529b78c2952d59bb0a793a3d55' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\galerija.tpl',
      1 => 1591452431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edba31199a364_54162662 (Smarty_Internal_Template $_smarty_tpl) {
?><form novalidate method="POST" action="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
">
    <div class="search-container">
        <input id="pretrazivanaVrijednost" type="text" name="pretrazivanaVrijednost" placeholder="Pretraži igrača . . .">
        <label> Sortiraj po nazivu: </label>
        <select id="sortNaziv" name="sortiranja">  
            <option></option>
            <option>sport</option>
            <option>klub</option>
        </select>
        <label> Pretraži po sportu: </label>
        <select id="sportovi" name="sportovi">
            <option></option>
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sportovi']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <option> <?php echo $_smarty_tpl->tpl_vars['sportovi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Naziv'];?>
 </option>
            <?php
}
}
?>
        </select>
        <!-- <button id="pretrazi" name="pretrazi" value="submit" type="submit" class="btn-gallery">Pretraži</button> -->
         <input type="button" id="pretraziSve" value="Pretrazi sve" name="pretraziSve" class="btn-gallery">

    </div>
   
    </form>


<div class="gallery-grid">
    <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['profili']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <div class="img-container">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['profili']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][3];
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == 0) {?><img src="../multimedija/noProfilePicture.png" alt="slikaIgraca"/> <?php } else { ?> <img src="<?php echo $_smarty_tpl->tpl_vars['profili']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Slika'];?>
" alt="slikaIgraca"/><?php }?>
            <p> <?php echo $_smarty_tpl->tpl_vars['profili']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Ime'];?>
  <?php echo $_smarty_tpl->tpl_vars['profili']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['Prezime'];?>
</p>
        </div>
    <?php
}
}
?>

</div>



<div class="pagination">
    <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['brojStranica']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['brojStranica']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration === 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration === $_smarty_tpl->tpl_vars['page']->total;?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ostalo/galerija.php?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
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
    </footer>   <?php }
}
