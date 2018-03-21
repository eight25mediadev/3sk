{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}
{strip}
<!DOCTYPE html>
<html>
	<head>
	{php} include ('includes/head.php'); {/php}
	</head>
	<body>
		{php} include ('includes/header.php'); {/php}
		<main>
			<!-- main banner -->
			<section class="main-banner">
				<!-- Web banner image -->
				<img src="assets/images/custom/uploads/home/main-banner.png" alt="" class="img-responsive hidden-xs" />
				<!-- Mobile banner image -->
				<img src="assets/images/custom/uploads/home/mobile-banner.png" alt="" class="img-responsive visible-xs" />	

				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-9 col-md-7">
							<div class="top">
								<h2>E25 Machine Issue Tracket</h2>
							</div>
							<div class="formsection">
								<div class="login-box" id="loginDiv">
								<div class="">
												<h3 class="login-header">Login</h3>
												<br>
											</div>
								<form class="" action="index.php?module=Users&action=Login" method="POST">
												{if isset($smarty.request.error)}
													<div class="alert alert-error">
														<p>Invalid username or password.</p>
													</div>
												{/if}
												{if isset($smarty.request.fpError)}
													<div class="alert alert-error">
														<p>Invalid Username or Email address.</p>
													</div>
												{/if}
												{if isset($smarty.request.status)}
													<div class="alert alert-success">
														<p>Mail was send to your inbox, please check your e-mail.</p>
													</div>
												{/if}
												{if isset($smarty.request.statusError)}
													<div class="alert alert-error">
														<p>Outgoing mail server was not configured.</p>
													</div>
												{/if}
												<div class="inputfield control-group">
													<div class="controls">
														<input type="text" id="username" name="username" placeholder="Username">
													</div>
												</div>

												<div class="inputfield control-group">
													<div class="controls">
														<input type="password" id="password" name="password" placeholder="Password">
													</div>
												</div>
												<div class="button-field control-group signin-button">
													<div class="controls" id="forgotPassword">
														<input type="submit" value="Login" />
														&nbsp;&nbsp;&nbsp;<a>Forgot Password ?</a>
													</div>
												</div>
											</form>
											</div>
											<div class="login-box" style="display:none;"  id="forgotPasswordDiv">
											<form action="forgotPassword.php" method="POST">
												<div class="">
													<h3 class="login-header">Forgot Password</h3><br>
												</div>
												<div class="inputfield control-group">
													<div class="controls">
														<input type="text" id="username" name="username" placeholder="Username">
													</div>
												</div>
												<div class="inputfield control-group">
													<div class="controls">
														<input type="text" id="email" name="email"  placeholder="Email">
													</div>
												</div>
												<div class="button-field control-group signin-button">
													<div class="controls" id="backButton">
														<input type="submit" class=" " value="Submit" name="retrievePassword">
														&nbsp;&nbsp;&nbsp;<a>Back</a>
													</div>
												</div>
											</form>
											</div>
											
							</div>	
			                <div class="bottom">
			                	<p>
			                		Morbi leo risus, porta ac consectetur ac, vestibulum at eros.<br>Eg: “Cum sociis” “Natoque”
								</p>
			                </div>
						</div>
					</div>
				</div>
			</section>	
		</main>
		{php} include ('includes/footer.php'); {/php}
	</body>
	<script>
		jQuery(document).ready(function(){
			jQuery("#forgotPassword a").click(function() {
				jQuery("#loginDiv").hide();
				jQuery("#forgotPasswordDiv").show();
			});
			
			jQuery("#backButton a").click(function() {
				jQuery("#loginDiv").show();
				jQuery("#forgotPasswordDiv").hide();
			});
			
			jQuery("input[name='retrievePassword']").click(function (){
				var username = jQuery('#user_name').val();
				var email = jQuery('#emailId').val();
				
				var email1 = email.replace(/^\s+/,'').replace(/\s+$/,'');
				var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
				var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
				
				if(username == ''){
					alert('Please enter valid username');
					return false;
				} else if(!emailFilter.test(email1) || email == ''){
					alert('Please enater valid email address');
					return false;
				} else if(email.match(illegalChars)){
					alert( "The email address contains illegal characters.");
					return false;
				} else {
					return true;
				}
				
			});
		});
	</script>
</html>	
{/strip}
