<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <?php include 'navbar.php';
  
  class Dog {
      public $name;
      public $description;
      
      public function __construct($n, $d){
          $this->name = $n;
          $this->description = $d;
      }
 
    }

    $dog1 = new Dog("Max", "I like to play a lot");
    $dog2 = new Dog("Jes", "I am serious");
    $dog3 = new Dog("Kia", "Tinity mini");
 
 
    ?>

  
  
  <div class="container">

  <div class="container">
  <div class="row">
    <div class="col">
      
    <div class="card" style="width: 18rem;">
     <img src="images/OIP.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?= $dog1->name ?></h5>
          <p class="card-text"><?= $dog1->description ?></p>
        </div>
    </div>

    </div>
    <div class="col">
      <!-- Column -->
      <div class="card" style="width: 18rem;">
     <img src="images/OIP.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?= $dog2->name ?></h5>
          <p class="card-text"><?= $dog2->description ?></p>
        </div>
    </div>

    </div>
    <div class="col">
       <!-- Column -->
      <div class="card" style="width: 18rem;">
     <img src="images/OIP.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?= $dog3->name ?></h5>
          <p class="card-text"><?= $dog3->description ?></p>
        </div>
    </div>

    </div>
  </div>
</div>


    

  </div>

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>