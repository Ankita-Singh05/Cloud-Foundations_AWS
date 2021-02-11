<style>

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th, tr {
    border: 1px solid #dddddd;
    background-color: yellow;
    text-align: left;
    padding: 0px;
}
}
</style>

<?php
$host="localhost";
$user="root";
$pass="1jx1tvrgRQsV";
$db="covid";
$connect=  mysqli_connect($host,$user,$pass,$db);
?>
<table>
	<tbody>
		<tr>
			<th>date_of_interest</th>
			<th>case_count</th>
      <th>death_count</th>
      <th>hospitalized_count</th>
      <th>case_count_7day_avg_</th>
      <th>hosp_count_7day_avg</th>
      <th>death_count_7day_avg</th>
      <th>bx_case_count</th>
		</tr>


   <?php
    //  $db = new $db();
      $query = "SELECT date_of_interest,case_count,death_count,hospitalized_count,
      case_count_7day_avg_,hosp_count_7day_avg,death_count_7day_avg,bx_case_count
      FROM covid19 where date_of_interest
        BETWEEN '".$_POST['DATE']." 00:00:00' and '".$_POST['DATE']." 23:59:59'
      order by date_of_interest DESC";
    if ( $result = mysqli_query($connect,$query)){
        if(mysqli_num_rows($result) > 0){
    //  $result ->execute();
    //  if ($result->num_rows > 0) {
      //for ($count=0; $val = $result ->fetch(); $count++){
      //$id = $val['covid19'];

  while($row = mysqli_fetch_array($result)){
    ?>
      <br />
      <tr>
      <td> <?php echo  $row['date_of_interest']?> </td>
      <td> <?php echo   $row['case_count'] ?> </td>
      <td> <?php echo   $row['death_count'] ?> </td>
      <td> <?php echo  $row['hospitalized_count'] ?> </td>
      <td> <?php echo  $row['case_count_7day_avg_'] ?> </td>
      <td> <?php echo  $row['hosp_count_7day_avg'] ?> </td>
      <td> <?php echo  $row['death_count_7day_avg'] ?> </td>
      <td> <?php echo  $row['bx_case_count'] ?></td>
 <?php }}	} ?>
   </tr><br />

<?php

if ($connect->query($result) === TRUE) {

echo "Data returned Sucessfully from DB!";}
else {
  echo "Error: " . $result . "<br>" . $connect->error;
}

//$result = mysqli_query($conn, $query) or die("Database error: " . mysqli_error($conn));

$connect->close();
/*
$Date = $_POST['DATE'];
echo $Date;
//search datbase for a particular plan
echo "<h2> The date of interest is $Date </h2>";
$sql = "SELECT date_of_interest,case_count,death_count,hospitalized_count,case_count_7day_avg_,
hosp_count_7day_avg,death_count_7day_avg,bx_case_count FROM covid19 where to_date('MM-DD-YYYY',date_of_interest) =.$Date.";
$result = mysqli_query($connect,$sql);
echo $result;

/*
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Plan ID: " . $row["planID"]. "<br>"."  Plan Name: " . $row["planName"]."<br>". "Membership Rate: " . $row["membershipRate"]. "<br>";
  }
} else {
  echo "0 results";
}

*/
 ?>
