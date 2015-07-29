$(document).ready(function() {
    $("img").mouseenter(function() {
        $("div.next, div.previous, div.daycount").show();
    });
     $("img").mouseleave(function() {
         $("div.next, div.previous, div.daycount").hide();
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
