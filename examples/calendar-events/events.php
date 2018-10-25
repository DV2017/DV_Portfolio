
<?php
//uses ajax to send user input month and date
//see companion files: calendar-events-ajax.php and Calendar.php
//events.php


ini_set("display_errors", 1);
error_reporting(E_ALL);
?>

<script>
var months = ["Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December"];
var month = new Date().getMonth()+1; //month as int
var year = new Date().getFullYear(); //yyyy format
//console.log('month: '+month+' & year: '+ year);

$(function(){
    $(".show-calendar").hide();
    $(".cal-picker").hide();
    $(".show-events").show();
    $("#button-cal").val("Klik voor kalender overzicht");

    getCalendar(month, year);
    //to do: set the post to a click function in the calendar   
});

function prevMonth(){
    //check if month is janurary
    if(month == 1){
        month = 12; 
        year = year-1;
    }else{
        month = month - 1;
    }     
    getCalendar(month, year);          
}

function nextMonth(){
    if(month == 12){
        month = 1;
        year = year+1;
    }else{
        month = month + 1;
    }
    getCalendar(month, year);
}

function getCalendar(month, year){
    //ajax request to display calendar
    $.post(
            "calendar-events.php", 
            { month: month, year: year}, 
            function(data){
                $(".show-date").text(months[month-1]+" "+year);
                $(".show-calendar").html(data);
            });
}

function showCalendar(){
    var val = $("#button-cal").val();
    if(val == "Klik voor kalender overzicht") {
        $(".show-events").hide();
        $(".cal-picker").show();
        $(".show-calendar").show();
        $("#button-cal").val("Klik voor aanstande evenementen");
    } else {
        $(".show-calendar").hide();
        $(".cal-picker").hide();
        $(".show-events").show();
        $("#button-cal").val("Klik voor kalender overzicht"); 
    }    
}
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="calendar.css">
</head>
<body>
    

<!-- HTML content-->
<div class="mainContent">
    <div class="outer-grid">
        <div class="calendar-btn">
            <input id="button-cal" class="button-cal" type="button" value="" onclick="showCalendar()">
        </div>
        <div class="calendar-btn">
            <span class="cal-picker pointer" onclick="prevMonth()"><p> << vorige</p></span>
            <span class="cal-picker"><p class="show-date"></p></span> 
            <span class="cal-picker pointer" onclick="nextMonth()"><p>volgende >></p></span>
        </div> 

        <div class="middle-grid">
                <div class="show-calendar"></div>

                <div class="show-events">
                    <h2 class="upcoming-events">Komende evenementen</h2>    
                    <?php  
                        $eventsObj = new Event();
                        echo $eventsObj->buildEventsProfile($con);
                    ?>
                </div> <!--show-events-->                          
        </div> <!--middle-grid-->

    </div> <!-- outer-grid -->
</div> <!-- main content -->

</body>
</html>