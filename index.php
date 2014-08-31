<?php
$siteItems = ['home.php', 'empresa.php', 'produtos.php', 'servicos.php', 'contato.php'];

if(!isset( $_GET['filename'] )){
	$selectedFile = "home.php";
} else {
	foreach($siteItems AS $item){
		if($item == $_GET['filename']) {
			$selectedFile = $_GET['filename'];
			break;
		} else {
			$selectedFile = 'not-found.php';
		}
	}	
}
?>

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
