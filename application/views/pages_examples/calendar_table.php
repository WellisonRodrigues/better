<?php
/**
 * Created by PhpStorm.
 * User: Wellison
 * Date: 01/03/2018
 * Time: 23:13
 */

//print_r($mensagem);

?>

<script src='<?php echo base_url() ?>CSSs/fullcalendar/lib/jquery.min.js'></script>
<script src='<?php echo base_url() ?>CSSs/fullcalendar/lib/moment.min.js'></script>
<script src='<?php echo base_url() ?>CSSs/fullcalendar/fullcalendar.js'></script>
<script src='<?php echo base_url() ?>CSSs/fullcalendar/locale/pt-br.js'></script>
<?php echo form_open('Calendar/new_calendar', ['role' => 'form']); ?>
<div class="modal" id="mymodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nova Agenda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">

                    <label for="exampleForm2">Titulo</label>
                    <input type="text"
                           value=""
                           id="exampleForm2" name="action" class="form-control" required>
                    <label for="exampleForm2">Status</label>
                    <input type="text"
                           value=""
                           id="exampleForm2" name="status" class="form-control" required>
                    <label for="exampleForm2">Descrição</label>
                    <input type="text"
                           value=""
                           id="exampleForm2" name="description" class="form-control" required>
                    <label for="exampleForm2">Endereço</label>
                    <input type="text"
                           value=""
                           id="exampleForm2" name="address" class="form-control" required>
                    <label for="exampleFormControlSelect1">Contato</label>
                    <select class="form-control" name="id" id="exampleFormControlSelect1">
                        <?php foreach ($table as $line) {
                            foreach ($line as $row) {
                                $id = $row['id'];
                                $name = $row['attributes']['name'];
                                echo "<option value='$id'>$name</option>";
                            }
                        } ?>

                    </select>
                    <br>
                    <input type="datetime"
                           value=""
                           id="start" name="start" class="form-control" required>
                    Até
                    <input type="datetime"
                           value=""
                           id="finish" name="finish" class="form-control" required>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>

            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>
<script>

    //
    //    $.get("<?php //echo base_url('Calendar/get_calendar')?>//",
    //        function (resultado) {
    //            // alert(resultado)
    //        });

    $(document).ready(function () {

        // alert('ok')
        // page is now ready, initialize the calendar...
        $.ajax({
            url: "<?php echo base_url('Calendar/get_calendar')?>",
            type: 'POST',
            data: 'type=fetch',
            async: false,
            success: function (response) {
                json_events = response;
            }
        });

        $('#calendar').fullCalendar({
            // put your options and callbacks here
            selectable: true,
            header: {

                locale: 'pt-br',
                height: '600',
                with: '700',
                left: 'today, prev,next ',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,agenda'

            },
            events: JSON.parse(json_events),
            dayClick: function (startDate, endDate) {
                $('#mymodal').modal('show');
                $('#start').val(startDate.format());
                $('#finish').val(endDate.format());
            },
            select: function (startDate, endDate) {
                $('#mymodal').modal('show');
                $('#start').val(startDate.format());
                $('#finish').val(endDate.format());
                // alert('selected ' + startDate.format() + ' to ' + endDate.format());
            },


        });
        // $('#calendar').fullCalendar('option', 'height', 600);
    });

</script>
<div class="container-fluid" style="margin-top: 1%;">
    <div class="row">
        <div class="col-md-6">
            <div class="text-left">
                <h3><b>Calendario</b></h3>
            </div>
        </div>
    </div>
    <?php
    if (isset($mensagem)) {
        if ($mensagem == 'error') {

            echo "<div class='alert alert-danger' role='alert'>Erro ao criar a Agenda</div>";
        } else {
            echo "<div class='alert alert-success' role='alert'>Agenda criada!</div>";
        }
    }
    ?>
    <!--	<div class="col-md-12" style="margin-top: 1%;">-->
    <div class="row" style="margin-top: 1%; margin-bottom: 20px">
        <div class="container-fluid">
            <div id='calendar' class="col-md-12"></div>
        </div>
    </div>
</div>
