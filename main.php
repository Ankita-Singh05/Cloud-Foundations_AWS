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

$url = "https://data.cityofnewyork.us/resource/rc75-m7u3.json";

//call api
$json = file_get_contents($url);
$data = json_decode($json);

//echo $data[0]->date_of_interest; ?>


<?php
foreach ($data as $val) {?>
<tr>
<td> <?php echo   $val->date_of_interest; ?> </td>
<td> <?php echo   $val->case_count; ?> </td>
<td> <?php echo   $val->death_count; ?> </td>
<td> <?php echo  $val->hospitalized_count; ?> </td>
<td> <?php echo  $val->case_count_7day_avg_; ?> </td>
<td> <?php echo  $val->hosp_count_7day_avg; ?> </td>
<td> <?php echo  $val->death_count_7day_avg; ?> </td>
<td> <?php echo  $val->bx_case_count;}
//echo $bx_case_count = $val->bx_case_count. '<br>'; ?>
</td>
</tr>
</tbody>
</table>


<?php
/*
echo "$date_of_interest";
echo "$case_count";
echo "$death_count";
echo "$hospitalized_count";
echo "$case_count_7day_avg_";
echo "$hosp_count_7day_avg";
echo "$death_count_7day_avg";
echo "$bx_case_count";
*/

?>
