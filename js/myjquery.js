$(function(){
    $(".jqueryToggle").click(function(){
      $(".contBorder").toggle("display");
      $("#imgCat").toggleClass('flip');
      $(".catBold").toggleClass('colNotBold');
  });
});
