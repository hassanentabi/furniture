<?php
session_start();
require("conn.php");
include("header.php");

if((!isset($_POST['user'])) && (!isset($_POST['psw']))){echo '';}
else
{
	$user=$_POST['user'];
	$psw=$_POST['psw'];
	
	$sql=mysql_query("select * from admin where a_username='$user' and  a_password='$psw' ");
	if(mysql_num_rows($sql)==1){
	$rows=mysql_fetch_row($sql);
		
		$_SESSION['user']=$rows[1];
		$_SESSION['psw']=$rows[2];
		
		header('location:cp/addCategory.php');
		
	}else{
		
		$message = "username or password is not correct";
		echo "<script type='text/javascript'>alert('$message');</script>";

	}
		
}

?>


<div class="body2">
	<div class="DivCover">
		    <!-- Page Content -->
    <div class="container">

        <body class="text-center">
            <form class="form-signin" action="" method="post">

              <h1 class="h3 mb-3 font-weight-normal text-center" style="color:white"> Please sign in</h1>
              <label for="inputEmail" class="sr-only">Username</label>

              <input type="text" id="inputEmail" name="user" class="form-control" placeholder="Username" required="" autofocus="">
              <label for="inputPassword" class="sr-only">Password</label>

              <input type="password" id="inputPassword" name="psw" class="form-control" placeholder="Password" required="">
              
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"><span style="color:white" >  Remember me</span> 
                </label>
              </div>
              
              <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
            </form>
 
    </div>
    <!-- /.container -->
	</div>
</div>
<?php
include("footer.php");
?>
