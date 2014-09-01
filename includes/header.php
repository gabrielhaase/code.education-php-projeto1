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
			<li class="<?php if(empty($selectedPath)): ?>active<?php endif;?>"><a href="/">Home</a></li>
			<li class="<?php if($selectedPath=="empresa"): ?>active<?php endif;?>"><a href="empresa">Empresa</a></li>
			<li class="<?php if($selectedPath=="produtos"): ?>active<?php endif;?>"><a href="produtos">Produtos</a></li>
			<li class="<?php if($selectedPath=="servicos"): ?>active<?php endif;?>"><a href="servicos">Serviços</a></li>
			<li class="<?php if($selectedPath=="contato"): ?>active<?php endif;?>"><a href="contato">Contato</a></li>
		</ul>
	</nav>
</header>