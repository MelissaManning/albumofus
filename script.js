$(document).ready(function() {
    $("img.main, img.next, img.previous, div.daycount, div.location").mouseenter(function() {
        $("img.next, img.previous, div.daycount, div.location").addClass("active");
    });
     $("img.main").mouseleave(function() {
         $("img.next, img.previous, div.daycount, div.location").removeClass("active");
    });

    $("img.bottomright, div.bottomrightdescription").mouseenter(function() {
        $("div.bottomrightdescription").addClass("active");
    });
     $("img.bottomright").mouseleave(function() {
         $("div.bottomrightdescription").removeClass("active");
    });


 });
