$(document).ready(function() {
    $("img.main, .next, .previous, div.daycount, div.location").mouseenter(function() {
        $(".next, .previous, div.daycount, div.location").addClass("active");
    });
     $("img.main").mouseleave(function() {
         $(".next, .previous, div.daycount, div.location").removeClass("active");
    });
    $("img.bottomright, div.bottomrightdescription").mouseenter(function() {
        $("div.bottomrightdescription").addClass("active");
    });
     $("img.bottomright").mouseleave(function() {
         $("div.bottomrightdescription").removeClass("active");
    });
    $(".bottomrightphoto").click(function () {
          $(this).toggleClass("enlarged");
    });
 });
