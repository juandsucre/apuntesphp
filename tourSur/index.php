<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximun-sacale=1"/>
    <title>Melicena</title>
    <link rel="stylesheet" href="css2/estilos.css">
    <link rel="stylesheet" href="css2/fontello.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Indie+Flower|Lexend+Exa|Pacifico|Permanent+Marker|Work+Sans&display=swap" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js">
    </script>
    <script src="js/menu.js"></script>
    <script src="js/main.js"></script>
    <script src="js/reloj.js"></script>
    <script src="js/publicidad.js"></script>
    <script src="js/cerrar.js"></script>
    <script src="js/boton.js"></script>
    <script src="js/cookies.js"></script>
     <!--<script type="text/javascript" charset="UTF-8" src="http://chs03.cookie-script.com/s/da59c8127acba69f90a20ef786837e44.js"></script>-->
</head>
<body>
  <main>
   <header>
     <div class="contenedor">
     
     <img src="img/icono2.png" alt="Icono playa">
     <div id="fecha">Actualizado:<br>
      <script>
          var meses = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Dieciembre ");
          var f = new Date();
          document.write(f.getDate()+" de "+ meses[f.getMonth()]+ " de " + f.getFullYear());
          
     </script>
    </div>
    <div id="reloj">
    </div>         
     <h1>MELICENA</h1>
     <input type="checkbox" id="btn-menu">
     <label for="btn-menu" class="icon-align-justify"></label>
     <nav class="menu">
         <ul>
             <li><a href="registro.html">REGISTRARSE</a></li>
            
             <li class="submenu"><a href="#">MELICENA<span class="icon-down-open"></span></a>
             <ul>
                 <li><a href="#">Pueblo</a></li>
                 <li><a href="#">Fiestas</a></li>
                 <li><a href="#">Gatronomía</a></li>
                 <li><a href="correo2.html">Enviar correo</a></li>
                 </ul>
             </li>
             <li ><a href="#">CONTENIDOS EXCLUSIVOS</a></li>
             <li><a href="login.html">LOGUEAR</a></li>
         </ul>
     </nav>
     </div>
      
   </header>
   <div id="volver">
      <img src="img/arriba2.png" style= "width:48px; height:48px; bottom: 0; right: 0; position:fixed; opacity:0.8;border:3px solid black;border-radius:100%;">
     </div>
   <div class="contenedor1">
          <div id="anuncio"> 
           <div class="barra">
               <span>X</span>
               
           </div>
          </div>  
       </div>
    <div class="slideshow">
     <ul class="slider">
         <li><img src="img/slider1.jpg" alt="">
        </li>
         <li><img src="img/slider2.jpg" alt="">
        </li>
         <li><img src="img/slider3.jpg" alt="">
        </li>
         <li><img src="img/slider4.jpg" alt="">
        </li>
         <li><img src="img/slider5.jpg" alt="">
        </li>   
     </ul>   
       <ol class="pagination">
           
       </ol>
       
       <div class="left">
       <span class="icon-angle-circled-left"></span>
       </div>
        <div class="right">
       <span class="icon-angle-circled-right"></span>
       </div> 
    </div>
    
    <section id="introduccion">
      
       <h2>EMPRESA TURÍSTICA ONLINE</h2> 
        <p>¿Quiénes somos?<br>
            Somos una empresa turística online, compuesta por 10 agentes operando desde distintintas partes del Sur de Granada. Somos independientes de las grandes corporaciones turísticas de España y Europa.</p><br>
        <h2>Que ofrecemos</h2>
        <p>Turismo interactivo con pueblos costeros y de montaña, permitiendo a nuestros clientes y seguidores la oportunidad de subir a nuestro portal los placeres y experiencias en la naturaleza pura.
        
        </p>
       
    </section>
    <section id="imagenes">
       <div class="contenedor">
        <article id="primero">
          <h3><a href="">GRANADA</a></h3>
          <p>La ciudad de Granada en su esplendor.</p> 
        </article>
        <article id="segundo">
          <h3><a href="">APARTAMENTOS</a></h3>
          <p>Vistas en primera línea de playa.</p> 
        </article>
        <article id="tercero">
          <h3><a href="https://rinconesdegranada.com/torre-de-melicena">LA TORRE</a></h3>
          <p>La cumbre de Melicena que puedes visistar.</p> 
        </article>
        <article id="cuarto">
          <h3><a href="https://rinconesdegranada.com/evento/fiestas-virgen-del-carmen-melicena">FIESTAS</a></h3>
          <p>Buena compañía sobre la playita.</p> 
        </article>
        </div>
    </section>
    
    <section id="desarrollo">
     <h2>"Grandeza en frasco pequeño."</h2> 
        <p>Mientras confecciono esta página web he tenido la maravillosa oportunidad de volver a Melicena para documentarme aún mejor,si puedo. No sabéis lo gratificante que ha resultado ver que que hay cosas que nunca cambian. Pasear por las playas bajo el atardecer "rosa", disfrutar con la calidez de su gentes, nadar y bucear en un agua tan cristalina que me veo los pies desde fuera o practicar surf y pesca son sólo algunos de los placeres que me ha brindado esta tierra.
        Y esque Melicena tiene algo que..no sé. ¡Te engancha!</p>   
    </section>

    <footer>
          <p>©MELICENABEACH 2019</p>    
    <hr>
     <div class="contenedor">
        <a href="#" class="icon-facebook-squared"></a>
        <a href="#" class="icon-twitter-circled"></a>
        <a href="#" class="icon-instagram"></a>
        <a href="#" class="icon-pinterest-circled"></a>
        
      </div>  
    <hr>    
        <p><a href="cookie.html">* Política de cookies* </a></p>    
      </footer>
    
        
        
    </main>
</body>

</html>