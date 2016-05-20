<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("include/head.php");?>
</head>

<body>
<?php include("include/menu.php");?>

     
      
        
        <!--<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/wowslider.js"></script>
-->        <!--<script type="text/javascript" src="<?php echo "http://".$_SERVER['HTTP_HOST'].$directorio; ?>js/script.js"></script>-->
        <!-- End WOWSlider.com BODY section -->


<div id="content-home-art" style="border-top: 0px; border-left: 0;">
	  <div id="art-div" style="padding:0px;">
     
    
<div class="contenedor-sobrenosotros">
        
    <div class="caja" >
    <div id="quienesomos" class="ventajas" >
            <div class="titulo">¿Quiénes somos?</div>
            <div class="texto-ventaja">SHAMMAH es una empresa de corredores de seguros que provee servicios y soluciones innovadoras
                en todo lo que concierne a seguros y administración de riesgos. Nace en el enero del 2014 con la 
                iniciativa de proveer una asistencia y un servicio sin precedentes. En la actualidad contamos con más de 
                600 clientes a los cuales agradecemos por haber nos dado la oportunidad de ser sus corredores.</div>
        </div>
       
        <div id="mision" class="ventajas" >
            <div class="titulo">Misión</div>
            <div class="texto-ventaja">Ofrecer a nuestros clientes asesoría de seguros con profesionalidad, comprometidos con la calidad del 
                servicio, Manteniendo siempre una relación de confianza y respeto con nuestros proveedores, clientes y 
                colaboradores.</div>
        </div>
        </div>
    
        <div class="caja" >
        <div id="vision" class="ventajas" >
            <div class="titulo">Visión</div>
            <p>Ser la firma de corredores preferidos de todos los dominicanos y de más alto prestigio.</p>
        </div>
        
        <div id="valores" class="ventajas" >
            <div class="titulo">Valores</div>
            <p>Servicio eficiente
                <br>
                Compromiso
                <br>
                Responsabilidad
                <br>
                Confianza
                <br>
                Respecto
                <br>
            </p>
        </div>
            </div>
       <div class="caja" >
        <div id="objetivo" class="ventajas" >
            <div class="titulo">Objectivo</div>
            <p><b>Nuestra principal  diferencia</b>
                <br>
                Testimonios de clientes
                <br>
                Acreditaciones
                <br>
                Logo de Clientes
                <br>
            </p>
        </div>
        </div>
    
    
    
    </div>
    
    
    </div>
    
    
    <div id="art-foto"></div>
    
</div>
<!--FIN DEL content-home-art -->

<div class="content-demas">
    
    <div class="contenido-ventajas">
        <div class="sub-titulo"><span style="background-color: #009a4d; Color: white">Ventajas que te ofrecemos</span></div>
        <p class="art">Con tan solo autorizarnos como su intermediario ante la institución de seguro podemos asesorarle en los productos que mejor se ajustan a su necesidad,acompañarle en caso de una reclamación, agilizar todos los procesos con las aseguradoras y lo mejor es que no le cuesta más, por el contrario puedes conseguir mejores descuentos…</p>
    </div>
    
    <div class="linea"></div>
    
    <div class="contenido-ventajas">
        <div class="sub-titulo"><span style="background-color: #009a4d; Color: white">Seguros de Vida</span></div>
        <p class="art">Ofrece protección en caso de fallecimiento del asegurado. Además, otorga en vida los beneficios en caso de pérdida de algún miembro por accidente, incapacidad por accidente o enfermedad, e indemniza a los familiares en caso de muerte.</p>
    </div>
    
    
</div>
    
 <div class="raya-verde"></div>
    
    <div id="content-suscribirme">
	<div class="tit-email">Recibirás periódicamente en tu e-mail informaciones de <br />
    interés y nuevos beneficios.</div>
    <div class="campos-mail">
    	<form class="form-email">
            <input name="" type="text" placeholder="Nombre" />
            <input name="" type="text" placeholder="E-mail"/>
            <input name="Suscribirme" type="submit" class="botton" value="SUSCRIBIRME" />
        </form>
    </div>
</div>

    
<footer>
<div id="content-footer">
  <div id="content-in-footer">
    <div class="footer-col">
    	<ul>
        	<li>Nuestros Clientes </li>
            <li>Nuestros Clientes </li>
            <li>Nuestros Clientes </li>
            <li>Nuestros Clientes </li>
        </ul>
    </div>
    <div class="footer-col">
    	<ul>
        	<li>Nuestros Clientes </li>
            <li>Nuestros Clientes </li>
            <li>Nuestros Clientes </li>
            
        </ul>
    </div>
    <div class="footer-col">
    	<ul>
        	<li>Nuestros Clientes </li>
            <li>Nuestros Clientes </li>
            <li>Nuestros Clientes </li>
            <li>Nuestros Clientes </li>
        </ul>
    </div>
    <div class="footer-col" style="margin-right:0 !important;">
    	<ul>
        	<li>Nuestros Clientes </li>
            <li>Nuestros Clientes </li>
            <li>Nuestros Clientes </li>
            <li>Nuestros Clientes </li>
        </ul>
    </div>
  </div>
</div>
<div id="content-creditos">
	<div id="center-creditos">©Copyright 2016. Todos los derechos reservados. SHAMMAH Corredores de Seguros. <span style="float:right;">Desarrollado por: <a href="#">www.agencia7am.com</a></span></div>
</div>
</footer>

<script>

function initMap() {
  var myLatLng = {lat: 18.471723086027644, lng: -69.9599415 };
  
  

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 18,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'SHAMMAH'
  });
}



</script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=&signed_in=true&callback=initMap"></script>
        
        <!-- Swiper JS -->
        <script src="js/swiper.min.js"></script>
        
        <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 0,
		autoplay: 5000,
        loop: true
    });
    </script>
    
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>

<script type="text/javascript">
   $('#carousel').slick({
    arrows: true,
    slidesToShow: 3,
    autoplay: true,
    autoplaySpeed:2500,
    speed: 500,
    variableWidth: true,
    onAfterChange: function(){ 
          var cat = ($('#carousel').slickCurrentSlide()) + 1;
          $('.client-text > li').hide();
          $('.client-text > li:nth-child('+ cat +')').show();
    }
});



  $('.client-text > li').hide();
  $('.client-text > li:first-child').show();

</script>    
</body>

</html>