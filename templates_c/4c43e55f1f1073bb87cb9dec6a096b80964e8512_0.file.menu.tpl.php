<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 17:24:29
  from 'E:\xampp\htdocs\projekt\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee0fb2d891af0_89497179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c43e55f1f1073bb87cb9dec6a096b80964e8512' => 
    array (
      0 => 'E:\\xampp\\htdocs\\projekt\\templates\\menu.tpl',
      1 => 1591802665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee0fb2d891af0_89497179 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/css/bzitkovic.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/css/bzitkovic_prilagodbe.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"><?php echo '</script'; ?>
>  

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/js/bzitkovic.js"><?php echo '</script'; ?>
>
    <title>TransMarkt</title>
</head>
<body id="body" class="dark-mode">

    
    
    <div class="grid-navigation">
        <nav>
            <div class="navigation-list">
                <ul>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/o_autoru.html">Autor</a> </li>
                     <li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/dokumentacija.html">Dokumentacija</a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/index.php">Početna</a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ostalo/popisKlubova.php">Klubovi</a> </li>
                    <?php if (!isset($_SESSION['korisnik'])) {?><li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/obrasci/registracija.php">Registracija</a> </li><?php }?>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ostalo/galerija.php">Galerija</a> </li>
                    <?php if (isset($_SESSION['korisnik']) && $_smarty_tpl->tpl_vars['idKorisnika']->value == 1) {?><li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/obrasci/kreirajSport.php">Novi sport</a> </li><?php }?>
                    <?php if (isset($_SESSION['korisnik']) && $_smarty_tpl->tpl_vars['idKorisnika']->value == 1) {?><li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/obrasci/kreirajKlub.php">Novi klub</a> </li><?php }?>
                    <?php if (isset($_SESSION['korisnik']) && $_smarty_tpl->tpl_vars['idKorisnika']->value == 1) {?><li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ostalo/profilAdministratora.php">Profil</a> </li><?php }?>
                    <?php if (isset($_SESSION['korisnik']) && $_smarty_tpl->tpl_vars['idKorisnika']->value == 1) {?><li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ostalo/podaciAdmin.php">Podaci</a> </li> <?php }?>
                    <?php if (isset($_SESSION['korisnik']) && $_smarty_tpl->tpl_vars['idKorisnika']->value == 3) {?><li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ostalo/profilIgraca.php">Profil</a> </li> <?php }?>
                    <?php if (isset($_SESSION['korisnik']) && $_smarty_tpl->tpl_vars['idKorisnika']->value == 2) {?><li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ostalo/profilVlasnika.php">Profil</a> </li> <?php }?>
                    <?php if (isset($_SESSION['korisnik']) && $_smarty_tpl->tpl_vars['idKorisnika']->value == 2) {?><li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ostalo/popisIgracaUVlasnistvu.php">Popis igrača</a> </li> <?php }?>
                    <?php if (!isset($_SESSION['korisnik'])) {?> <li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/obrasci/prijava.php">Prijava</a> </li><?php }?>
                    <?php if (isset($_SESSION['korisnik'])) {?> <li> <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/obrasci/prijava.php?logout=1">Odjava</a> </li><?php }?>
                </ul>
            </div>
        </nav>
    </div><?php }
}
