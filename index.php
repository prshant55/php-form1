<?php
//echo '<p>This is PHP!</p>';
if(isset($_GET[FirstName])){//show feedback
echo $_GET[FirstName];


}else{
echo'//show form
<form action="">
First Name<input text="text" name="FirstName" />
<br />
<input type="submit">
</form>
';
}






?>


