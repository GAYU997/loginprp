<?php
mysqli_connect('localhost',"root");


if(isset($_POST['submit']))
{
    $name=$_POST['text1'];
    $email=$_POST['text2'];
    $dob=$_POST['text3'];
    $uname=$_POST['text4'];
    $password=$_POST["text5"];
    if($uname!=" "||$email!=" "||$dob!=" "||$uname!=" "||$password!=" ")
    {
        $ins=mysqli_query("insert into login values(''$name','$email','$dob','$uname','$password')");
        echo "yOu have SUCCESSFULLY Registered..";
        echo"<a href=index.php>.$var</a>";
    }
    else
    {
        echo"please enter all the DETAILS|||<a href=register.php>Back</a>";
    }
}
else
{
?>
<center>
<form name="form1" action="register.php" methode="POST">
<h1>REGISTER here</h1>
ENTER YOUR NAME:<input type="text" name="text1" maxlength="50" required/><br/><br/>
E-MAIL ID:<input type="text" name="text2" maxlength="50" required/>
<br/><br/>
DATE OF BIRTH:<input type="text" name="text3" maxlength="50" required/><br/><br/>
USERNAME:<input type="text" name="text4" maxlength="50" required/><br/><br/>
PASSWORD:<input type="text" name="text5" maxlenth="50" required/><br/><br/>
<input type="submit" name="submit" value="submit"/>

</form>
</center>
<?php
}  
?>