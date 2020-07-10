
<?
	
	include("../dbconfig.php");

	$teamname = $_REQUEST[teamname];
	$id=$_REQUEST[id];
	if($teamname){
		$result = mysql_query("insert into teamproject set teamname='$teamname',avgprogress='$avgprogress',due='$due'");
	}

	$result = mysql_query("select * from member where id=$id");
	
	//xml 
	$xml_code = "";
	$xml_code = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";  //xml

	$xml_code .="<node>\n";	

	while($row = mysql_fetch_array($result)){
		$xml_code .="<teamproject>";
		$xml_code .="<teamname>";
		$xml_code .="{$row[teamname]}";
		$xml_code .="</teamname>\n";

		$xml_code .="</teamproject>\n";
	}
	$xml_code .="</node>\n";

	$dir_name="success.xml";
	file_put_contents($dir_name,$xml_code); 
	
	echo $xml_code;
	
?>