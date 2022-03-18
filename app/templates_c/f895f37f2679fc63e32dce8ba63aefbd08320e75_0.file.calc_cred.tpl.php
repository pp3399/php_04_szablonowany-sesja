<?php
/* Smarty version 4.1.0, created on 2022-03-14 10:58:03
  from 'B:\Documents K\xampp\htdocs\php_02_szablonowany\app\calc_cred.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_622f11ab9bb675_28738550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f895f37f2679fc63e32dce8ba63aefbd08320e75' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_02_szablonowany\\app\\calc_cred.tpl',
      1 => 1647251876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622f11ab9bb675_28738550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2012444212622f11ab986448_91517265', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_824774003622f11ab987859_17060862', 'wrapper');
?>
     

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1354366373622f11ab9881a3_11055607', 'content');
?>






















<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_2012444212622f11ab986448_91517265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2012444212622f11ab986448_91517265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <li>Treść stopki</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li><?php
}
}
/* {/block 'footer'} */
/* {block 'wrapper'} */
class Block_824774003622f11ab987859_17060862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'wrapper' => 
  array (
    0 => 'Block_824774003622f11ab987859_17060862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <h2>Kalkulator kredytowy</h2>
    <p>Wylicz ratę kredytu</p> <?php
}
}
/* {/block 'wrapper'} */
/* {block 'content'} */
class Block_1354366373622f11ab9881a3_11055607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1354366373622f11ab9881a3_11055607',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



        <section>

            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc_cred.php">
                <div class="row gtr-uniform">
                    <div class="col-6 col-12-xsmall">
                        <label for="amount">Kwota</label>
                        <input type="text" name="amt" id="amt" value="<?php echo $_smarty_tpl->tpl_vars['varArray']->value['amt'];?>
"  />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="years">Liczba lat</label>
                        <input type="text" name="yrs" id="yrs" value="<?php echo $_smarty_tpl->tpl_vars['varArray']->value['yrs'];?>
"  />
                    </div>
                    <div class="col-6 col-12-xsmall">
                        <label for="rate">Oprocentowanie (w %)</label>
                        <input type="text" name="rt" id="rt" value="<?php echo $_smarty_tpl->tpl_vars['varArray']->value['rt'];?>
"  />
                    </div>


                    <div class="col-12">
                        <ul class="actions">
                            <li><input type="submit" value="Oblicz" class="primary" /></li>

                        </ul>
                    </div>
                </div>
            </form>
        </section>

        <section>
            <ul class="actions">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/inna_chroniona.php"  class="button">Przejdź na inną chronioną stronę</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php"  class="button">Wyloguj się</a></li>
            </ul>


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

                        <?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
                <?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
                    <h4>Informacje: </h4>
                    <ol class="inf">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
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

            <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                <h4>Miesięczna rata wynosi:</h4>
                <p class="res">
                    <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zł
                </p>
            <?php }?>
        </div>

    <?php
}
}
/* {/block 'content'} */
}
