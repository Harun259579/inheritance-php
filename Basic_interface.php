<?php
//interface ta hocca akta cotract jkhane methode declear thakbe but implementation thakbe na,construct thakbe na,akadin class extends kora jay. implements diye inherit kora hoy

interface webapp
{
	public function login($email,$pass);
	public function register($email,$user,$pass);
	public function logout();
}

class Myclass implements webapp
{
	public function login($email,$pass)
	{
		echo "Logged in User With "." ".$email."<br>";

	}
	public function register($email,$user,$pass)
	{
		echo"User Registration Succesfull With "." ".$email." and User Name ".$user."<br>";
	}

	public function logout()
	{
		echo"User Logged Out";
	}

}


$obj=new Myclass();
$obj->register("abrar123@gmail.com","Abrar",1234);
//$obj->login("abrar123@gmail.com",1234);
//$obj->logout();

?>

<script>
	setTimeout(()=>{

		document.write('<?php $obj->login("abrar123@gmail.com",1234);?>');
	},5000);
</script>