		<!-- header --> 
		<header class="header loged-in">
			<div class="container">
				<a href="javascript:void(0);"  class="humberg-icon visible-xs">
					<span class="icon-bar icon-bar-a"></span>
					<span class="icon-bar icon-bar-b"></span>
					<span class="icon-bar icon-bar-c"></span>
				</a>
				<a href="index.php" class="site-logo">
					<img src="Assets/images/media/logo.png" alt="" class="img-responsive" />
				</a>

				<nav class="right-nav">
					<h2 hidden>Top Links</h2>
		            <ul  class="hidden-xs">
		            	<li class="login"><a href="index.php?logout=true">Logout</a></li>
		            	<li class="register"><a href="MySettings.php?last_login=<?php echo $_SESSION['last_login']; ?>&support_start_date=<?php echo $_SESSION['support_start_date']; ?>&support_end_date=<?php echo $_SESSION['support_end_date']; ?>">My Account</a></li>
		            </ul>
		            <!--ul>
		            	<li class="login"><a href="#">Logout</a></li>
		            	<li class="register"><a href="#">My Account</a></li>
		            </ul-->
				</nav>

				<div class="nav-block">
					<nav>
						<h2 hidden>Main Navigation</h2>
						<ul class="visible-xs">
			            	<li class="login"><a href="#">Logout</a></li>
		            		<li class="register"><a href="#">My Account</a></li>
			            </ul>
					</nav>
		        </div>
			</div>
		</header>