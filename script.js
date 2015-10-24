$(document).ready(function() {
    $("img.main, img.next, img.previous, div.daycount, div.location").mouseenter(function() {
        $("img.next, img.previous, div.daycount, div.location").show();
    });
     $("img.main").mouseleave(function() {
         $("img.next, img.previous, div.daycount, div.location").hide();
    });

    $("img.bottomright, div.bottomrightdescription").mouseenter(function() {
        $("div.bottomrightdescription").show();
    });
     $("img.bottomright").mouseleave(function() {
         $("div.bottomrightdescription").hide();
    });


 });
