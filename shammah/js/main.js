// JavaScript Document

$(document).ready(function(){
	
	///////////////////////////////////////////////////////////////////////
	// ESTE CODIGO ES PARA MOSTRAR EL MENU DE PRODUCTOS
	//////////////////////////////////////////////////////////////////////
	$(".productos-b").click(function(){
		// $("body").addClass("ocultar");
		 $('#super-menu').slideDown();
		 $('body').css("overflow","hidden");
		 e.stopPropagation(); 
		 
		});
		
	$(".out").mouseover(function(){
		// $("body").addClass("ocultar");
		 $('#super-menu').slideUp(); 
		 $('body').css("overflow","none");
		//e.stopPropagation(); 
		 
		});
		
	$("#super-menu").mouseleave(function(){
		// $("body").addClass("ocultar");
		 $('#super-menu').slideUp(); 
		 $('body').css("overflow","none");
		//e.stopPropagation(); 
		 
		});
		
		

	
	///////////////////////////////////////////////////////////////////////
	// ESTE CODIGO ES PARA MOSTRAR EL FONDO DE LOS BOTONES
	//////////////////////////////////////////////////////////////////////
	
	
		
	 
	
	});