<?php
//----------------------------------------------------------------------------------------------------
$navItems = 'SELECT title, path FROM content';
$navItems_stmt = $pdoConnection->prepare($navItems);
$navItems_stmt->execute();
$navItems_result = $navItems_stmt->fetchAll(PDO::FETCH_ASSOC);
//----------------------------------------------------------------------------------------------------
?>
<header>
	<div class="background-bar">
		<div class="brand"><img src="library/images/marca.png" /></div>
		<div class="project-description">
			<div class="brand"><img src="library/images/logo-php-80x42.png" /></div>
			<span class="description">Projeto Fase 3</span>
		</div>	
	</div>
	<nav>
		<ul class="nav nav-pills nav-justified">
			<?php foreach($navItems_result AS $navItem):?>
				<li class="<?php if($targetPath==$navItem['path']): ?>active<?php endif;?>"><a href="<?php echo $navItem['path']; ?>"><?php echo $navItem['title']; ?></a></li>
			<?php endforeach;?>
		</ul>
	</nav>
</header>