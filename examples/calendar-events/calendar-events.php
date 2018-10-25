<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

if(isset($_POST['month']) && isset($_POST['year'])){
    $month = $_POST['month'];
    $year = $_POST['year'];
}

$eventsObj = new Event();
$events = $eventsObj->getDataForCalendar($con);

$calendar = new Calendar();
$calendar->build_html_calendar($year, $month, $events);

?>