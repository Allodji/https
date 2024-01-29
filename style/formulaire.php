

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remplissage du formulaire</title>
    <link rel="stylesheet" href="./style/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./style/css/all.min.css">

</head>
<body class="fluid m-4" style="background-color: rgb(174, 180, 185);" >
    
  <div class="container    shadow rounded-3 pb-3 pt-3" style="background-color:rgb(217, 219, 222);" align="center">
    <form action="">
     <ul class="list-unstyled">
     <!-- Nom-->
     <li>
     <div style="display:block;">
       <ul class="list-unstyled" >
       <li>
       <label for="name">Nom</label>
       </li>
        <li>
        <input type="text" name="name" class="border-none rounded" id="name">
        </li>
       </ul>
      </div>
     </li>

     <!-- Prénom-->
     <li>
     <div style="display:block;">
       <ul class="list-unstyled" >
       <li>
       <label for="surname">Prénom</label>
       </li>
        <li>
        <input type="text" name="surname" class="border-none rounded id="surname">
        </li>
       </ul>
      </div>
     </li>

     <!-- Adresse-->
     <li>
     <div style="display:block;">
       <ul class="list-unstyled" >
       <li>
       <label for="adress">Adresse</label>
       </li>
        <li>
        <input type="text" name="adresse" class="border-none rounded" id="adresse">
        </li>
       </ul>
      </div>
     </li>


     <!-- Date de Naissance-->
     <li>
     <div style="display:block;">
       <ul class="list-unstyled" >
       <li>
       <label for="date">Date de naissance</label>
       </li>
        <li>
        <input type="text" name="date" class="border-none rounded" id="date">
        </li>
       </ul>
      </div>
     </li>

     <!--E-mail-->
     <li>
     <div style="display:block;">
       <ul class="list-unstyled" >
       <li>
       <label for="mail">Adresse E-Mail</label>
       </li>
        <li>
        <input type="text" name="mail" class="border-none rounded" id="mail">
        </li>
       </ul>
      </div>
     </li>

     <!--Téléphone-->
     <li>
     <div style="display:block;">
       <ul class="list-unstyled" >
       <li>
       <label for="phone">Téléphone</label>
       </li>
        <li>
        <input type="text" name="phone" class="border-none rounded" id="phone">
        </li>
       </ul>
      </div>
     </li>

     <!-- Permis de conduire-->
     <li>
     <div style="display:block;">
       <ul class="list-unstyled" >
       <li>
       <label for="permis">Permis de conduire</label>
       </li>
        <li>
        <input type="text" name="permis" class="border-none rounded" id="permis">
        </li>
       </ul>
      </div>
     </li>

     <i class="fa fa-plus mt-3" aria-hidden="true" id="ajouter"></i>


     <li>
        <input type="submit" name="valider" value="Valider" class="border-none rounded mt-2 btn btn-dark" id="permis">
      </li>
       
    
     </ul>


     



    </form>
  </div>
     <script>

      var ajouter=document.getElementById("ajouter");
       ajouter.addEventListener('click', function(){
            document.createElement("li").appendChild("ul");
       });

     </script>

    <script src="./style/sweetalert2.all.min.js"></script>
</body>
</html>