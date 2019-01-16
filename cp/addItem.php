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
	$sql="select * from items";
	$query1=mysql_query($sql);
}

//---------------
if(
	!isset($_POST['fname']) ||
	!isset($_POST['fdescription']) ||
	!isset($_POST['fprice']) || 
	!isset($_POST['fcategory'])) {echo '';}
else{
//---------------
$name=$_POST['fname'];
$description=$_POST['fdescription'];
$price=$_POST['fprice'];
$category=$_POST['fcategory'];
	
//---------------	
	
$filepath=pathinfo($_FILES['file']['name'])	;
$extension=$filepath['extension'];
	
$iname=	date('H-i-s').'.'.$extension;
$path='../img/'.$iname;
move_uploaded_file($_FILES['file']['tmp_name'],$path);

	
//---------------
	
$sqlInsert ="INSERT INTO items (`i_name` , `i_description` , `i_price` , `i_img` , `i_category`) VALUES ('$name' , '$description' , '$price' , '$iname' , '$category')";	
	
	
$quaryInsert=mysql_query($sqlInsert);
	

	//--- after successed or not 
	header("location:addItem.php");
	
}

?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Add 
        <small>item</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Control Panel</a>
        </li>
        <li class="breadcrumb-item active">Add items</li>
      </ol>

      <!-- start div form  -->
      <div class="row">
        

              <div class="col-lg-6 col-md-6">
	<!-- ------- start  form -------- -->

             <form action="addItem.php" method="post" enctype="multipart/form-data">
 
                <!-- Name  -->
                  <div class="form-group">
                    <label for="Nameitem">Name</label>
                    <input name="fname" type="text" required="required" class="form-control" id="Nameitem"  placeholder="chair">
                  </div>

                <!-- Description  -->
                <div class="form-group">
                    <label for="Descriptionitem">Description</label>
                    <input name="fdescription" type="text" required="required" class="form-control" id="Descriptionitem" placeholder="made from china">
                  </div>

                  <!-- price  -->
                <div class="form-group">
                    <label for="priceitem">price</label>
                    <input name="fprice" type="text" required="required" class="form-control" id="priceitem"  placeholder=" 98.9 $">
                  </div>
              </div>

              <div class="col-lg-6 col-md-6">

                  <!-- Category  -->
                  <div class="form-group">
                      <label for="Categoryitem">Category</label>
                      <input name="fcategory" type="text" required="required" class="form-control" id="Categoryitem"  placeholder="Arm chair">
                    </div>

                  <!-- File  -->
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                      </div>
                      
                  <!-- Submit -->
                    <button type="submit" class="btn btn-success ">Add New </button>

                  </form>
              </div>
      </div>
     <!-- end div form  -->


      <!-- /.row -->
      <div class="row">
        <div class="col-lg-12" style="margin-top: 50px; margin-bottom: 50px;">
          
            <h2>All items</h2>

            <!--Start table -->
            <table class="table table-striped text-center"  >
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
					<th scope="col">Image</th>
					 <th scope="col">Drop</th>
                  </tr>
<?php  
	while($result=mysql_fetch_row($query1))
	{	
	echo'<tr><form action="deleItem.php" method="post">';
		echo "<td>$result[0]</td>";
		echo "<td>$result[1]</td>";
		echo "<td>$result[2]</td>";
		echo "<td style='color:red;'>$result[3] $</span> </td>";
		echo "<td>$result[5]</td>";
		echo "<td><img src='../img/$result[4]' width='100px'></td>";
	echo "<td><input type='hidden' name='id' value=\"$result[0]\"><input type='submit' value='Delete' class='btn btn-danger btn-sm'></td></tr></form>";

	}
 ?> 
              </table>
            <!--end table -->

        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

<?php
include("../footer.php")
?>
