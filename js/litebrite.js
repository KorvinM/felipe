//litebrite
function litebrite(){
  var colorClass = '', blink='';
  $('.select-color').on('click', function(){
    var selectedColor = $(this).attr('class');
    switch(selectedColor){
      case 'select-color cyan not-selected':
    	  colorClass = 'cyan';        //set col
        break;
      case 'select-color yellow not-selected':
        colorClass = 'yellow'; //set col
        break;
      case 'select-color magenta not-selected':
        colorClass = 'magenta';
        break;       
    }
    $(this).removeClass('not-selected');
    $(this).siblings().addClass('not-selected');
  }); //end click handler for .select-color
 
  $('.toggle-blink').on('click', function(){
    if(colorClass){
      $(this).toggleClass('opacity');
    }
    if ($(this).hasClass('opacity')){
      blink = setInterval(function(){
        $('.box.magenta, .box.yellow, .box.cyan').toggleClass('blink');
      }, 350);
    } else{
      clearInterval(blink);
      $('.box').removeClass('blink'); 
    }
  });

  $('.box').on('mouseover', function(){
    $(this).toggleClass(colorClass);
  });
};

$(document).ready(litebrite);
