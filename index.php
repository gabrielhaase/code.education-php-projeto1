<?php
$route = parse_url($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = preg_replace('/^\//', '', $route['path']);

$siteItems = ['home', 'empresa', 'produtos', 'servicos', 'contato'];

if(!isset( $path ) || empty( $path )){
	$selectedPath = "home";
} else {
	$selectedPath = checkRoute($path, $siteItems);
}

function checkRoute($path, $siteItems) {	
	foreach($siteItems AS $item){
		if($item == $path) {
			$selectedPath = $path;
			break;
		} else {
			$selectedPath = 'not-found';
		}		
	}
	return $selectedPath;
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
			<?php require_once('./includes/'.$selectedPath.'.php'); ?>
		</section>
		<?php require_once('./includes/footer.php'); ?>
	</body>
</html>
