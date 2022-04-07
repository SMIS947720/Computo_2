<?php
   // comentario de una linea

   /*
   varios comnetarios
   */
   
   //echo "<h1>Programacion Computacional</h1>"
   //evalucacion
   if(isset($_POST['seleccion'])){
      //echo "Click sobre el boton";
      $idioma =$_POST['idioma'];
      echo "<br/>".$idioma;
      INCLUDE $idioma. ".php";
   }
   else{
     // echo "no se ha  enviado click";
      INCLUDE "es.php";
   }

?>

<!DOCTYPE html>
<html>
<head>
  
   <title><?php echo TITLE; ?></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
      <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
           <div class="container-fluid">
              <a class="navbar-brand">Navbar</a>
             <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
             </form>
            </div>
       </nav>
   <div>
      <div class= "container-md">
            <div class="col-lg-7">
            <form  method="POST">
            <h1 class="display-3">Cambio de idioma</h1>
                <select class="form-select" aria-label="Default select example" name="idioma">
                <option selected>Idioma</option>
                <option value="es">Spanish</option>
                <option value="en">Englis</option>

               </select>
                 <input type="submit" class="btn btn-info" name="seleccion" value="Cambiar"></input>

             </form>
             <h1 class="display-3"><?php echo TITLE; ?></h1>
              <h1 class="display-3"><?php echo HEARDING_TITLE; ?></h1>
               <h2 class="display-6"><?php echo OVERVIEW_TITLE; ?></h2>


             <div>

      </div>
       
        
   </div>
     
   
</body>
</html>