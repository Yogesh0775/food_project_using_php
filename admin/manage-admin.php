<?php include( 'partials/menu.php');   ?>

<!-- main section starts -->
<div class="main">
    <div class="wrapper">
        <h1>Manage Admin</h1>

        <br>
        <?php 
        if(isset($_SESSION['add']))
        { 
            echo $_SESSION['add'];//displaying session message
            unset($_SESSION['add']);//Removing session message
        }
        ?>
        <br><br>

        <!-- button to Add admin -->
        <a href="add-admin.php" class="btn-primary">Add admin</a>
        <br> <br>


        <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>Username</th>
                <th id="padd">Action</th>
            </tr>
            <?php 
            //Query to get all admin
            $sql="SELECT * FROM tbl_admin";
            //execute query
            $res= mysqli_query($conn,$sql) ;
            //check if query is executed
            if($res==TRUE)
            { $sn=1;
                //count rows to ensure data in data base
                $rows=mysqli_num_rows($res);//function to get all the rows in database
                if($rows>0)
                {
                    while($rows=mysqli_fetch_assoc($res))
                    {
                        // using while loop to get all data in database

                        //get individual data
                        $id=$rows['id'];
                        $full_name=$rows['full_name'];
                        $username=$rows['username'];
                        //display the value in table
                        ?> <tr>
                <td><?php echo   $sn++; ?></td>
                <td><?php echo   $full_name; ?></td>
                <td><?php echo   $username; ?></td>
                <td>
                    <a href="#" class="btn-secondary">Update admin</a>
                    <a href="#" class="btn-danger">Delete admin</a>
                </td>
            </tr>

            <?php
                    }

                }
                else
                {

                }
            }
            
            
            
            ?>
        </table>


    </div>
</div>

<!-- main section ends -->

<?php include( 'partials/footer.php');   ?>