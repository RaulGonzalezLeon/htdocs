<?php
$message = '';
$message_error = '';
$fecha = [
    'fecha_inicio' => '',
    'fecha_fin' => ''
];
$error = [
    'fecha_inicio' => '',
    'fecha_fin' => '',
    'frecuencia' => '',
];

$opciones_validas = ["diaria", "semanal", "dos-semanas", "mensual"];
$frecuencia = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $filters['fecha_inicio']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['fecha_inicio']['options']['regexp'] = '/[0-9\/\:\s]/';
    $filters['fecha_fin']['filter'] = FILTER_VALIDATE_REGEXP;
    $filters['fecha_fin']['options']['regexp'] = '/[0-9\/\:\s]/';

    $fecha = filter_input_array(INPUT_POST, $filters);

    if (isset($_POST["frecuencia"]) && in_array($_POST["frecuencia"], $opciones_validas)) {
        $frecuencia = $_POST["frecuencia"];
    }

    $error = [
        'fecha_inicio' => ($fecha['fecha_inicio']) ? '' : 'Error en la fecha de inicio',
        'fecha_fin' => ($fecha['fecha_fin']) ? '' : 'Error en la fecha de finalización',
        'frecuencia' => ($frecuencia !== '' && in_array($frecuencia, $opciones_validas)) ? '' : 'Error en la frecuencia seleccionada'
    ];

    $invalid = implode($error);

    if ($invalid) {
        $message_error = 'Debes solucionar los errores.';
    } else {
        // Los datos son válidos, realizar aqui los ejercicios propuestos
        $inicioEvento = date_create_from_format('d/m/Y H:i:s', $fecha['fecha_inicio']);
        $finEvento = date_create_from_format('d/m/Y H:i:s', $fecha['fecha_fin']);

        // Creamos las zonas horarias
        $tzLosAngeles = new DateTimeZone('America/Los_Angeles');
        $tzMadrid = new DateTimeZone('Europe/Madrid');
        $tzLondres = new DateTimeZone('Europe/London');
        $tzTokio = new DateTimeZone('Asia/Tokyo');

        // Convertimos las fechas de inicio a las zonas horarias
        $l_aInicio = clone $inicioEvento;
        $l_aInicio->setTimezone($tzLosAngeles);
        $maInicio = clone $inicioEvento;
        $maInicio->setTimezone($tzMadrid);
        $lonInicio = clone $inicioEvento;
        $lonInicio->setTimezone($tzLondres);
        $tkInicio = clone $inicioEvento;
        $tkInicio->setTimezone($tzTokio);

        // Convertimos las fechas de fin a las zonas horarias
        $l_aFinal = clone $finEvento;
        $l_aFinal->setTimezone($tzLosAngeles);
        $maFinal = clone $finEvento;
        $maFinal->setTimezone($tzMadrid);
        $lonFinal = clone $finEvento;
        $lonFinal->setTimezone($tzLondres);
        $tkFinal = clone $finEvento;
        $tkFinal->setTimezone($tzTokio);


        if($opciones_validas == "diaria" ){
            $frecuencia = new DateInterval("P1D");
        } else if ($opciones_validas == "semanal" ) {
            $frecuencia = new DateInterval("P7D");
        } else if ($opciones_validas == "dos-semanas" ) {
            $frecuencia = new DateInterval("P14D");
        }else if ($opciones_validas == "mensual" ) {
            $frecuencia = new DateInterval("P1M");
        }

        $periodLA = new DatePeriod($l_aInicio, $frecuencia, $l_aFinal);
        $periodMA = new DatePeriod($maInicio, $frecuencia, $maFinal);
        $periodLO = new DatePeriod($lonInicio, $frecuencia, $lonFinal);
        $periodTK = new DatePeriod($tkInicio, $frecuencia, $tkFinal);

        $intervaloLA = $l_aInicio->diff($l_aFinal);



        $message = '
    
        ';
    }
}
