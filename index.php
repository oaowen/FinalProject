<?php
include('header.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    h1 {
  color: maroon;
  text-align: center;
  }


</style>
    
  </head>
  <body>
    <h1 style="background-color:LightGray;">Welcome to the library!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <div>
<div class="card">
<div class="card-header">
 

<span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">The Mission Statement</span>

</div>

<div class="card-body">
<p>
The Library

</p>

</div>

</div>

</div>
    </br>
<table style="margin: auto;">
  <tr>
    <td>
      <div class="card" style="width: 200px; height: 400px;">
        <div class="card-header">
 

<span onmouseover="style.color='blue'" onmouseout="style.color='pink'" style="color: pink">Featured</span>

</div>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="https://marketplace.canva.com/EAFEaEHdCUw/1/0/1131w/canva-blue-white-with-books-illustration-welcome-to-the-library-school-poster-OWKnNwm3qBc.jpg" class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.loc.gov/preservation/resources/educational/bookmarks/BKBCposters/images/spinethumb.jpg" class="d-block w-100 h-50"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.atlasobscura.com/rMAgytOPdjbglg93uJhSss1fLdcc8pIyfEL8_wBEJUI/rs:fill:12000:12000/q:81/sm:1/scp:1/ar:1/aHR0cHM6Ly9hdGxh/cy1kZXYuczMuYW1h/em9uYXdzLmNvbS91/cGxvYWRzL2Fzc2V0/cy81ZWFkOGIwNDNh/MDAxYWZlN2ZfM2Yw/NTIyOXYuanBn.jpg" class="d-block w-100"  alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>
    </td>
    <td>
      <div class="card" style="width: 200px; height: 400px;">
        <img src="https://digital.library.unt.edu/ark:/67531/metadc443/m1/1/high_res/" class="img-fluid" alt="...">
      </div>
    </td>
    <td>
      <div class="card" style="width: 200px; height: 400px;">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img src="https://marketplace.canva.com/EAFEaEHdCUw/1/0/1131w/canva-blue-white-with-books-illustration-welcome-to-the-library-school-poster-OWKnNwm3qBc.jpg" class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.loc.gov/preservation/resources/educational/bookmarks/BKBCposters/images/spinethumb.jpg" class="d-block w-100 h-50"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://img.atlasobscura.com/rMAgytOPdjbglg93uJhSss1fLdcc8pIyfEL8_wBEJUI/rs:fill:12000:12000/q:81/sm:1/scp:1/ar:1/aHR0cHM6Ly9hdGxh/cy1kZXYuczMuYW1h/em9uYXdzLmNvbS91/cGxvYWRzL2Fzc2V0/cy81ZWFkOGIwNDNh/MDAxYWZlN2ZfM2Yw/NTIyOXYuanBn.jpg" class="d-block w-100"  alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>
    </td>
  </tr>
</table>

  
  
  
  
  
  
  
  

   
   </div.
    
    
  </body>
</html>
