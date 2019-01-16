<?php 
require("conn.php");
include("header.php");

	$sql="select * from items LEFT  JOIN category ON i_category = c_id";
	$query=mysql_query($sql);
?>

<div class="body">
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One -->
          <div class="carousel-item active" style="background-image: url('img/bg1.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Cheap Furniture Stores </h3>
              <p>where we combine the quality of name brand furniture with the pricing of discount warehouse shopping.</p>
            </div>
          </div>
          <!-- Slide Two -->
          <div class="carousel-item" style="background-image: url('img/bg2.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Best Sellers</h3>
              <p>This is a best website by Furniture online.</p>
            </div>
          </div>
          <!-- Slide Three -->
          <div class="carousel-item" style="background-image: url('img/bg3.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Save Money</h3>
              <p>we have the best discount.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <!-- Prduct -->
      <h1 class="my-4">Welcome to Furniture me.</h1>
      
      <!-- start Product Iteam -->
      <div class="row">
        <!-- iteam 1-->
		  
<?php  
	while($result=mysql_fetch_row($query))
	{
	echo "
	<div class='col-lg-4 col-sm-6 portfolio-item'>
          <a href='#'><div class='card h-80'> <img class='card-img-top' src='img/$result[4]' alt=''></a>
            <div class='card-body'>
              <h5 class='card-title'>
                <a href='#'>$result[1]</a>
              </h5>
              <p class='card-text' >Category : <span class='card-Category'>$result[7]</span> </p>
              <p class='card-text'>Price : <span class='card-price'>$result[3] $</span> </p>
			</div>
          </div>
        </div>";
	}
 ?>
        </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
</div>
<?php
include("footer.php");
?>
