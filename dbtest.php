<?php
# Code from https://gist.github.com/chales/11359952
# Fill our vars and run on cli
# $ php -f db-connect-test.php
/*
$dbname = 'test';
$dbuser = 'root';
$dbpass = 'moodle';
$dbhost = 'moodle_db';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($connect,$dbname) or die("Could not open the db '$dbname'".mysqli_error($connect));

------------------esto no lo descomentes---------------------------
$test_query = "SHOW TABLES FROM $dbname";
echo $test_query;
$result = mysqli_query($test_query);
$tblCnt = 0;
$fila2 = array();
while($tbl = mysqli_fetch_array($result)) {
  //$tblCnt++;
  $fila2[$tblCnt]= $tbl[$tblCnt]."<br />\n";
  $tblCnt++;
  echo $tblCnt;
}
print_r($fila2);
------------------------------------------------
$query = "SELECT * FROM tabla";
echo $query;
echo "<br/> \n";
$resultDos = mysqli_query($connect,$query);

$fila = array();

$i=0;
while($row = mysqli_fetch_array($resultDos)){
  echo $i;
  $fila[$i] = $row;
  $i++;
}

for ($j=0; $j < $i; $j++) { 
	for ($k=0; $k < 4 ; $k++) { 
		echo $fila[$j][$k]."...";
	}
	echo "<br/> \n";
}
*/
phpinfo();

