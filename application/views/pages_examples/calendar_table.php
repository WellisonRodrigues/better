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
//
//    $.get("<?php //echo base_url('Calendar/get_calendar')?>//",
//        function (resultado) {
//            // alert(resultado)
//        });

    $(function () {

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
            header: {
                locale: 'pt-br',
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,agenda'

            },
            events: JSON.parse(json_events)

        })

    });

</script>
<div class="container" style="margin-top: 1%;">
    <div class="row">
        <div class="col-md-6">
            <div class="text-left">
                <h3><b>Calendario</b></h3>
            </div>
        </div>
    </div>
    <!--	<div class="col-md-12" style="margin-top: 1%;">-->
    <div class="row" style="margin-top: 1%; margin-bottom: 20px">
        <div class="container">
            <div id='calendar' class="col-md-12"></div>
        </div>
    </div>
</div>
