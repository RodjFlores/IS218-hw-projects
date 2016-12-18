


<?php

class op
{
    public function email($email)
    {

	 if(!filter_var($email, FILTER_VALIDATE_EMAIL))
   		{
     		echo $email." is Invalid Email";
     		
   		}
   		else
   		{	
   			filter_var($email, FILTER_SANITIZE_EMAIL);
   			echo $email." is a valid email";
   		}
	}

	public function cUrl($url)
    {

	 if(!filter_var($url, FILTER_VALIDATE_URL))
   		{
     		echo $url." is Invalid Url";
     		
   		}
   		else
   		{	
   			filter_var($url, FILTER_SANITIZE_URL);
   			echo $url." is a valid url";
   		}
	}

}
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $check = new op();
        $check->email($email);
        
        echo "<br/><br/>";
    }
 
    if (isset($_POST['url'])) {
        $url = $_POST['url'];
        $check = new op();
        $check->cUrl($url);
        
        echo "<br/><br/>";
    }



?>




<form name="form1" method="post" action="hw10.php">
    Email Address: <br/>
    <input type="text" name="email" value="<?php echo $_POST['email']; ?>" size="50"/> <br/><br/>
    Url: <br/>
    <input type="text" name="url" value="<?php echo $_POST['url']; ?>" size="50" /> <br/>
    <br/>
    <input type="submit" />
</form>

