$(document).ready(function () {
      
      $("#delete-user").hover(function(){
            $(this).css("background","red");
            $(this).css("color","white");
      },
      function(){
            $(this).css("background","white");
            $(this).css("color","black");
      });

});