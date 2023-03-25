<?php include('partials/menu.php');?>


<div class="main-content">
    <div class="wrapper">
        <h1>Add admin</h1>
        <br>
        <?php 
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];//displaying session message
            unset($_SESSION['add']);//Removing session message
        }
        ?>
        <br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full name:</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter your name">
                    </td>
                </tr>
                <tr>
                    <td>User Name:</td>
                    <td>
                        <input type="text" name="username" placeholder="Enter your username">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="Password" name="password" placeholder="Enter Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add admin" class="btn-secondary">

                    </td>

                </tr>

            </table>
        </form>
    </div>
</div>
<?php include('partials/footer.php')?>


<?php 
//process value from form and save in data base
// check whether the submit button is clicked or not
if(isset($_POST["submit"]))
{
    // button clicked
    // get data from form
$full_name=$_POST['full_name'];
$username=$_POST['username'];
$password=md5($_POST['password']);


//2.SQl Query to save data into database
$sql="INSERT INTO tbl_admin SET 
  full_name='$full_name',
  username='$username',
  password='$password'
  ";
    
 
 //3.execute Query and save Data in Database
  $res= mysqli_query($conn,$sql) or die(mysqli_error());

  //check whether the (Query is executed ) data is inserted or nt and display appropriate message
  if($res==TRUE)
  { //data inserted
    //create session variable to display message
    $_SESSION['add']="Admin added sucessfully";
    //Redrirect page to MAnage admin
    header("location:".SITEURL.'admin/manage-admin.php');
      

  }
  else
  { //data insertion failed
     //create session variable to display message
    $_SESSION['add']="Failed to add Admin";
    //Redrirect page to add admin
    header("location:".SITEURL.'admin/add-admin.php');
      
  }
  
  




}





    

?>