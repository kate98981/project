<?php

    $date1 = $_POST['date1'];
    $sum = $_POST['sum']; //sumnn-1
    $srok = $_POST['srok'];
    $popol = $_POST['rad'];
    $sum_popol = $_POST['popol'];//summadd
    $percent = 10; //процентная ставка банка
    $date11 = strtotime($date1);
    //определить кол-во дней за год
    $days = date('L', $date11) ? 366 : 365;
    //на каждый год отдельно
    $summ = 0;
    for ($i = 0; $i < (int)$srok; $i++) {
        $days = date('L', $date11) ? 366 : 365; //количество дней в году
        for ($j = 0; $j < 12; $j++) {
            $date2 = date('d.m.Y', strtotime("+1 month", strtotime($date1)));//прибавить месяц
            $daysn = abs((strtotime($date2) - strtotime($date1)) / (60 * 60 * 24));
            if ($popol == 0) {
                $summ = $sum + $sum * $daysn * ($percent / 100 / $days);
            } else {
                $summ = $sum + ($sum + $sum_popol) * $daysn * ($percent / 100 / $days);
                $summ = $summ + $sum_popol;
            }
            $date1 = $date2;
            $sum = $summ;
        }
        $date11 = date('d.m.Y', strtotime("+1 year", $date11)); //прибавляем год
    }
    echo "Результат: ".round($summ);
    //$date2 = date('d.m.Y', strtotime("+$srok year", $date11));
    //$daysy = abs((strtotime($date2) - $date11)/(60 * 60 * 24));

?>
