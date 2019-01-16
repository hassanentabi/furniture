<?php 
session_start();
require("../conn.php");
include("header2.php");
if ((!isset($_SESSION['user'])) && (!isset($_SESSION['psw'])))
{
		header('location:../index.php');
}
else{
	
	$sql="select * from feedback";
	$query=mysql_query($sql);
	
}


?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">feedback 
        <small>Mesage</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Control Panel</a>
        </li>
        <li class="breadcrumb-item active">feedback</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
 
        <div class="col-lg-12">

          <h2>All feedback message</h2>

          <!--Start table -->
          <table class="table table-striped text-center" >
					  
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Full Name:</th>
                  <th scope="col">Phone Number:</th>
                  <th scope="col">Email Address:</th>
                  <th scope="col">Message</th>
                </tr>	  		  
				<?php  
					while($result=mysql_fetch_row($query))
					{
					echo "<tr>";

					for($i=0;$i<count($result);$i++)
						{
							echo "<td>$result[$i]</td>";
						}
					echo"</tr>";

					}
				 ?>   
            </table>
          <!--end table -->

        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-12" style="margin-bottom: 150px;">
          
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
<?php
include("../footer.php");
?>