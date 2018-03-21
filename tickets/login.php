<?php

require_once("PortalConfig.php");
require_once("language/$default_language.lang.php");
include("version.php");
include_once('include/utils/utils.php');

@session_start();
if(isset($_SESSION['customer_id']) && isset($_SESSION['customer_name']))
{
	header("Location: index.php?action=index&module=.'$module'");
	exit;
}
if($_REQUEST['close_window'] == 'true')
{
   ?>
	<script language="javascript">
        	window.close();
	</script>
   <?php
}
global $default_charset;
header('Content-Type: text/html; charset='.$default_charset);

?>
<!DOCTYPE html>
<html>
	<head>
		<?php require 'includes/head.php'; ?>
	</head>
	<body>
		<h1 hidden> Eight25Media Machine Issue Maintenance System </h1>
		<?php require 'includes/header.php'; ?>
		<!-- main -->
		<main>
			<!-- main banner -->
			<section class="main-banner">
				<!-- Web banner image -->
				<img src="Assets/images/custom/uploads/home/main-banner.png" alt="" class="img-responsive hidden-xs" />
				<!-- Mobile banner image -->
				<img src="Assets/images/custom/uploads/home/mobile-banner.png" alt="" class="img-responsive visible-xs" />	

				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-9 col-md-7">
							<div class="top">
								<h2>E25 Machine Issue Tracket</h2>
							</div>
							<div class="formsection">
							<?php
							if($_REQUEST['login_error'] != '')
								echo getTranslatedString(base64_decode($_REQUEST['login_error'])); 
						?>
								<form name="login" action="CustomerAuthenticate.php" method="post">
									<div class="inputfield">
										<input type="text" id="username" name="username" class="form-control" placeholder="<?php echo getTranslatedString('LBL_EMAILID');?>">
									</div>
									<div class="inputfield">
										<input type="password" id="pw" name="pw" class="form-control" placeholder="<?php echo getTranslatedString('LBL_PASSWORD');?>">
									</div>
									<div class="button-field">
										<button type="submit" class="btn bg-light-blue btn-block" onclick="return validateLoginDetails();" style="font-size: 16px; font=weight:500;"><?php  echo getTranslatedString('LBL_LOGIN');?></button>  
                    
									</div>
								</form>
							</div>	
			                <div class="bottom">
			                	<p><a href="supportpage.php?param=forgot_password" style="font-size:16px;"><?php  echo getTranslatedString('LBL_FORGOT_LOGIN');?></a></p>
								<p><?php  echo getTranslatedString('LBL_LOGIN_NOTE');?></p>
			                </div>
						</div>
					</div>
				</div>
			</section>	
		</main>
		<?php require 'includes/footer.php'; ?>
	</body>
</html>

<script language="javascript">
function validateLoginDetails()
{
	var user = trim(document.getElementById("username").value);
	var pass = trim(document.getElementById("pw").value);
	if(user != '')
	{
		if(pass != '')
			return true;
		else
		{
			alert("Please enter a valid password.");
			return false;
		}
	}
	else
	{
		alert("Please enter valid username.");
		return false;
	}
}
function trim(s)
{
	while (s.substring(0,1) == " " || s.substring(0,1) == "\n")
	{
		s = s.substring(1, s.length);
	}
	while (s.substring(s.length-1, s.length) == " " || s.substring(s.length-1,s.length) == "\n") {
		s = s.substring(0,s.length-1);
	}
	return s;
}

</script>

<?php
?>
