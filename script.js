$(document).ready(function() {
    $("img").mouseenter(function() {
        $("div.next").show();
        });
     $("img").mouseleave(function() {
         $("div.next").hide();
         });
     $("img").mouseenter(function() {
         $("div.previous").show();
         });
     $("img").mouseleave(function() {
         $("div.previous").hide();
        });
     $("img").mouseenter(function() {
         $("div.daycount").show();
        });
     $("img").mouseleave(function() {
         $("div.daycount").hide();
         });
     $("div.moreinfo").click(function() {
       $("div.panel").slideToggle('slow');

     });

 });
