<?php
/* Smarty version 4.1.0, created on 2022-03-13 22:15:52
  from 'B:\Documents K\xampp\htdocs\php_02_szablonowany\app\security\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622e5f08841de5_70189890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '352b0343038e9f85c41f7c6054ceb0de36382202' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_02_szablonowany\\app\\security\\login.tpl',
      1 => 1647205971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622e5f08841de5_70189890 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1400910242622e5f08835939_84436221', 'footer');
?>


   <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89584589622e5f08836266_10048593', 'wrapper');
?>
     
   
   
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1835272400622e5f08836828_11543858', 'content');
?>






















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block 'footer'} */
class Block_1400910242622e5f08835939_84436221 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1400910242622e5f08835939_84436221',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><?php
}
}
/* {/block 'footer'} */
/* {block 'wrapper'} */
class Block_89584589622e5f08836266_10048593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'wrapper' => 
  array (
    0 => 'Block_89584589622e5f08836266_10048593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2>Zaloguj się</h2>   <?php
}
}
/* {/block 'wrapper'} */
/* {block 'content'} */
class Block_1835272400622e5f08836828_11543858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1835272400622e5f08836828_11543858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <section>

        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php">
            <div class="row gtr-uniform">
                <div class="col-6 col-12-xsmall">
                    <label for="login">Login</label>
                    <input type="text" name="login" id="id_login" placeholder="Login" value="" />
                </div>
                <div class="col-6 col-12-xsmall">
                    <label for="pass">Hasło</label>
                    <input type="password" name="pass" id="id_pass" placeholder="Hasło"  />
                </div>



                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" value="Zaloguj" class="primary" /></li>

                    </ul>
                </div>
            </div>
        </form>
    </section>

    <div class="messages">

                <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
            <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
                <h4>Błąd!</h4>
                <ol class="err">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ol>
            <?php }?>
        <?php }?>
    </div>
        
<?php
}
}
/* {/block 'content'} */
}
