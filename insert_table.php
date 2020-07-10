<?

	include("../dbconfig.php");
	
	$mon12 = $_REQUEST[mon12];
	$mon34 = $_REQUEST[mon34];
	$mon56 = $_REQUEST[mon56];
	$tue12 = $_REQUEST[tue12];
	$tue34 = $_REQUEST[tue34];
	$tue56 = $_REQUEST[tue56];
	$wed12 = $_REQUEST[wed12];
	$wed34 = $_REQUEST[wed34];
	$wed56 = $_REQUEST[wed56];
	$thu12 = $_REQUEST[thu12];
	$thu34 = $_REQUEST[thu34];
	$thu56 = $_REQUEST[thu56];
	$fri12 = $_REQUEST[fri12];
	$fri34 = $_REQUEST[fri34];
	$fri56 = $_REQUEST[fri56];

	$teamname = $_REQUEST[teamname];


	if($teamname){
		$result = mysql_query("insert into schedule set teamname='$teamname',mon12='$mon12' ,mon34='$mon34' ,mon56='$mon56' ,tue12='$tue12' ,tue34='$tue34' ,tue56='$tue56' ,wed12='$wed12' ,wed34='$wed34' ,wed56='$wed56' ,thu12='$thu12' ,thu34='$thu34' ,thu56='$thu56' ,fri12='$fri12' ,fri34='$fri34' ,fri56='$fri56'");
	//	$result = mysql_query("insert into schedule set teamname='$teamname',mon12='$mon12'");
	//	echo $teamname;

	
	}
?>
