<?php
/**
 * Created by PhpStorm.
 * User: welli
 * Date: 28/03/2018
 * Time: 23:46
 */
?>

<div class="container" style="margin-top: 1%; margin-bottom: 2%">
	<div class="row">
		<div class="col-md-6">
			<div class="text-left">
				<h3><b>Empresas Cadastradas</b></h3>
			</div>
		</div>
		<div class="col-md-6">
			<div class="text-right">
				<button type="button" class="btn btn-indigo"> Cadastrar Empresa</button>
			</div>
		</div>
	</div>
	<!--	<div class="col-md-12" style="margin-top: 1%;">-->
	<div class="row" style="margin-top: 1%;">

		<?php
		$id_table = 'teste';
		$this->perfecttable->setTableTemplate($id_table);
		$this->table->set_heading(array('Empresas', 'Área', 'CEP', 'Cidade - Estado', 'Principal contato', '', ''));

		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', 'Blue', 'Small', 'Small'));


		echo $this->table->generate();
		?>


		<script>
			$(document).ready(function () {
				$('#teste').DataTable();
			})
		</script>
	</div>
</div>
<!--</div>-->
