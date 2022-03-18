<?php
/* Smarty version 4.1.0, created on 2022-03-14 13:39:48
  from 'B:\Documents K\xampp\htdocs\php_02_szablonowany\app\inna_chroniona.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622f37945853d3_26638235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e3f1a714c864fced5ae2d6b9de8b84603e9b091' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_02_szablonowany\\app\\inna_chroniona.tpl',
      1 => 1647261585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622f37945853d3_26638235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1757140978622f379457ecf7_15286999', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61100809622f3794580162_41087122', 'wrapper');
?>
     

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1103049119622f37945807a6_01809907', 'content');
?>






















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_1757140978622f379457ecf7_15286999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1757140978622f379457ecf7_15286999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><?php
}
}
/* {/block 'footer'} */
/* {block 'wrapper'} */
class Block_61100809622f3794580162_41087122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'wrapper' => 
  array (
    0 => 'Block_61100809622f3794580162_41087122',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2>Inna strona</h2>
    <p>Witam na kolejnej stronie</p> <?php
}
}
/* {/block 'wrapper'} */
/* {block 'content'} */
class Block_1103049119622f37945807a6_01809907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1103049119622f37945807a6_01809907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



        <section>

            <div class="row">
                <div class="col-6 col-12-medium">
                    <h4>Lista rzeczy, które możesz zrobić:</h4>
                    <ul>
                        <li>Zamknąć przeglądarkę</li>
                        <li>Wrócić do poprzedniej strony</li>
                        <li>Wylogować się</li>
                    </ul>


                </div>

            </div>           
        </section>


        <section>
            <ul class="actions">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc_cred.php"  class="button">Powrót do kalkulatora</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php"  class="button primary">Wyloguj się</a></li>
            </ul>
        </section>

    <?php
}
}
/* {/block 'content'} */
}
