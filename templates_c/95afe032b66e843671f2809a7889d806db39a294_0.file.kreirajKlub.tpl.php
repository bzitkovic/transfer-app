<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 15:30:17
  from 'E:\xampp\htdocs\projekt\templates\kreirajKlub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ede3d69a82ec4_79851986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95afe032b66e843671f2809a7889d806db39a294' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\kreirajKlub.tpl',
      1 => 1591623009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ede3d69a82ec4_79851986 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br/> <br/>
<strong><p id="message" class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p></strong>
    <div class="registration-container">
    <form id="registracija-form" novalidate method="POST" action="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
" enctype="multipart/form-data">
        <div class="form-container">
            <label><b>Naziv kluba</b></label><br/>
            <input id="nazivKluba" type="text" placeholder="Unesite naziv sporta . . ." name="naziv-sporta" required><br>

            <label><b>Datum osnutka</b></label><br/>
            <input id="datumOsnutka" type="date" placeholder="Unesite datum osnutka kluba . . ." name="datum-osnutka" required><br>

            <label><b>Adresa kluba</b></label><br/>
            <input id="adresaKluba" type="text" placeholder="Unesite adresu kluba . . ." name="adresa-kluba" required><br>

            <label><b>IBAN kluba</b></label><br/>
            <input id="iban" type="text" placeholder="Unesite IBAN kluba . . ." name="iban" required><br>

            <label><b>Mjesto kluba</b></label><br/>
            <input id="mjestoKluba" type="text" placeholder="Unesite mjesto gdje se klub nalazi . . ." name="mjesto" required><br>

            <label><b>Stadion kluba</b></label><br/>
            <input id="stadionKluba" type="text" placeholder="Unesite stadion kluba . . ." name="stadion-kluba" required><br>

            <label><b>Titule</b></label><br/>
            <input id="titule" type="number" placeholder="Unesite titule kluba . . ." name="titule" min="0" max="100" required><br>

            <label><b>Predsjednik kluba</b></label><br/>
            <input id="predsjednikKluba" type="text" placeholder="Unesite predsjednika kluba . . ." name="predsjednik-kluba" required><br>

            <label><b>Odaberite vlasnika</b></label><br>
            <select id="vlasnikKluba">
                <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['vlasnici']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['vlasnici']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][0];?>
"><?php echo $_smarty_tpl->tpl_vars['vlasnici']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][1];?>
 <?php echo $_smarty_tpl->tpl_vars['vlasnici']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][2];?>
</option>
                <?php
}
}
?>
            </select><br>

            <label><b>Odaberite sport</b></label><br>
            <select id="sportKluba">
                <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sportovi']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['sportovi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][0];?>
"><?php echo $_smarty_tpl->tpl_vars['sportovi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][1];?>
</option>
                <?php
}
}
?>
            </select><br>

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
