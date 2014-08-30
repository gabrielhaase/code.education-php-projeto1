<?php $selectedFile = $_GET['filename']; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>code.education - PHP - Projeto 1</title>
		<?php require_once('./includes/head.php'); ?>
	</head>
	<body>
		<?php require_once('./includes/header.php'); ?>
		<section rule='content'>
			<?php require_once('./includes/'.$selectedFile); ?>
		</section>
		<?php require_once('./includes/footer.php'); ?>
	</body>
</html>
