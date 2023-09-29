<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes Retiro</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto&display=swap" rel="stylesheet">
    
   
    
</head>
<body>


<div class="header">  
  <img src="./img/logo.png" width="6%" style="margin-top: 2.5vw;margin-left:4vw">
  <p style="position:absolute; top:-2vw; right:5vw"><a href="#contacto" style="color:#ccc">Contáctenos</a> <a href="#blog" style="color:#ccc">Blog</a> 
  <a href="#whatsapp" style="color:white"><img src="./img/Whatsapp.svg" width="8%" style="margin-top: 2.5vw;margin-left:0.5vw"></a>
  <a href="#email" style="color:white"><img src="./img/Email_Header.svg" width="8%" style="margin-top: 2.5vw;margin-left:0.5vw"></a>
  <span class="number">(55)-8978-1800</span>
</p>
</div>

<div class='pre-loader'>
    <img class='loading-gif' alt='loading' src="https://media0.giphy.com/media/11FuEnXyGsXFba/source.gif"/>
</div>

<!-- js to hide preloader loading is done -->
<script type='text/javascript'>
    window.addEventListener('load', function () {
        document.querySelector('.pre-loader').className += ' hidden';
    });
</script>

<section class="ahorro">
    <div class="retiro"></div>
    <div  class="frmretiro">
    <h2 >Asegura tu retiro con un plan de ahorro<br>
Cotiza tu plan de ahorro</h2>
    <form action="result-plans.php" oninput="range_control_value.value = range_control.valueAsNumber">
<p class="parraf">
Edad: <input class="form-control" type="text" name="name_control" autofocus required placeholder="¿Cuántos años tienes?" style="width: 93%;"/>
<br />
¿Cuánto quiero ahorrar? <input type="text" name="email_control" class="form-control" required placeholder="Ingresa un monto entre $1.500 y $12.500" style="width: 93%;"/>
<br />
¿Con qué frecuencia? 
<select class="form-control" style="width: 97%;">
    <option>Al mes</option>
    <option>Al trimestre</option>
    <option>Al semestre</option>
    <option>Al año</option>

</select><br>

<button type="submit" class="bt2 btb">Cotizar</button>
</p>
</form>


    

    </div>    
</section>
<section class="planesretiro">
    
    <div class="plan1"><span class="titulo">Tendrás $2.5 millones
si inicias a los 25 años</span></div>
    <div class="plan2"><span class="titulo">Tendrás $8.4 millones
si inicias a los 30 años</span></div>
    <div class="plan3"><span class="titulo">Tendrás $4.2 millones
si inicias a los 35 años</span></div>
    <div class="plan4"><span class="titulo">Tendrás $2.9 millones
si inicias a los 40 años</span></div>
    <div class="plan5"><span class="titulo">Tendrás $1.5 millones
si inicias a los 45 años</span></div>
   
</section>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<h1 class="tituloest">¿Porqué somos su mejor opción?</h1>
<section class="estadisticas">
   
    <div class="row">
        <div class="column">
            <div class="card">
                <p>
                  <i class="fa fa-user"></i>
                  </p>
                <h3>15</h3>
                <p>Años de trayectoria</p>
            </div>
        </div>
       
        <div class="column">
            <div class="card">
                <p>
                      <i class="fa fa-book"></i>
                  </p>
                <h3>8</h3>
                <p>Países de presencia</p>
            </div>
        </div>
       
        <div class="column">
            <div class="card">
                <p>
                      <i class="fa fa-smile-o"></i>
                  </p>
                <h3>$50.000</h3>
                <p>Capital de trabajo</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <p>
                      <i class="fa fa-smile-o"></i>
                  </p>
                <h3>200</h3>
                <p>Millones de clientes</p>
            </div>
        </div>
    </div>
</section>

<section class="planretiro">
<h1>Plan Personal de Retiro</h1><br>
<p>Este plan es para ti si buscas generar un patrimonio para respaldar tu retiro, con un plan de inversión con plazos de entre 5 a 25 años.</p>
<div class="row">
<div class="col-md-5 columnap"><br>
<strong>1.- Inversión desde $1,500 pesos</strong><br>
<p>Con esta inversión en un plazo máximo de 25 años, puedes ahorrar $1,500 pesos al mes para pagar tu Plan Personal de Retiro.</p></div>
<div class="col-md-5 bloque1"></div>
</div>

<div class="row">
<div class="col-md-5 columnap"><br>
<strong>2.- Bono de fidelidad</strong><br>
<p>Con tu plan de ahorro, aseguras un bono de fidelidad,ya que la constancia y fidelidad en tus pagos durante tu primer año de ahorro te paga con un Bono de Fidelidad de hasta el 100% de tus aportaciones comprometidas.</p>
</div>
<div class="col-md-5 bloque2"></div>
</div>

<div class="row">
<div class="col-md-5 columnap"><br>
<strong>3.- Deducible de impuestos</strong><br>
<p>
 ¿te gustaría poder ahorrarte ese dinero de pago de impuestos e invertirlo en tu futuro? La solución es un Plan de Ahorro de retiro ya que ¡es deducible de impuestos!
</p></div>
<div class="col-md-5 bloque3"></div>
</div>


<div class="row">
<div class="col-md-5 columnap"><br>
<strong>4.- Alternativas de liquidez</strong><br>
<p>Puedes ahorrar hasta $1,500 pesos al mes para pagar tu Plan Personal de Retiro y asegurar tu jubilación.</p></div>
<div class="col-md-5 bloque4"></div>
</div>

<footer style="margin-top: 50vw;">
 
<div class="footerpie">  
<div class="row">
<div class="columna5">
<h5><strong>Seguro de Autos</strong></h5><br>
<h6>Seguro de Auto ABA Auto Seguro</h6>
<h6>Seguro de Auto ANA Seguros</h6>
<h6>Seguro de Auto HDI Seguros</h6>
<h6>Seguro de Auto Qualitas</h6>
<h6>Seguro de Auto Sura</h6>
</div>
<div class="columna6">
<h5><strong>Seguros Gastos Médicos Mayores</strong></h5><br>
<h6>Seguro de Gastos Médicos Mayores Atlas Seguros</h6>
<h6>Seguro de Gastos Médicos Mayores AXA Seguros</h6>
<h6>Seguro de Gastos Médicos Mayores Seguros Ve por Más</h6>
<h6>Seguro de Gastos Médicos Mayores Seguros GNP</h6>
</div>


</div>


</div>
<div class="row">
<div class="pie">
Consulta nuestro Aviso de Privacidad y Términos de Uso
</div>
</div>
</footer>



</div>


<div></div>
</section>



</body>
</html>