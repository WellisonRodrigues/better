<?php
/**
 * Created by PhpStorm.
 * User: welli
 * Date: 29/03/2018
 * Time: 17:34
 */
?>
<div class="container" style="margin-top: 1%;">
	<div class="col-md-6">

		<div class="text-left">
			<h3><b>Cadastro de Usuário</b></h3>
		</div>

	</div>


	<div class="col-md-6" style="margin-top: 5%; margin-bottom: 20px">
		<?php
		echo form_open('Users/new_user', ['role' => 'form']);
		?>
		<!-- Default input -->
		<label for="exampleForm2">Nome do usuário</label>
		<input type="text" id="exampleForm2" name="name" class="form-control">
		<br>
		<div class="text-right">
			<a href="<?php echo base_url() ?>Users">
				<button type="button" class="btn btn-outline-primary"> Cancelar</button>
			</a>
			<button type="submit" class="btn btn-indigo"> Salvar</button>
		</div>
		<?php
		echo form_close();
		?>


	</div>
</div>
