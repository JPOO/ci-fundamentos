<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('clients/create') ?>

	<label for="text">Nome</label> 
	<input type="input" name="name" /><br />

	<label for="text">Cidade</label>
	<textarea name="city"></textarea><br />
	
	<input type="submit" name="submit" value="Create news item" /> 

</form>