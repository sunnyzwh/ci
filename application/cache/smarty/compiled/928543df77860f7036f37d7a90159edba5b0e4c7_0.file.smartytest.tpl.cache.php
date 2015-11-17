<?php /* Smarty version 3.1.27, created on 2015-11-17 16:07:08
         compiled from "/home/users/zhangwenhan01/www/html/ci/application/views/smartytest.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2132358889564ae02c1d1d45_53428196%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '928543df77860f7036f37d7a90159edba5b0e4c7' => 
    array (
      0 => '/home/users/zhangwenhan01/www/html/ci/application/views/smartytest.tpl',
      1 => 1447747626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132358889564ae02c1d1d45_53428196',
  'variables' => 
  array (
    'title' => 0,
    'body' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564ae02c205a42_60985037',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564ae02c205a42_60985037')) {
function content_564ae02c205a42_60985037 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2132358889564ae02c1d1d45_53428196';
?>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['body']->value;?>

</body>
</html>
<?php }
}
?>