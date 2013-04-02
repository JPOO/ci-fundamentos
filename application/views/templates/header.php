<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> <?php echo $title?>	</title>
	<?php echo link_tag('assets/css/normalize.css') ?>
	<?php echo link_tag('assets/css/custom.css') ?>
</head>
<body>
	<div id='cssmenu'>
		<div id="cssmenu-interna">
			<div class="engloba">
				<ul>
				   <li class='<?php echo $this->uri->segment(1) == 'home' ? 'active' : '';?>'>
				   		<a href='<?php echo site_url('/home') ?>'><span>Home</span></a>
				   	</li>
				   <li class='<?php echo $this->uri->segment(1) == 'sobre' ? 'active' : '';?>'>
				   		<a href='<?php echo site_url('/sobre')?>'><span>Sobre</span></a>
				   	</li>
				   <li class='<?php echo $this->uri->segment(1) == 'contato'? 'active' : '';?>'>
				   		<a href='<?php echo site_url('/contato')?>'><span>Contato</span></a>
					</li>
					<li class='<?php echo $this->uri->segment(1) == 'news' ? 'active' : '';?>'>
				   		<a href='<?php echo site_url('/news')?>'><span>Notícias</span></a>
				   	</li>
				 	<li class='<?php echo $this->uri->segment(1) == 'create' ? 'active' : '';?>'>
				   		<a href='<?php echo site_url('/news/create')?>'><span>Adicionar Notícia</span></a>
				   	</li>
				   	<li class='<?php echo $this->uri->segment(1) == 'clients' ? 'active' : '';?>'>
				   		<a href='<?php echo site_url('/clients')?>'><span>Clientes</span></a>
				   	</li>
				   	<li class='<?php echo $this->uri->segment(1) == 'create' ? 'active' : '';?>'>
				   		<a href='<?php echo site_url('/clients/create')?>'><span>Adicionar Cliente</span></a>
				   	</li>
				   
				   	</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="engloba">