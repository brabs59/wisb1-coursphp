<html>
    <head>
    	<title>Page Film</title>
     	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
   </head>
    <body>
    	<section class="jumbotron text-center">
    		<div class="container">

     <h1><?php</h1>
     <p class="lead text-muted">         
   - BIENVENUE -</p>
      <h2>NETFLIX</h2>
      <p>Notre site est fait pour vous faire profiter des films en streaming ! </p> </div> </section>

<?php 

function card ($titre,$image,$description){
   echo "<div class=\"col-lg-4 col-sm-12 col-md-6\">
   <div class=\"card\">
            <img class=\"card-img-top\" src=\"$image\" alt=\"Card image\">
  <div class=\"card-body\">
    <h4 class=\"card-title\">$titre</h4>
    <p class=\"card-text\">Some example text.</p>
    <a href=\"#\" class=\"btn btn-primary\">See Profile</a>
  </div>
  </div>
</div>";
}

  ?>
      <div class="container">
       <div class="row">
    		<?php

       require ("parametre php.php");


       $dbh = new PDO ("mysql:host=$host;dbname=$dbname",$login,$password);

       if (array_key_exists ("annee",$_GET)){
       	   $annee = $_GET["annee"];
       	   $req = $dbh -> prepare(
       	   	"SELECT * FROM film
       	   	WHERE annee = : annee");
       	   
       }
else {

       $req = $dbh ->query ("SELECT * FROM film");
$films = $req;
}

foreach ($films as $f){
card($f["titre"],$f["image"],$f["description"]);
}

    		?> </div> </div>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	</body>
</html>