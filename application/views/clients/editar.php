
<?php echo form_open('clients/editar/'.$clients['id']) ?>
	<label for="nome">Nome:</label><br/>
	<input type="text" name="name" value="<?php echo $clients['name'] ?>"/>
	<div class="error"><?php echo form_error('name'); ?></div>
	<label for="text">Cidade:</label><br/>
	<input type="text" name="city" value="<?php echo $clients['city'] ?>"/>
	<div class="error"><?php echo form_error('city'); ?></div>
	<input type="submit" name="alterar" value="Alterar" />
<?php echo form_close(); ?>
<!-- fecha o formulário de edição -->