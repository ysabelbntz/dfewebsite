<? 

 session_start();

include("fauthorization.php");

if(!authorized())
{
	print 'Not authorized to access the page';
	exit;
}
else{
	return true;
}


?>