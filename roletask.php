
<?

	include("../dbconfig.php");

	$id = $_REQUEST[id];
	$teamname = $_REQUEST[teamname];
	$name = $_REQUEST[name];
	$role = $_REQUEST[role];
	$task = $_REQUEST[task];

	if($id){
		$result = mysql_query("update member set name='$name', role='$role',task='$task' where id='$id' and teamname='$teamname'");
	}
	echo $id;
	$result = mysql_query("select * from member");
	
	//xml 
	$xml_code = "";
	$xml_code = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";  //xml

	$xml_code .="<node>\n";	

	while($row = mysql_fetch_array($result)){
		$xml_code .="<member>";
		$xml_code .="<name>";
		$xml_code .="{$row[name]}";
		$xml_code .="</name>\n"
		;
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