<?phpcredits()
session_start();
if(!isset($_SESSION['email'])){
	header("location:login_page.php")
}

?>