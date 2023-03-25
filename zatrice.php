<form action="" method="get">
    <table class="tbl-30">
        <tr>
            <td>Full name:</td>
            <td>
                <input type="text" name="full_name" id="1" placeholder="Enter your name">
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


<?php 
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Value is: " . $_COOKIE[$cookie_name];
}


//process value from form and save in data base
// check whether the submit button is clicked or not
echo $_GET['username'];
if(isset($_POST["submit"]))
{
// button clicked
// get data from form
$full_name=$_POST['full_name'];
$username=$_POST['username'];
$password=md5($_POST['password']);


}

?>