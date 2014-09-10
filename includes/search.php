<?php
//----------------------------------------------------------------------------------------------------
$requestData = filter_input_array(INPUT_GET);
//----------------------------------------------------------------------------------------------------
$searchItems = "SELECT content.* FROM content WHERE content.title LIKE :searchValue OR CONVERT(content.content USING utf8) LIKE :searchValue";
$searchItems_stmt = $pdoConnection->prepare($searchItems);
$searchItems_stmt->bindValue('searchValue', '%'.$requestData['value'].'%');
$searchItems_stmt->execute();
$searchItems_result = $searchItems_stmt->fetchAll(PDO::FETCH_ASSOC);
//----------------------------------------------------------------------------------------------------
?>
<div class="page-header">
  <h1><span class="tweak-width">Busca</span><small>Site simples em PHP</small></h1>
</div>
<div class="content-left">
	<span class="title">Resultados encontrados para: <?php echo $requestData['value'];?></span>
	<ul id="search-items">
		<?php if(!empty($searchItems_result)): ?>
			<?php foreach($searchItems_result AS $searchItem):?>
			<li>
				<div class="image"><a href="/<?php echo $searchItem['path']; ?>"><img src="<?php echo $searchItem['imagePath']; ?>" /></a></div>
				<div class="content">
					<h4><a href="/<?php echo $searchItem['path']; ?>"><?php echo $searchItem['title']; ?></a></h4>
					<p>
						<?php
							$fullContent = $searchItem['content'];
							$trimmedContent = substr( $fullContent ,0, 450 );
							echo $trimmedContent.'...';					
						?>
						<a href="/<?php echo $searchItem['path']; ?>">Saiba mais.</a>
					</p>
				</div>
			</li>
			<?php endforeach;?>
		<?php else: ?>
			<p>Nenhum resultado encontrado para: <b><?php echo $requestData['value'];?></b></p>
		<?php endif;?>
	</ul>
</div>