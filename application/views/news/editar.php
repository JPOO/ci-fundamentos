
<?php echo form_open('news/editar/'.$news['id']) ?>
	<label for="nome">Nome:</label><br/>
	<input type="text" name="title" value="<?php echo $news['title'] ?>"/>
	<div class="error"><?php echo form_error('title'); ?></div>
	<label for="text">Texto:</label><br/>
	<input type="text" name="text" value="<?php echo $news['text'] ?>"/>
	<div class="error"><?php echo form_error('text'); ?></div>
	<input type="submit" name="alterar" value="Alterar" />
<?php echo form_close(); ?>
<!-- fecha o formulário de edição -->