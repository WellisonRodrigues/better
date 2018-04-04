<?php
/**
 * Created by PhpStorm.
 * User: Wellison
 * Date: 01/03/2018
 * Time: 23:13
 */

//print_r($mensagem);

if (isset($id)) {
    $id_user_get = $id;
} else {
    $id_user_get = null;
}
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

                    <label for="exampleForm2">Ação</label>
                    <select class="form-control" name="action" id="exampleFormControlSelect1">
                        <option value="compromisso_pessoal">COMPROMISSO PESSOAL</option>
                        <option value="ligar">LIGAR</option>
                        <option value="cobrar_recomendacao">COBRAR POR RECOMENDAÇÕES</option>
                        <option value="1_contato">1° CONTATO</option>
                        <option value="1_visita">1ª VISITA</option>
                        <option value="2_visita">2ª VISITA</option>
                        <option value="revisita">N VISITAS</option>
                        <option value="apresentacao">APRESENTAÇÃO DE PLANO</option>
                        <option value="reuniao_adesao">REUNIÃO DE ADESÃO</option>
                        <option value="pendecias_contrato">PENDÊNCIAS DE CONTRATO</option>
                        <option value="relacionamento">RELACIONAMENTO</option>
                        <option value="renegociacao">RENEGOCIAÇÃO</option>
                        <option value="entrega_doc">ENTREGA DE DOCS</option>
                        <option value="retirada_doc">RETIRADA DE DOCS</option>
                        <option value="enviar_email">ENVIAR EMAIL</option>
                        <option value="cobrar_telefone">COBRAR TELEFONES</option>
                        <option value="enviar_estudo">ENVIAR ESTUDO</option>
                        <option value="vista_gestor">VISITA COM GESTOR</option>
                        <option value="homologacao">HOMOLOGAÇÃO</option>
                        <option value="conciliacao">CONCILIAÇÃO</option>
                    </select>
                    <!--                        <option value="">RELACIONAMENTO</option>-->
                    <label for="exampleForm2">Status</label>
                    <input type="text"
                           value="agendado"
                           id="exampleForm2" readonly name="status" class="form-control" required>
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
                                $id_user = $row['id'];
                                $name = $row['attributes']['name'];
                                echo "<option value='$id_user'>$name</option>";
                            }
                        } ?>

                    </select>
                    <br>
                    <label for="start">Data</label>
                    <input type="date"
                           value=""
                           id="start" name="start" class="form-control" required>
                    <label for="time">Hora</label>
                    <input type="time"
                           value=""
                           id="time" name="time" class="form-control">

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
        var id_user = '<?php echo $id_user_get?>';
        // alert(id_user);
        if (id_user === null) {
            $.ajax({
                url: "<?php echo base_url('Calendar/get_calendar')?>",
                type: 'POST',
                data: 'type=fetch',
                async: false,
                success: function (response) {
                    json_events = response;
                }
            });
        } else {
            $.ajax({

                url: '<?php echo base_url("Calendar/get_calendar/$id_user_get")?>',
                type: 'POST',
                data: 'type=fetch',
                async: false,
                success: function (response) {
                    json_events = response;
                }
            });
        }

        $('#calendar').fullCalendar({
            // put your options and callbacks here
            selectable: true,
            header: {

                locale: 'pt-br',
                height: '500',
                // with: '700',
                left: 'today, prev,next ',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,agenda'

            },
            events: JSON.parse(json_events),
            dayClick: function (startDate, endDate) {
                $('#mymodal').modal('show');
                $('#start').val(startDate.format());
                $('#time').val(startDate.format('HH:mm'));
            },
            select: function (startDate, endDate) {
                $('#mymodal').modal('show');
                $('#start').val(startDate.format());
                $('#time').val(endDate.format());
                // alert('selected ' + startDate.format() + ' to ' + endDate.format());
            }
            //
            // eventClick: function(calEvent, jsEvent, view) {
            //
            //     alert('Event: ' + calEvent.title);
            //     alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
            //     alert('View: ' + view.name);
            //
            //     // change the border color just for fun
            //     $(this).css('border-color', 'red');
            //
            // }


        });
        // $('#calendar').fullCalendar('option', 'height', 600);
    });

</script>

<div class="row">
    <div class="container-fluid" style="margin-top: 1%;">
        <div class="col-md-6">
            <div class="text-left">
                <h3><b>Calendario</b></h3>
            </div>
        </div>
        <?php
        if (isset($mensagem)) {
            if (isset($mensagem['error'])) {
                $alert = $mensagem['error'];
                echo "<div class='alert alert-danger' role='alert'>$alert</div>";
            } else {
                echo "<div class='alert alert-success' role='alert'>Agenda criada!</div>";
            }
        }
        ?>
    </div>

    <!--	<div class="col-md-12" style="margin-top: 1%;">-->
    <div class="row" style="margin-top: 1%; margin-bottom: 20px">
        <div class="container-fluid">
            <div id='calendar' class="col-md-12"></div>
        </div>
    </div>
</div>
