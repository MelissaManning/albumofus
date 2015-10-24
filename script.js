$(document).ready(function() {
    $("img, img.next, img.previous, div.daycount, div.location").mouseenter(function() {
        $("img.next, img.previous, div.daycount, div.location").show();
    });
     $("img").mouseleave(function() {
         $("img.next, img.previous, div.daycount, div.location").hide();
    });
     $("div.moreinfo").click(function() {
         $("div.panel").slideToggle('slow');
         if ($(this).text() === "+") {
           $(this).text('-');
         }
         else {
           $(this).text('+');
         }
    });

 });
