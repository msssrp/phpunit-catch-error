<?php declare(strict_types=1);
include "MyCalendar.php";
use PHPUnit\Framework\TestCase;

class MyCalendarTest extends TestCase {
    public function testCheckDayNameOfDate(){
    $c1 = new MyCalendar();
    $this->assertEquals("Wednesday",$c1->CheckDayNameOfDate("15","03"));
    }
}    