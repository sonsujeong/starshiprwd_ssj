// $(function(){
//     $(".hamburger").click(function(){
//       $(".hammenu").animate({marginRight:"300px"},300);
//     });
  
  
//     //서브메뉴 부분
//     $(".hammenu>ul>li>a").click(function(){
//       if($(this).next().is(":visible")){
//           $(this).next().stop().slideUp(500);
//           $(this).children("img").attr("src","prac/arrow-down.png");
//       }else{
//           $(".sub").stop().slideUp(500);
//           $(".hammenu>ul>li>a").children("img").attr("src","prac/arrow-down.png");
//           $(this).next().stop().slideDown(500);
//           $(this).children("img").attr("src","prac/arrow-up.png");
//       }
//     });
  
  
//     //메뉴 종료
//     $(".cross").click(function(){
//       $(".hammenu").animate({marginRight:"0px"},300);
//     });
  
//   });