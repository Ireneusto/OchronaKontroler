<?php
/* Smarty version 3.1.36, created on 2021-01-03 15:11:31
  from 'C:\xampp\htdocs\Zadanie7Kontroler\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ff1d09307fe40_01426805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '033bcecaac3b59a22483e36ca43d2a0c0bf959ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie7Kontroler\\app\\views\\LoginView.tpl',
      1 => 1608913708,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5ff1d09307fe40_01426805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10966342025ff1d093077c61_15049574', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_10966342025ff1d093077c61_15049574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10966342025ff1d093077c61_15049574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post" class="pure-form pure-form-aligned bottom-margin">
        <legend>Logowanie do systemu</legend>
        <fieldset>
            <div class="pure-control-group">
                <label for="id_login">login: </label>
                <input id="id_login" type="text" name="login"/>
            </div>
            <div class="pure-control-group">
                <label for="id_pass">pass: </label>
                <input id="id_pass" type="password" name="pass"/><br/>
            </div>
            <div class="pure-controls">
                <input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
            </div>
        </fieldset>
    </form>
    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
