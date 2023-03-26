<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
        
            $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=b2771f27&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <h3>MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="tahu" style=background-image:url('warna.jpg');>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col text-white">
<h1>TOP MOVIES</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="doraemon.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Doraemon</h5>
        <p class="card-text">Nobita and his friends go an adventure to save the future from monsters that come out from doraemon's gadget.Will nobita be able to capture all of them and help a monk in his journey to the west?

</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="avatar.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Avatar</h5>
        <p class="card-text">Jake Sully lives with his newfound family formed on the extrasolar moon Pandora. Once a familiar threat returns to finish what was previously started, Jake must work with Neytiri and the army of the Na'vi race to protect their home.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="titanic.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Titanic</h5>
        <p class="card-text">A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="korea.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Train To Busan</h5>
        <p class="card-text">As a zombie outbreak sweeps the country, a dad and his daughter take a harrowing train journey in an attempt to reach the only city that's still safe.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="batman.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">The Batman</h5>
        <p class="card-text">When a sadistic serial killer begins murdering key political figures in Gotham, Batman is forced to investigate the city's hidden corruption and question his family's involvement.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="avengers.jpg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">The Avengers</h5>
        <p class="card-text">Earth's mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.</p>
      </div>
    </div>
  </div>
  
    </div>
    </div>
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
