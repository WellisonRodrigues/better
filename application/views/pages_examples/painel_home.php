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

<div class="container" style="margin-top: 1%;">
	<div class="row">
		<div class="col-md-6">
			<div class="text-left">
				<h3><b>Usuários Cadastrados</b></h3>
			</div>
		</div>
		<div class="col-md-6">
			<div class="text-right">
				<a href="<?php echo base_url() ?>Users/new_user">
					<button type="button" class="btn btn-indigo"> Adicionar usuário</button>
				</a>
			</div>
		</div>
	</div>
	<!--	<div class="col-md-12" style="margin-top: 1%;">-->
	<div class="row" style="margin-top: 1%;">
		<?php
		$id_table = 'teste';
		$this->perfecttable->setTableTemplate($id_table);
		$this->table->set_heading(array('Nome', 'Email', 'N° Registro', 'Empresa', '', ''));
		foreach ($table as $row) {
			foreach ($row as $subrow) {
				$url_del = base_url() . 'Users/delete/' . $subrow['id'];
				$button_del = '<div class="text-center"><a class="delete" href="' . $url_del . '">  <b style="color: grey" class="fas fa-times"></b></a></div>';
				$button = '<div class="text-center"> <b style="color: grey"> <i class="fas fa-pencil-alt"></i></b></div>';
				@$company = $subrow['relationships']['sub-company-holding']['data']['id'];
				$this->table->add_row(array(@$subrow['attributes']['name'], @$subrow['attributes']['email'],
					@$subrow['attributes']['register-number'], @$company,
					$button, $button_del));
			}
		}

		echo $this->table->generate();
		?>


		<script>
			$(document).ready(function () {
				$('#teste').DataTable();
				$('.delete').bind('click', function () {
					var comf = confirm('Deseja mesmo excluir?');
					if (comf == true) {
					} else {
						event.preventDefault();
					}
				});

			});

		</script>
	</div>
</div>
<!--</div>-->



