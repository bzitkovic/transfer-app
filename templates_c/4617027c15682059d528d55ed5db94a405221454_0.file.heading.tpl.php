<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-30 20:41:14
  from 'E:\xampp\htdocs\projekt\templates\heading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed2a8ca667d01_19572576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4617027c15682059d528d55ed5db94a405221454' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\heading.tpl',
      1 => 1590864071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed2a8ca667d01_19572576 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <div class="grid-header">
    
        <div class="header-main">
            <figure>
                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/index.php"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/multimedija/logo.png" alt="TransMarktLogo"> </a>
            </figure>            
            
            <h1><?php echo $_smarty_tpl->tpl_vars['trenutnaStranica']->value;?>
</h1>
            <?php if (isset($_SESSION['korisnik'])) {?> <p> Prijavljeni ste kao: <strong> <?php echo $_smarty_tpl->tpl_vars['prijavljeniKorisnik']->value;?>
 </strong> </p> <?php }?>
            <button class="darkModeButton" name="dark_light" onclick="upaliUgasiSvijetlo()" title="Toggle dark/light mode">🌓</button>
        </div>
  
    </div>
</header><?php }
}
