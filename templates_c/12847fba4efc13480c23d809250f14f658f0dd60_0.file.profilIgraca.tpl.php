<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-11 12:11:12
  from 'E:\xampp\htdocs\projekt\templates\profilIgraca.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee20340bee7d8_26949710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12847fba4efc13480c23d809250f14f658f0dd60' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\profilIgraca.tpl',
      1 => 1591870272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee20340bee7d8_26949710 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['profilPostoji']->value == 1) {?>
    <div class="grid-main">
        <div class="main-author">
            <section>
                <div class="author-image">
                    <figure>
                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['profil']->value[0][11];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['profil']->value[0][10];
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable1 == 1 || $_prefixVariable2 == 1) {?><img src="<?php echo $_smarty_tpl->tpl_vars['profil']->value[0][3];?>
" alt="slikaIgraca"/> <?php } else { ?> <img src="../multimedija/noProfilePicture.png" alt="slikaIgraca"/><?php }?>
                    </figure>
                </div>
            </section>
                     
            <section>
                <div class="author-description">
                    <hr>
                    <label><strong>Ime Prezime</strong></label>
                    <p><?php echo $_smarty_tpl->tpl_vars['profil']->value[0][0];?>
 <?php echo $_smarty_tpl->tpl_vars['profil']->value[0][1];?>
</p>
                    <hr>
                    <label><strong>Nacionalnost</strong></label>
                    <label><p><?php echo $_smarty_tpl->tpl_vars['profil']->value[0][2];?>
</p></label>
                    <hr>
                    <label><strong>Klub</strong></label>
                    <?php if (!isset($_smarty_tpl->tpl_vars['profil']->value[0][11])) {?><p>Nema</p> <?php } else { ?><p><?php echo $_smarty_tpl->tpl_vars['profil']->value[0][7];?>
</p>  <?php }?>
                    <hr>
                </div>
            </section>    
              <section>
                <div class="author-description">
                    <hr>
                    <label><strong>Visina</strong></label>
                    <p><?php echo $_smarty_tpl->tpl_vars['profil']->value[0][5];?>
 cm</p>
                    <hr>
                    <label><strong>Težina</strong></label>
                    <p><?php echo $_smarty_tpl->tpl_vars['profil']->value[0][4];?>
 kg</p>
                    <hr>
                    <label><strong>Cijena</strong></label>
                    <p><?php echo $_smarty_tpl->tpl_vars['profil']->value[0][6];?>
 €</p>
                    <hr>
                </div>
            </section>   
            <section>
                <div class="author-description">
                    <hr>
                    <label><strong>Pozicija</strong></label>
                    <?php if (!isset($_smarty_tpl->tpl_vars['profil']->value[0][11])) {?><p><?php echo $_smarty_tpl->tpl_vars['profil']->value[0][7];?>
</p> <?php } else { ?><p><?php echo $_smarty_tpl->tpl_vars['profil']->value[0][8];?>
</p>  <?php }?>
                    <hr>
                    <label><strong>Mjesto rođenja</strong></label>
                    <?php if (!isset($_smarty_tpl->tpl_vars['profil']->value[0][11])) {?><p><?php echo $_smarty_tpl->tpl_vars['profil']->value[0][8];?>
</p> <?php } else { ?><p><?php echo $_smarty_tpl->tpl_vars['profil']->value[0][9];?>
</p>  <?php }?>
                    <hr>
                    <label><strong>Datum rođenja</strong></label>
                    <?php if (!isset($_smarty_tpl->tpl_vars['profil']->value[0][11])) {?><p><?php echo $_smarty_tpl->tpl_vars['profil']->value[0][9];?>
</p> <?php } else { ?><p><?php echo $_smarty_tpl->tpl_vars['profil']->value[0][10];?>
</p>  <?php }?>
                    <hr>
                </div>
            </section>                  
        </div>    
    </div>
    <strong><p id="message" class="message"></p></strong>
    <div class="igrac-info">
       
        <table id="tablicaTransfera">
            <caption>Povijest transfera</caption><br/>
            <thead>
                <tr>
                    <th>Klub</th>
                    <th>Vrijeme provedeno</th>
                </tr>  
            </thead>
            <tbody>
             
                <tr class="neparni-red">
                </tr>
               
            </tbody>
        </table>
        <div class="buttonTransferi-container">
            <button class="btn-prikazi" value="prikaziTransfere" id="prikaziTranfere"> Prikaži transfere </button>
        </div>
         
    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['profil']->value[0][11])) {?>
    <div class="igrac-info">
        <table id="tablicaZahtjevaZaTransferom">
            <caption>Zahtjevi za transferom</caption><br/>
            <thead>
                <tr>
                    <th>Klub</th>
                    <th>Ponuđeni iznos</th>
                    <th></th>
                    <th></th>
                </tr>   
            </thead>
            <tbody>
                <tr class="neparni-red">
                </tr>                
            </tbody>
        </table>
        <div class="buttonZahtjevaZaTransferom-container">
            <button class="btn-prikazi" value="prikaziZahtjeveZaTransferom" id="prikaziZahtjeveZaTransferom"> Prikaži zahtjeve </button>
        </div>

    </div>
    <?php }?>

    <?php if (!isset($_smarty_tpl->tpl_vars['profil']->value[0][11])) {?>
    <div class="igrac-info">   
        <table id="tablicaPonuda">
            <caption>Popis ponuda za kupnjom</caption><br/>
            <thead>
                <tr>
                    <th>Klub</th>
                    <th>Ponuđeni iznos</th>
                    <th></th>
                </tr>   
            </thead>
            <tbody>
                <tr class="neparni-red">
                </tr>                
            </tbody>
        </table>
        <div class="buttonPonude-container">
            <button class="btn-prikazi" value="prikaziPonude" id="prikaziPonude"> Prikaži ponude </button>
        </div>
    </div>
    <?php }?>

    <div class="igrac-info">
         <?php if (isset($_smarty_tpl->tpl_vars['profil']->value[0][11])) {?><strong><p>Zahtjev za napuštanjem kluba: </strong> <input id="zahtjevZaNapustanje" type="button" class="btn-prikazi" value="Zatraži"></p> </div><?php }?>
    </div>

<?php } else { ?>
    <div class="registration-container">
        <form id="registracija-form" novalidate method="POST" action="<?php echo $_smarty_tpl->tpl_vars['server']->value;?>
" enctype="multipart/form-data">
            <div class="form-container">
                <label><b>Ime</b></label><br>
                <input type="text" placeholder="Unesite vaše ime" name="ime" required><br>

                <label><b>Prezime</b></label><br>
                <input type="text" placeholder="Unesite vaše prezime" name="prezime" required><br>

                <label><b>Slika</b></label><br>
                <input type="url" placeholder="Unesite vaš url do slike" name="slika-profila" required><br>

                <label><b>Nacionalnost</b></label><br>
                <input type="text" placeholder="Unesite vašu nacionalnost" name="nacionalnost" required><br>

                <label><b>Datum rođenja</b></label><br>
                <input type="date" placeholder="Unesite datum vašeg rođenja" name="datum-rodenja" required><br>

                <label><b>Mjesto rođenja</b></label><br>
                <input  type="text" placeholder="Unesite mjesto vašeg rođenja" name="mjesto-rodenja" required>
                <br/>

                <label><b>Odaberite vaš sport</b></label><br>
                <select name="sportProfila" id="sportProfila">
                    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['sportovi']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['sportovi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][0];?>
"><?php echo $_smarty_tpl->tpl_vars['sportovi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][0];?>
</option>
                    <?php
}
}
?>
                </select><br/>

                <label><b>Pozicija</b></label><br>
                <input type="text" placeholder="Unesite vašu poziciju" name="pozicija" required>
                <br/>
               

                <button name="submit" id="postaviProfil" type="submit" value="submit" class="btn-obrasci">Pošalji</button>
            </div>
        </form>
    </div>
<?php }?>
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
