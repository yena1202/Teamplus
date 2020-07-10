<head>
<meta http-equiv="content-Type" content="text/html" charset="utf-8"/>
</head>
<?
	include("../dbconfig.php");  //DB연결을 위한 dbconfig.php를 로드

	$id = $_REQUEST[id];
	
	$result = mysql_query("select * from teamproject");
	
	// xml
	$xml_code = "";
	$xml_code = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n";  //xml

	$xml_code .="<node>\n";	

	while($row = mysql_fetch_array($result)){
		$xml_code .="<teamproject>";
		$xml_code .="<teamname>";
		$xml_code .="{$row[teamname]}";
		$xml_code .="</teamname>\n";

		$xml_code .="<avgprogress>";
		$xml_code .="{$row[avgprogress]}";
		$xml_code .="</avgprogress>\n";

		$xml_code .="<team_mem>";
		$xml_code .="{$row[team_mem]}";
		$xml_code .="</team_mem>\n";

		$xml_code .="<due>";
		$xml_code .="{$row[due]}";
		$xml_code .="</due>\n";
		$xml_code .="</teamproject>\n";
	}
	$xml_code .="</node>\n";

	$dir_name="teamxml.xml";
	file_put_contents($dir_name,$xml_code); 

	echo $xml_code;
?>
