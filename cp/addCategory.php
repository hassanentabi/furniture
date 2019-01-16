<?php 
session_start();
require("../conn.php");
include("header2.php");
//------------------
if ((!isset($_SESSION['user'])) && (!isset($_SESSION['psw'])))
{
		header('location:../index.php');
}
else{
	$sql="select * from category";
	$query=mysql_query($sql);
	
}
//---------------
if(!isset($_POST['name']))echo '';
else{
$name=$_POST['name'];

	$sql="INSERT INTO category (c_name) VALUES ('$name')";
	
$query=mysql_query($sql);
	
if($query){
	
	$message =" data inserted successfully";
echo "<script type='text/javascript'>alert('$message');</script>";

}else{
	
	$message = " data not inserted Yet <br>";  
	echo "<script type='text/javascript'>alert('$message');</script>";
}
	
	//--- after successed or not 
	header("location:addCategory.php");
	
}

?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Add 
        <small>Category</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Control Panel</a>
        </li>
        <li class="breadcrumb-item active">Add Category</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
            <form action="" method="post">
              <!-- Name Category -->
                <div class="form-group">
                  <label for="NameCategory">Name Category</label>
                  <input name="name" type="text" required="required" class="form-control" id="NameCategory" placeholder="Arm chair" aria-describedby="CategoryHelp">
                  <small id="CategoryHelp" class="form-text text-muted">Enter the category and then add an item</small>
                </div>
              <!-- Submit -->
                <button type="submit" class="btn btn-success">Add New </button>
              </form>
        </div>
        <div class="col-lg-6">

          <h2>All Categories</h2>

          <!--Start table -->
          <table class="table table-striped text-center" >
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
					<th scope="col">Drop</th>
                </tr>
			<?php  
				while($result=mysql_fetch_row($query))
				{
				echo "<tr>";
			echo'<form action="deleCate.php" method="post">';
				for($i=0;$i<count($result);$i++)
					{
						echo "<td>$result[$i]</td>";
					}
			echo "<td><input type='hidden' name='id' value=\"$result[0]\"><input type='submit' value='Delete' class='btn btn-danger btn-sm'></td></tr></form>";
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