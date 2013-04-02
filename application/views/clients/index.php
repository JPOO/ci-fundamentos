<?php foreach ($clients as $news_item):?>
	<h2><?php echo $news_item['name'] ?></h2>
	<div id="main">
		<?php echo $news_item['city'] ?>
	</div>
	<p><a href="<?php echo site_url('/clients/' . $news_item['id']) ?>">Visualizar</a></p>
	<p><a href="<?php echo site_url('/clients/editar/' . $news_item['id']); ?>">Editar</a></p>
	<p><a href="<?php echo site_url('/clients/deletar/' . $news_item['id']); ?>">Deletar</a></p>

<?php endforeach;?>
