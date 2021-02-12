<?php
/* Smarty version 3.1.36, created on 2021-01-03 15:11:31
  from 'C:\xampp\htdocs\Zadanie7Kontroler\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff1d0930f5908_86013209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ea4e2ac9da442588042950a5361922ee4ff63c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie7Kontroler\\app\\views\\templates\\main.tpl',
      1 => 1608913708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ff1d0930f5908_86013209 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6720404685ff1d0930f4e69_94228923', 'content');
?>

</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_6720404685ff1d0930f4e69_94228923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6720404685ff1d0930f4e69_94228923',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
