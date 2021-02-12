<?php
/* Smarty version 3.1.36, created on 2021-01-10 15:59:27
  from 'D:\xampp\htdocs\Zadanie7Kontroler\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ffb164fdaeaa9_25122766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '788534dd7612d97681d8e54d6e49de6725795b01' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Zadanie7Kontroler\\app\\views\\LoginView.tpl',
      1 => 1609683338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5ffb164fdaeaa9_25122766 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16980215225ffb164fda7c50_98608238', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_16980215225ffb164fda7c50_98608238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16980215225ffb164fda7c50_98608238',
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
