<?php
/* Smarty version 4.2.1, created on 2023-03-04 20:14:41
  from 'module:pscustomeraccountlinkspsc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_640398a17431e3_60930781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:pscustomeraccountlinkspsc',
      1 => 1671894450,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_640398a17431e3_60930781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/prestashop/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/2a/79/ae/2a79ae0bf8153895448a16a1e3a0345ee5e008c7_2.file.helpers.tpl.php',
    'uid' => '2a79ae0bf8153895448a16a1e3a0345ee5e008c7',
    'call_name' => 'smarty_template_function_renderLogo_97450606464039818896041_77794684',
  ),
));
?><!-- begin /var/www/html/prestashop/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl -->
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="https://prestashop.adanfj.dedyn.io/index.php?controller=my-account" rel="nofollow">
      Your account
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Your account</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="https://prestashop.adanfj.dedyn.io/index.php?controller=identity" title="Information" rel="nofollow">Information</a></li>
                  <li><a href="https://prestashop.adanfj.dedyn.io/index.php?controller=address" title="Add first address" rel="nofollow">Add first address</a></li>
                          <li><a href="https://prestashop.adanfj.dedyn.io/index.php?controller=history" title="Orders" rel="nofollow">Orders</a></li>
                          <li><a href="https://prestashop.adanfj.dedyn.io/index.php?controller=order-slip" title="Credit slips" rel="nofollow">Credit slips</a></li>
                                
<!-- begin module:blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- begin /var/www/html/prestashop/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
  <li>
    <a href="https://prestashop.adanfj.dedyn.io/index.php?fc=module&amp;module=blockwishlist&amp;controller=lists&amp;id_lang=1" title="My wishlists" rel="nofollow">
      Wishlist
    </a>
  </li>
<!-- end /var/www/html/prestashop/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- end module:blockwishlist/views/templates/hook/account/myaccount-block.tpl -->

        <li><a href="https://prestashop.adanfj.dedyn.io/index.php?mylogout=" title="Log me out" rel="nofollow">Sign out</a></li>
       
	</ul>
</div>
<!-- end /var/www/html/prestashop/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl --><?php }
}
