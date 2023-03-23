<?php

class MyCalendar
{
    
    public function CheckDayNameOfDate($nday, $nmonth)
    {
        $input_date = $nday . "/" . $nmonth . "/" . "2023";
        $datetime = DateTime::createFromFormat('d/m/Y', $input_date);
        if (!$datetime || $datetime->format('d/m/Y') !== $input_date) {
            throw new Exception("Invalid date: $input_date");
        }
        return $datetime->format('l');
    }
}
?>