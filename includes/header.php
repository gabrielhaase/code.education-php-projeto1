<header>
	<div class="background-bar">
		<div class="brand"><img src="library/images/marca.png" /></div>
		<div class="project-description">
			<div class="brand"><img src="library/images/logo-php-80x42.png" /></div>
			<span class="description">Projeto 1</span>
		</div>	
	</div>
	<nav>
		<ul class="nav nav-pills nav-justified">
			<li class="<?php if($selectedFile=="home.php"): ?>active<?php endif;?>"><a href="?filename=home.php">Home</a></li>
			<li class="<?php if($selectedFile=="empresa.php"): ?>active<?php endif;?>"><a href="?filename=empresa.php">Empresa</a></li>
			<li class="<?php if($selectedFile=="produtos.php"): ?>active<?php endif;?>"><a href="?filename=produtos.php">Produtos</a></li>
			<li class="<?php if($selectedFile=="servicos.php"): ?>active<?php endif;?>"><a href="?filename=servicos.php">Serviços</a></li>
			<li class="<?php if($selectedFile=="contato.php"): ?>active<?php endif;?>"><a href="?filename=contato.php">Contato</a></li>
		</ul>
	</nav>
</header>