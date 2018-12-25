<?php 
	include 'php_conn.php';
	include 'setup.php';
	$a=5;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $site_title;?></title>
	<meta name="keywords" content="<?php echo $site_keywords;?>">
	<meta name="description" content="<?php echo $site_description;?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/message.css">
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php include "header.php"; ?>
	<div class="banner pc">
		<img src="images/message_banner.jpg" alt="">
	</div>
	<div class="banner mobile">
		<img src="images/mobile_message_banner.jpg" alt="">
	</div>
	<div class="message">
		<div class="container">
			<h2>M E S S A G E</h2>
			<div class="box">
				<h3>Email to this supplier</h3>
				<ul>
					<li>
						<span>To:</span>
						<h4>Eileen Zhao</h4>
					</li>
					<li>
						<div><span>Name:</span><input type="text" id="username" name="username" required></div>
						<div><span>Email:</span><input type="text" id="email" name="email" required></div>
					</li>
					<li>
						<span>Telephone:</span><input type="text" id="phone" name="phone" required>
					</li>
					<li>
						<span><i>*</i>Message:</span>
						<textarea name="message" id="message" cols="30" rows="10" required placeholder="Enter your inquiry details such as product name, color, size, MOQ, FOB, etc."></textarea>
					</li>
					<li><span></span><input type="button" class="submit" value="Submit"></li>
				</ul>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
<script src="js/form.js"></script>
</html>