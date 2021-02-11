<?php
$host="localhost";
$user="root";
$pass="1jx1tvrgRQsV";
$db="covid";
$connect=  mysqli_connect($host,$user,$pass,$db);
//or die("Database error: " . mysqli_error());
//echo "";
//$selected = mysqli_select_db($connect,"covid")
//or
//die("ERROR:could not connect to the database!!!");

//$result = mysqli_query($connect, $query) or die("Database error: " . mysqli_error($conn));

//read the json file contents
$url = "https://data.cityofnewyork.us/resource/rc75-m7u3.json";

//call api
$json = file_get_contents($url);
$data = json_decode($json, true);

//To display all values from JSON file
/*
foreach ($data as $val) {

$date_of_interest =   $val->date_of_interest;
$case_count= $val->case_count;
$death_count=   $val->death_count;
$hospitalized_count=  $val->hospitalized_count;
$case_count_7day_avg_=  $val->case_count_7day_avg_;
$hosp_count_7day_avg=  $val->hosp_count_7day_avg;
$death_count_7day_avg=  $val->death_count_7day_avg;
$bx_case_count=  $val->bx_case_count;
}
*/

foreach ($data as $val) {
$query="insert into covid19(date_of_interest,case_count,death_count,hospitalized_count,case_count_7day_avg_,
hosp_count_7day_avg,death_count_7day_avg,bx_case_count) values
('".$val["date_of_interest"]."',
'".$val["case_count"]."',
'".$val["death_count"]."',
'".$val["hospitalized_count"]."',
'".$val["case_count_7day_avg_"]."',
'".$val["hosp_count_7day_avg"]."' ,
'".$val["death_count_7day_avg"]."' ,
'".$val["bx_case_count"]."')";

mysqli_query($connect,$query);
}  //  mysqli_stmt_execute($query);


//Execute Mutliple query
/*
if(!mysql_query($query,$connect))

 { die('Error : Query Not Executed. Please Fix the Issue! ' . mysql_error()); }

else

{ echo "Data Inserted Successully!!!"; }

*/

if ($connect->multi_query($query) === TRUE) {

echo "Data Imported Sucessfully from JSON!";}
else {
  echo "Error: " . $query . "<br>" . $connect->error;
}

//$result = mysqli_query($conn, $query) or die("Database error: " . mysqli_error($conn));

$connect->close();


?>
