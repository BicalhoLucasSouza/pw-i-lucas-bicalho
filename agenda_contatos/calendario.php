<?php
include 'config/database.php';
include 'includes/header.php';

// Função para gerar o calendário
function draw_calendar($month, $year) {
    // Dias da semana
    $daysOfWeek = array('DOM', 'SEG', 'TER', 'QUA', 'QUI', 'SEX', 'SÁB');

    // Primeiro dia do mês
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

    // Número de dias no mês
    $numberDays = date('t', $firstDayOfMonth);

    // Nome do mês
    $monthName = strftime('%B', $firstDayOfMonth);

    // Dia da semana do primeiro dia do mês
    $dayOfWeek = date('w', $firstDayOfMonth);

    // Cabeçalho do calendário
    $calendar = "<table border='1'>";
    $calendar .= "<caption>$monthName $year</caption>";
    $calendar .= "<tr>";

    // Cabeçalho dos dias da semana
    foreach($daysOfWeek as $day) {
        $calendar .= "<th>$day</th>";
    }

    $calendar .= "</tr><tr>";

    // Se o primeiro dia do mês não for domingo, preencha as células vazias
    if ($dayOfWeek > 0) {
        for ($i = 0; $i < $dayOfWeek; $i++) {
            $calendar .= "<td></td>";
        }
    }

    $currentDay = 1;

    // Adicionar os dias do mês
    while ($currentDay <= $numberDays) {

        // Iniciar uma nova linha na tabela
        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }

        $calendar .= "<td>$currentDay</td>";

        // Avançar para o próximo dia
        $currentDay++;
        $dayOfWeek++;
    }

    // Completar a última linha da tabela, se necessário
    if ($dayOfWeek != 7) {
        $remainingDays = 7 - $dayOfWeek;
        for ($i = 0; $i < $remainingDays; $i++) {
            $calendar .= "<td></td>";
        }
    }

    $calendar .= "</tr>";
    $calendar .= "</table>";

    return $calendar;
}

// Defina o mês e o ano atuais
$month = date('m');
$year = date('Y');

// Desenhar o calendário
echo draw_calendar($month, $year);

include 'includes/footer.php';


?>
