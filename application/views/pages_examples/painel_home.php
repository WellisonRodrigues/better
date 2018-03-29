<?php
/**
 * Created by PhpStorm.
 * User: wrodrigues
 * Date: 28/03/2018
 * Time: 13:11
 */
?>
<br>

<?php
//print_r($this->session->userdata('user'));
//print_r($table);
?>
<?php
/**
 * Created by PhpStorm.
 * User: Wellison
 * Date: 01/03/2018
 * Time: 23:13
 */

?>

<div class="container" style="margin-top: 3%;">
	<div class="row">
		<div class="col-md-6">
			<div class="text-left">
				<h3><b>Usuários Cadastrados</b></h3>
			</div>
		</div>
		<div class="col-md-6">
			<div class="text-right">
				<button type="button" class="btn btn-indigo"> Adicionar usuário</button>
			</div>
		</div>
	</div>
	<!--	<div class="col-md-12" style="margin-top: 1%;">-->
	<div class="row" style="margin-top: 1%;">

		<?php
		$id_table = 'teste';
		$button = '<div class="text-center"> <i class="fa fa-pencil" style="color: grey"></i></div>';
		$button_del = '<div class="text-center"> <b style="color: grey">X</b></div>';
		$this->perfecttable->setTableTemplate($id_table);
		$this->table->set_heading(array('Nome', 'Email', 'CPF', 'Cidade - Estado', '', ''));

		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', $button, $button_del));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', $button, $button_del));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', $button, $button_del));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', $button, $button_del));
		$this->table->add_row(array('Fred', 'Blue', 'Small', 'Fred', $button, $button_del));


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



