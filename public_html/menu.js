$(document).ready(main);
 

 
function main(){

	var contador = 0;
	$('.menu_bar').click(function(){
		 //$('nav').toggle(); 
 
		if(contador == 1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			
			$('nav').animate({
				left: '-100%'
			});
			contador = 1;
		}
 
	});
 
};