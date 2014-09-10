<?php
//----------------------------------------------------------------------------------------------------
require_once('connection/pdoConnection.php'); 
//----------------------------------------------------------------------------------------------------
$route = parse_url($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$path = preg_replace('/^\//', '', $route['path']);
$targetPath = !isset( $path ) || empty( $path ) ? "home" : $path;
//----------------------------------------------------------------------------------------------------
$pageContent = "SELECT * FROM content WHERE path=:path";
$pageContent_stmt = $pdoConnection->prepare($pageContent);
$pageContent_stmt->bindValue('path', $targetPath);
$pageContent_stmt->execute();
$pageContent_result = $pageContent_stmt->fetch(PDO::FETCH_ASSOC);
//----------------------------------------------------------------------------------------------------
$validContent = !empty($pageContent_result) ? true : false;
//----------------------------------------------------------------------------------------------------
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
		<title>code.education - PHP - Projeto fase 3</title>
		<?php require_once('./includes/head.php'); ?>
	</head>
	<body>
		<?php require_once('./includes/header.php'); ?>
		<section rule='content'>
			<?php if($validContent) :?>
				<div class="page-header">
				  <h1><span class="tweak-width"><?php echo $pageContent_result['title']; ?></span><small>Site simples em PHP</small></h1>
				</div>
				<div class="image">
					<img src="<?php echo $pageContent_result['imagePath']; ?>"/>
				</div>
				<div class="content">
					<span class="title"><?php echo $pageContent_result['title']; ?></span>
					<?php
						echo $pageContent_result['content'];
						if($pageContent_result['path']=='contato') { 
							require_once('./includes/contact-form.php');						
						}
					 ?>
				</div>			
			<?php else :?>	
				<?php 
					if($targetPath=='resultado-busca'){
						require_once('./includes/search.php');
					} else {
						require_once('./includes/not-found.php');
					}
				?>
			<?php endif; ?>
		</section>
		<?php require_once('./includes/footer.php'); ?>
	</body>
</html>
