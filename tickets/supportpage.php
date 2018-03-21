<!DOCTYPE html>
<html>
	<head>
		<?php require 'includes/head.php'; ?>
	</head>
	<body>
		<h1 hidden> Eight25Media Machine Issue Maintenance System </h1>
		<?php require 'includes/header.php'; ?>
		<!-- main -->
		<main class="customer-signup">	
			<section>
				<h2 hidden>Forgot password page</h2>
				<div class="container">
					<div class="formsection">
					<?php 
					if($_REQUEST['mail_send_message'] != '')
{
	$mail_send_message = explode("@@@",$_REQUEST['mail_send_message']);

	if($mail_send_message[0] == 'true')
	{ ?><div class="reponse-mesaages success">
							<p>Password sent to your email address</p>
						</div>
						<?php }
	elseif($mail_send_message[0] == 'false')
	{ ?>
						<div class="reponse-mesaages error">
							<p>Please enter valid email address</p>
						</div>
<?php }
}
?>
						<div class="form-title"><h3>Please enter valid email address</h3></div>
						<form name="forgot_password" action="index.php" method="post">
						<input type="hidden" name="param" value="forgot_password">
							<div class="inputfield">
								<input type="email" placeholder="Email Address" name="email_id" />
							</div>
							<?php /*<div class="choose-group">
                                <div class="checkbox">
                                    <input type="checkbox" id="checkbox2" />
                                    <label for="checkbox2">
                                    	<span>
		                                    I agree to the E25 <a href="#" class="terms-link">Terms of Service</a>
		                                </span>
		                            </label>
                                </div>
							</div> */?>
							<div class="button-field">
								<input type="submit" value="Submit" />
							</div>
						</form>
					</div>	
				</div>
			</section>	
		</main>
		<?php require 'includes/footer.php'; ?>
	</body>
</html>