<?php
/* Smarty version 4.1.0, created on 2022-03-15 09:56:29
  from 'B:\Documents K\xampp\htdocs\php_02_szablonowany\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623054bd4940d4_46360161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7b76b47c11dd3ae3fca788672adec175f5201f8' => 
    array (
      0 => 'B:\\Documents K\\xampp\\htdocs\\php_02_szablonowany\\templates\\main.tpl',
      1 => 1647334383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623054bd4940d4_46360161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
        Solid State by HTML5 UP
        html5up.net | @ajlkn
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
    <head>
        <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/style.css">

            <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/noscript.css" /></noscript>


          


    </head>


    <body class="is-preload">
        <!-- Page Wrapper -->
        <div id="page-wrapper">
            <!-- Header -->
            <header id="header">
                <h1>SuperKalkulator</h1>
            </header>



            <!-- Wrapper -->
            <section id="wrapper">
                <header>
                    <div class="inner">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1190847997623054bd4913c8_06950654', 'wrapper');
?>
                  
                    </div>
                </header>

                <!-- Content -->
                <div class="wrapper" style="margin: 0em">
                    <div class="inner">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_883579671623054bd4926f1_18951686', 'content');
?>

                    </div>
                </div>

            </section>

            <!-- Footer -->
            <section id="footer">
                <div class="inner">


                    <ul class="copyright">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_371797582623054bd493433_48405027', 'footer');
?>


                    </ul>
                </div>
            </section>

        </div>


    </body>
</html><?php }
/* {block 'wrapper'} */
class Block_1190847997623054bd4913c8_06950654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'wrapper' => 
  array (
    0 => 'Block_1190847997623054bd4913c8_06950654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'wrapper'} */
/* {block 'content'} */
class Block_883579671623054bd4926f1_18951686 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_883579671623054bd4926f1_18951686',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_371797582623054bd493433_48405027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_371797582623054bd493433_48405027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
