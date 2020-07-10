
<?

	include("../dbconfig.php");

	$id = $_REQUEST[id];
	$role = $_REQUEST[role];
	$task = $_REQUEST[task];

	if($id){
		$result = mysql_query("insert into member set id='$id'");
	}
	echo $id;
	$result = mysql_query("select * from member");
	
	//xml 
	$xml_code = "";
	$xml_code = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";  //xml

	$xml_code .="<node>\n";	

	while($row = mysql_fetch_array($result)){
		$xml_code .="<member>";
		$xml_code .="<role>";
		$xml_code .="{$row[role]}";
		$xml_code .="</role>\n";

		$xml_code .="<task>";
		$xml_code .="{$row[task]}";
		$xml_code .="</task>\n";
		$xml_code .="</member>\n";
	}
	$xml_code .="</node>\n";

	$dir_name="testmem.xml";
	file_put_contents($dir_name,$xml_code); 
	
	echo $xml_code;
	
?>
