<?php
include("funciones.php");


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAPADITA</title>
</head>
<body>

<div class="container pb-3">
<nav class="container navbar  fixed-bottom " id="boton" >
  <a class=" w-50 d-flex justify-content-center " href="jugadas.php"><button type="button " class="btn btn-light w-75 "><ion-icon id="icono" name="calendar-outline"></ion-icon></button></a>

  <a class=" w-50 d-flex justify-content-center " href="social.php"><button type="button" class="btn btn-light w-75 "><ion-icon id="icono" name="beer-outline"></ion-icon></button></a>
</nav>
</div>





<div >
    <h2 class="display-4 text-center font-weight-bold">POZO </h2>
  </div>
  <div >
    <h2 class="display-4 text-center font-weight-bold">$3.300</h2>
  </div>
  <div >
    <h2 class="display-4 text-center font-weight-bold">1 AL 5 DE SEPTIEMBRE</h2>
  </div>

</div>

<div class="jumbotron shadow p-3 mb-5 bg-white rounded">
    <h1 class="display-4 text-center font-weight-bold">BRUNO</h1>
       <p class="lead text-center">TUS NUMEROS SON :</p>
    <div class=" text-center " >
      <?php foreach($bruno as $numeros):?>
         <h4 class="text-center mt-1 d-inline-block rounded input-group-text" > <?=$numeros ?></h4>
          <?php endforeach;  ?>
           <hr class="my-4">
      </div>
         <p class="card-text text-center">Aciertos :</p>
             <?php if(array_intersect($bruno,$sorteo) == false):?>
                <p class="card-text text-center font-weight-bold rounded " id="aciertos">Sin aciertos </p>
             <?php else:?>
             <?php foreach($resultado as $re):?>
           <P class="card-text text-center font-weight-bold rounded " id="aciertos"><?=$re?></p>
             <?php endforeach;?>
             <?php endif;?>
          <hr class="my-4">
          <p class="card-text text-center">Faltantes :</p>
            <p class="card-text text-center" id="faltantes"><?php foreach($resultadod as $resu):?></p>
            <p class="card-text text-center font-weight-bold rounded" id="faltantes">
          <?=$resu?> </p>
          <?php endforeach;?>
      </div>
<!--------------------fin-------------------->

<div class="jumbotron shadow p-3 mb-5 bg-white rounded">
    <h1 class="display-4 text-center font-weight-bold">LEO</h1>
       <p class="lead text-center">TUS NUMEROS SON :</p>
    <div class=" text-center " >
      <?php foreach($leo as $numeros1):?>
         <h4 class="text-center mt-1 d-inline-block rounded input-group-text" > <?=$numeros1 ?></h4>
          <?php endforeach;  ?>
           <hr class="my-4">
      </div>
         <p class="card-text text-center">Aciertos :</p>
             <?php if(array_intersect($leo,$sorteo) == false):?>
                <p class="card-text text-center font-weight-bold rounded " id="aciertos">Sin aciertos </p>
             <?php else:?>
             <?php foreach($resultado1 as $re1):?>
           <P class="card-text text-center font-weight-bold rounded " id="aciertos"><?=$re1?></p>
             <?php endforeach;?>
             <?php endif;?>
          <hr class="my-4">
          <p class="card-text text-center">Faltantes :</p>
            <p class="card-text text-center" id="faltantes"><?php foreach($resultadod1 as $resu1):?></p>
            <p class="card-text text-center font-weight-bold rounded" id="faltantes">
          <?=$resu1?> </p>
          <?php endforeach;?>
      </div>
<!--------------------fin-------------------->
<div class="jumbotron shadow p-3 mb-5 bg-white rounded">
    <h1 class="display-4 text-center font-weight-bold">MARIANO</h1>
       <p class="lead text-center">TUS NUMEROS SON :</p>
    <div class=" text-center " >
      <?php foreach($mariano as $numeros2):?>
         <h4 class="text-center mt-1 d-inline-block rounded input-group-text" > <?=$numeros2 ?></h4>
          <?php endforeach;  ?>
           <hr class="my-4">
      </div>
         <p class="card-text text-center">Aciertos :</p>
             <?php if(array_intersect($mariano,$sorteo) == false):?>
                <p class="card-text text-center font-weight-bold rounded " id="aciertos">Sin aciertos </p>
             <?php else:?>
             <?php foreach($resultado2 as $re2):?>
           <P class="card-text text-center font-weight-bold rounded " id="aciertos"><?=$re2?></p>
             <?php endforeach;?>
             <?php endif;?>
          <hr class="my-4">
          <p class="card-text text-center">Faltantes :</p>
            <p class="card-text text-center" id="faltantes"><?php foreach($resultadod2 as $resu2):?></p>
            <p class="card-text text-center font-weight-bold rounded" id="faltantes">
          <?=$resu2?> </p>
          <?php endforeach;?>
      </div>
<!--------------------fin-------------------->
<div class="jumbotron shadow p-3 mb-5 bg-white rounded">
    <h1 class="display-4 text-center font-weight-bold">JARA</h1>
       <p class="lead text-center">TUS NUMEROS SON :</p>
    <div class=" text-center " >
      <?php foreach($jara as $numeros3):?>
         <h4 class="text-center mt-1 d-inline-block rounded input-group-text" > <?=$numeros3 ?></h4>
          <?php endforeach;  ?>
           <hr class="my-4">
      </div>
         <p class="card-text text-center">Aciertos :</p>
             <?php if(array_intersect($jara,$sorteo) == false):?>
                <p class="card-text text-center font-weight-bold rounded " id="aciertos">Sin aciertos </p>
             <?php else:?>
             <?php foreach($resultado3 as $re3):?>
           <P class="card-text text-center font-weight-bold rounded " id="aciertos"><?=$re3?></p>
             <?php endforeach;?>
             <?php endif;?>
          <hr class="my-4">
          <p class="card-text text-center">Faltantes :</p>
            <p class="card-text text-center" id="faltantes"><?php foreach($resultadod3 as $resu3):?></p>
            <p class="card-text text-center font-weight-bold rounded" id="faltantes">
          <?=$resu3?> </p>
          <?php endforeach;?>
      </div>
<!--------------------fin-------------------->
<div class="jumbotron shadow p-3 mb-5 bg-white rounded">
    <h1 class="display-4 text-center font-weight-bold">CESAR</h1>
       <p class="lead text-center">TUS NUMEROS SON :</p>
    <div class=" text-center " >
      <?php foreach($cesar as $numeros4):?>
         <h4 class="text-center mt-1 d-inline-block rounded input-group-text" > <?=$numeros4 ?></h4>
          <?php endforeach;  ?>
           <hr class="my-4">
      </div>
         <p class="card-text text-center">Aciertos :</p>
             <?php if(array_intersect($cesar,$sorteo) == false):?>
                <p class="card-text text-center font-weight-bold rounded " id="aciertos">Sin aciertos </p>
             <?php else:?>
             <?php foreach($resultado4 as $re4):?>
           <P class="card-text text-center font-weight-bold rounded " id="aciertos"><?=$re4?></p>
             <?php endforeach;?>
             <?php endif;?>
          <hr class="my-4">
          <p class="card-text text-center">Faltantes :</p>
            <p class="card-text text-center" id="faltantes"><?php foreach($resultadod4 as $resu4):?></p>
            <p class="card-text text-center font-weight-bold rounded" id="faltantes">
          <?=$resu4?> </p>
          <?php endforeach;?>
      </div>
<!--------------------fin-------------------->
<div class="jumbotron shadow p-3 mb-5 bg-white rounded">
    <h1 class="display-4 text-center font-weight-bold">CESAR</h1>
       <p class="lead text-center">TUS NUMEROS SON :</p>
    <div class=" text-center " >
      <?php foreach($cesar2 as $numeros5):?>
         <h4 class="text-center mt-1 d-inline-block rounded input-group-text" > <?=$numeros5 ?></h4>
          <?php endforeach;  ?>
           <hr class="my-4">
      </div>
         <p class="card-text text-center">Aciertos :</p>
             <?php if(array_intersect($cesar2,$sorteo) == false):?>
                <p class="card-text text-center font-weight-bold rounded " id="aciertos">Sin aciertos </p>
             <?php else:?>
             <?php foreach($resultado5 as $re5):?>
           <P class="card-text text-center font-weight-bold rounded " id="aciertos"><?=$re5?></p>
             <?php endforeach;?>
             <?php endif;?>
          <hr class="my-4">
          <p class="card-text text-center">Faltantes :</p>
            <p class="card-text text-center" id="faltantes"><?php foreach($resultadod5 as $resu5):?></p>
            <p class="card-text text-center font-weight-bold rounded" id="faltantes">
          <?=$resu5?> </p>
          <?php endforeach;?>
      </div>
<!--------------------fin-------------------->
<div class="jumbotron shadow p-3 mb-5 bg-white rounded">
    <h1 class="display-4 text-center font-weight-bold">FERNANDEZ</h1>
       <p class="lead text-center">TUS NUMEROS SON :</p>
    <div class=" text-center " >
      <?php foreach($fernandez as $numeros6):?>
         <h4 class="text-center mt-1 d-inline-block rounded input-group-text" > <?=$numeros6 ?></h4>
          <?php endforeach;  ?>
           <hr class="my-4">
      </div>
         <p class="card-text text-center">Aciertos :</p>
             <?php if(array_intersect($fernandez,$sorteo) == false):?>
                <p class="card-text text-center font-weight-bold rounded " id="aciertos">Sin aciertos </p>
             <?php else:?>
             <?php foreach($resultado6 as $re6):?>
           <P class="card-text text-center font-weight-bold rounded " id="aciertos"><?=$re6?></p>
             <?php endforeach;?>
             <?php endif;?>
          <hr class="my-4">
          <p class="card-text text-center">Faltantes :</p>
            <p class="card-text text-center" id="faltantes"><?php foreach($resultadod6 as $resu6):?></p>
            <p class="card-text text-center font-weight-bold rounded" id="faltantes">
          <?=$resu6?> </p>
          <?php endforeach;?>
      </div>
<!--------------------fin-------------------->
<div class="jumbotron shadow p-3 mb-5 bg-white rounded">
    <h1 class="display-4 text-center font-weight-bold">ELBIO</h1>
       <p class="lead text-center">TUS NUMEROS SON :</p>
    <div class=" text-center " >
      <?php foreach($elbio as $numeros7):?>
         <h4 class="text-center mt-1 d-inline-block rounded input-group-text" > <?=$numeros7 ?></h4>
          <?php endforeach;  ?>
           <hr class="my-4">
      </div>
         <p class="card-text text-center">Aciertos :</p>
             <?php if(array_intersect($elbio,$sorteo) == false):?>
                <p class="card-text text-center font-weight-bold rounded " id="aciertos">Sin aciertos </p>
             <?php else:?>
             <?php foreach($resultado7 as $re7):?>
           <P class="card-text text-center font-weight-bold rounded " id="aciertos"><?=$re7?></p>
             <?php endforeach;?>
             <?php endif;?>
          <hr class="my-4">
          <p class="card-text text-center">Faltantes :</p>
            <p class="card-text text-center" id="faltantes"><?php foreach($resultadod7 as $resu7):?></p>
            <p class="card-text text-center font-weight-bold rounded" id="faltantes">
          <?=$resu7?> </p>
          <?php endforeach;?>
      </div>
<!--------------------fin-------------------->
<div class="jumbotron shadow p-3 mb-5 bg-white rounded">
    <h1 class="display-4 text-center font-weight-bold">JAIME</h1>
       <p class="lead text-center">TUS NUMEROS SON :</p>
    <div class=" text-center " >
      <?php foreach($jaime as $numeros8):?>
         <h4 class="text-center mt-1 d-inline-block rounded input-group-text" > <?=$numeros8 ?></h4>
          <?php endforeach;  ?>
           <hr class="my-4">
      </div>
         <p class="card-text text-center">Aciertos :</p>
             <?php if(array_intersect($jaime,$sorteo) == false):?>
                <p class="card-text text-center font-weight-bold rounded " id="aciertos">Sin aciertos </p>
             <?php else:?>
             <?php foreach($resultado8 as $re8):?>
           <P class="card-text text-center font-weight-bold rounded " id="aciertos"><?=$re8?></p>
             <?php endforeach;?>
             <?php endif;?>
          <hr class="my-4">
          <p class="card-text text-center">Faltantes :</p>
            <p class="card-text text-center" id="faltantes"><?php foreach($resultadod8 as $resu8):?></p>
            <p class="card-text text-center font-weight-bold rounded" id="faltantes">
          <?=$resu8?> </p>
          <?php endforeach;?>
      </div>
<!--------------------fin-------------------->
<div class="jumbotron shadow p-3 mb-5 bg-white rounded">
    <h1 class="display-4 text-center font-weight-bold">BETO</h1>
       <p class="lead text-center">TUS NUMEROS SON :</p>
    <div class=" text-center " >
      <?php foreach($beto as $numeros9):?>
         <h4 class="text-center mt-1 d-inline-block rounded input-group-text" > <?=$numeros9 ?></h4>
          <?php endforeach;  ?>
           <hr class="my-4">
      </div>
         <p class="card-text text-center">Aciertos :</p>
             <?php if(array_intersect($beto,$sorteo) == false):?>
                <p class="card-text text-center font-weight-bold rounded " id="aciertos">Sin aciertos </p>
             <?php else:?>
             <?php foreach($resultado9 as $re9):?>
           <P class="card-text text-center font-weight-bold rounded " id="aciertos"><?=$re9?></p>
             <?php endforeach;?>
             <?php endif;?>
          <hr class="my-4">
          <p class="card-text text-center">Faltantes :</p>
            <p class="card-text text-center" id="faltantes"><?php foreach($resultadod9 as $resu9):?></p>
            <p class="card-text text-center font-weight-bold rounded" id="faltantes">
          <?=$resu9?> </p>
          <?php endforeach;?>
      </div>
<!--------------------fin-------------------->
<div class="jumbotron shadow p-3 mb-5 bg-white rounded">
    <h1 class="display-4 text-center font-weight-bold">SERGIO</h1>
       <p class="lead text-center">TUS NUMEROS SON :</p>
    <div class=" text-center " >
      <?php foreach($sergio as $numeros10):?>
         <h4 class="text-center mt-1 d-inline-block rounded input-group-text" > <?=$numeros10 ?></h4>
          <?php endforeach;  ?>
           <hr class="my-4">
      </div>
         <p class="card-text text-center">Aciertos :</p>
             <?php if(array_intersect($beto,$sorteo) == false):?>
                <p class="card-text text-center font-weight-bold rounded " id="aciertos">Sin aciertos </p>
             <?php else:?>
             <?php foreach($resultado10 as $re10):?>
           <P class="card-text text-center font-weight-bold rounded " id="aciertos"><?=$re10?></p>
             <?php endforeach;?>
             <?php endif;?>
          <hr class="my-4">
          <p class="card-text text-center">Faltantes :</p>
            <p class="card-text text-center" id="faltantes"><?php foreach($resultadod10 as $resu10):?></p>
            <p class="card-text text-center font-weight-bold rounded" id="faltantes">
          <?=$resu10?> </p>
          <?php endforeach;?>
      </div>
<!--------------------fin-------------------->

<!--------------------fin-------------------->






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>

</html>