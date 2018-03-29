<?php
/**
 * Created by PhpStorm.
 * User: Wellison
 * Date: 01/03/2018
 * Time: 21:49
 */
$this->load->view('structure/head');
if ($menu == true) {
	$this->load->view('structure/header');

	?>
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2"
				 style="background-color:#43425D;position: relative; padding: 20px; margin: 0;height:100vh;overflow:hidden;">
				<ul class="nav flex-column">
					<?php if ($this->session->userdata("user")['role'] == null) { ?>
						<li class="nav-item">
							<a class="nav-link active" href="<?php echo base_url() . 'company' ?>"><i
									class="fa fa-user"></i>
								Empresas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="<?php echo base_url() . 'users' ?>"><i
									class="fa fa-user"></i>
								Usuários</a>
						</li>
					<?php }
					if ($this->session->userdata("user")['role'] == 'list' or $this->session->userdata("user")['role'] == 'schedule') {
						?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url() . 'calendar' ?>"><i
									class="fa fa-calendar"></i>
								Calendar</a>
						</li>
					<?php } ?>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url() . 'usuarios' ?>"><i class="fa fa-gear"></i>
							Configuração</a>
					</li>
				</ul>
			</div>
			<div class="col-md-10">
				<article>
					<?php $this->load->view($view) ?>
				</article>
			</div>
		</div>
	</div>


	<?php
	$this->load->view('structure/footer');
} else { ?>
	<article>
		<?php $this->load->view($view) ?>
	</article>
<?php }
?>
