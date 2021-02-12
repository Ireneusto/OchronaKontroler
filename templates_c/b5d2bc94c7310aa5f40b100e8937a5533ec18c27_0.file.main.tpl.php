<?php
/* Smarty version 3.1.36, created on 2021-01-10 15:59:27
  from 'D:\xampp\htdocs\Zadanie7Kontroler\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffb164fe29de1_40443749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5d2bc94c7310aa5f40b100e8937a5533ec18c27' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Zadanie7Kontroler\\app\\views\\templates\\main.tpl',
      1 => 1609683338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffb164fe29de1_40443749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8"/>
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "brak tytułu" : $tmp);?>
</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css"
          integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css"/>
</head>
<body>
<div style="margin: 1em;">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14221923165ffb164fe296a3_23938742', 'content');
?>

</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_14221923165ffb164fe296a3_23938742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14221923165ffb164fe296a3_23938742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
