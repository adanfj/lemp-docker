<?php
/* Smarty version 4.2.1, created on 2023-03-04 20:14:59
  from '/var/www/html/prestashop/modules/psgdpr/views/templates/front/customerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_640398b3994500_28435389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dbb82ede4758b3e8390dec9bad2f7b08a82d321' => 
    array (
      0 => '/var/www/html/prestashop/modules/psgdpr/views/templates/front/customerAccount.tpl',
      1 => 1650388260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640398b3994500_28435389 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="psgdpr-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['front_controller']->value, ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="material-icons">account_box</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<?php }
}
