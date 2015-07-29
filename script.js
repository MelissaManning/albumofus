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
 });

 $(document).ready(function(){
     $('div.moreinfo').click(function() {
     $('div.panel').slideToggle('slow');

     });

 });
