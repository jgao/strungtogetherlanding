//parameters
var backgroundcolor = "#FFFFFF";
var navihovercolor = "#FFEEEE";
var defaultPage = "tour";

$(document).ready(function(){
  $("div.bodypage").hide();
  $("div.bodypage#" + defaultPage).show();
  $("div.navibutton")
    .mouseover(function(){
      $(this).css("background-color", navihovercolor);
    })
    .mouseout(function(){
      $(this).css("background-color", backgroundcolor);
    })
    .click(function(){
      $("div.bodypage").hide();
      $("div.bodypage#" + $(this).attr("id")).show();
    });
});

