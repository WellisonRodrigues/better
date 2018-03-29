<?php
/**
 * Created by PhpStorm.
 * User: wrodrigues
 * Date: 28/03/2018
 * Time: 14:44
 */
?>

<?php
/**
 * Created by PhpStorm.
 * User: Wellison
 * Date: 01/03/2018
 * Time: 23:13
 */
?>

<script src='<?php echo base_url() ?>CSSs/fullcalendar/lib/jquery.min.js'></script>
<script src='<?php echo base_url() ?>CSSs/fullcalendar/lib/moment.min.js'></script>
<script src='<?php echo base_url() ?>CSSs/fullcalendar/fullcalendar.js'></script>
<script src='<?php echo base_url() ?>CSSs/fullcalendar/locale/pt-br.js'></script>
<script>
	$(function () {

		// page is now ready, initialize the calendar...

		$('#calendar').fullCalendar({
			// put your options and callbacks here
			header: {
				locale: 'pt-br',
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay,agenda'

			},
			events: [
				{
					title: 'My Event',
					start: '2018-03-01',
					description: 'This is a cool event'
				}
				// more events here
			]

		})

	});
</script>
<div class="container" style="margin-top: 3%;">
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
	<div class="row" style="margin-top: 1%; margin-bottom: 20px">
		<div id='calendar' class="col-md-12"></div>
	</div>
</div>
