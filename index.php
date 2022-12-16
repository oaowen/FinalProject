<?php
include('header.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <style>
    h1 {
  color: maroon;
  text-align: center;
  }


</style>
    
  </head>
  </br>
  <body>
    <h1 style="background-color:White; color:#c7d04e">Welcome to the library!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" ></script>
    
    
 
    <div>
<div class="card">
<div class="card-header">
 

  <h5 style="color: #c7d04e">Mission Statement</h5>

</div>

<div class="card-body">
<p>
The Library is a safe space for all. All readers are welcome to our library. Our goal is to pair you with a book that suits your needs. Books to expand your mind, take you to a far away place, or to make you feel at home live here. Please see a librarian to start your journey

</p>

</div>

</div>

</div>
    </br>
<table style="margin: auto">
  <tr>
    <td>
      <div class="card" style="width: 400px; height: 400px;">
     
       <img src="https://risarodil.com/wp-content/uploads/2018/07/library_tumblr.jpg" class="img-fluid" alt="...">
      </div>
    </td>
    <td>
      

         
  
     <div class="card" style="width: 400px; height: 400px; margin: auto;">
       <div class="card-header">
 

<h6 style="color: #c7d04e">Featured Events</56>

</div>
         <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://dabbledoneright-production.s3.amazonaws.com/production/uploads/course/photo/106081/carousel_writing-300x284.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Featured Class</h5>
        <p>Writing Classes.</p>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media.defense.gov/2008/Jun/04/2000611941/2000/2000/0/080529-F-1642J-012.JPG" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Featured Seminar</h5>
        <p>Leadership in Chaos by Col. Owen</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="data:image/png;base64,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" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Featured Event</h5>
        <p>Food Pantry Donation Drive</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>
    </td>
    <td>
       <div class="card" style="width: 400px; height: 400px;">
        <img src="https://digital.library.unt.edu/ark:/67531/metadc443/m1/1/high_res/" class="img-fluid" alt="...">
      </div>
      
    </td>
  </tr>
</table>

  
  
  
  
  
  
  
  

   
   </div.
    
    
  </body>
</html>
