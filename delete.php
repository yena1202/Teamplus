<?

	include("../dbconfig.php");
	//mysql_set_charset($mydb,'utf8');

	$teamname = $_REQUEST[teamname];

	if($teamname){
		$result = mysql_query("delete from teamproject where teamname='$teamname'");
		$result = mysql_query("delete from member where teamname='$teamname'");
		echo $teamNo;
	}
?>
