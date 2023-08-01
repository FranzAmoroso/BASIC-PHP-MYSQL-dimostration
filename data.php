<?php

$data2 = date("H:i", time());


date_default_timezone_set('UTC');
$data3 = date('N');
switch($data3){
    case 1:
        $data3 = "Lunedì";
        break;
    case 2:
        $data3 = "Martedi";
        break;
    case 3:
        $data3 = "Mercoledì";
        break;
    case 4:
        $data3 = "Giovedì";
        break;
    case 5:
        $data3 = "Venerdì";
        break;
    case 6:
        $data3 = "Sabato";
        break;
    case 7:
        $data3 = "Domenica";
        break;
}
$data4 = date('n');
switch($data4){
    case 1:
        $data4 = "Gennaio";
        break;
    case 2:
        $data4 = "Febraio";
        break;
    case 3:
        $data4 = "Marzo";
        break;
    case 4:
        $data4 = "Aprile";
        break;
    case 5:
        $data4 = "Maggio";
        break;
    case 6:
        $data4 = "Giugno";
        break;
    case 7:
        $data4 = "Luglio";
        break;
    case 8:
        $data4 = "Agosto";
        break;
    case 9:
        $data4 = "Settembre";
        break;
    case 10:
        $data4 = "Ottobre";
        break;
    case 11:
        $data4 = "Novembre";
        break;
    case 12:
        $data4 = "Dicembre";
        break;
}
$data1 = date("d M Y", time());
echo "Oggi è il giorno"." ". $data1.' '.'delle ore'.' '.$data2.', '.$data3;
/* echo $data4; */
