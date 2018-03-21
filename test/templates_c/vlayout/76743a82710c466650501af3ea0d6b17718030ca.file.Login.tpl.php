<?php /* Smarty version Smarty-3.1.7, created on 2018-01-30 18:23:54
         compiled from "C:\wamp\www\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Users\Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284205a709fb53bff67-11147366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76743a82710c466650501af3ea0d6b17718030ca' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Users\\Login.tpl',
      1 => 1517336632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284205a709fb53bff67-11147366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a709fb5499cb',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a709fb5499cb')) {function content_5a709fb5499cb($_smarty_tpl) {?>
<!DOCTYPE html><html><head><?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 include ('includes/head.php'); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</head><body><?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 include ('includes/header.php'); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<main><!-- main banner --><section class="main-banner"><!-- Web banner image --><img src="assets/images/custom/uploads/home/main-banner.png" alt="" class="img-responsive hidden-xs" /><!-- Mobile banner image --><img src="assets/images/custom/uploads/home/mobile-banner.png" alt="" class="img-responsive visible-xs" /><div class="container"><div class="row"><div class="col-xs-12 col-sm-9 col-md-7"><div class="top"><h2>E25 Machine Issue Tracket</h2></div><div class="formsection"><div class="login-box" id="loginDiv"><div class=""><h3 class="login-header">Login</h3><br></div><form class="" action="index.php?module=Users&action=Login" method="POST"><?php if (isset($_REQUEST['error'])){?><div class="alert alert-error"><p>Invalid username or password.</p></div><?php }?><?php if (isset($_REQUEST['fpError'])){?><div class="alert alert-error"><p>Invalid Username or Email address.</p></div><?php }?><?php if (isset($_REQUEST['status'])){?><div class="alert alert-success"><p>Mail was send to your inbox, please check your e-mail.</p></div><?php }?><?php if (isset($_REQUEST['statusError'])){?><div class="alert alert-error"><p>Outgoing mail server was not configured.</p></div><?php }?><div class="inputfield control-group"><div class="controls"><input type="text" id="username" name="username" placeholder="Username"></div></div><div class="inputfield control-group"><div class="controls"><input type="password" id="password" name="password" placeholder="Password"></div></div><div class="button-field control-group signin-button"><div class="controls" id="forgotPassword"><input type="submit" value="Login" />&nbsp;&nbsp;&nbsp;<a>Forgot Password ?</a></div></div></form></div><div class="login-box" style="display:none;"  id="forgotPasswordDiv"><form action="forgotPassword.php" method="POST"><div class=""><h3 class="login-header">Forgot Password</h3><br></div><div class="inputfield control-group"><div class="controls"><input type="text" id="username" name="username" placeholder="Username"></div></div><div class="inputfield control-group"><div class="controls"><input type="text" id="email" name="email"  placeholder="Email"></div></div><div class="button-field control-group signin-button"><div class="controls" id="backButton"><input type="submit" class=" " value="Submit" name="retrievePassword">&nbsp;&nbsp;&nbsp;<a>Back</a></div></div></form></div></div><div class="bottom"><p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>Eg: “Cum sociis” “Natoque”</p></div></div></div></div></section></main><?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 include ('includes/footer.php'); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</body><script>jQuery(document).ready(function(){jQuery("#forgotPassword a").click(function() {jQuery("#loginDiv").hide();jQuery("#forgotPasswordDiv").show();});jQuery("#backButton a").click(function() {jQuery("#loginDiv").show();jQuery("#forgotPasswordDiv").hide();});jQuery("input[name='retrievePassword']").click(function (){var username = jQuery('#user_name').val();var email = jQuery('#emailId').val();var email1 = email.replace(/^\s+/,'').replace(/\s+$/,'');var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;if(username == ''){alert('Please enter valid username');return false;} else if(!emailFilter.test(email1) || email == ''){alert('Please enater valid email address');return false;} else if(email.match(illegalChars)){alert( "The email address contains illegal characters.");return false;} else {return true;}});});</script></html>
<?php }} ?>