<html>
    <head>
    </head>
<body>
<div> <h3>Top rated Products in Market Place <h3> </div>
<div>
	<table border="1">
		<tr>
			<th> Product Name </th>
			<th> Company </th>
			<th> Rating </th>
		</tr>
<?php
$allProducts = [];
$count = 0;
$ch = curl_init('http://www.akshyakrishnan.com/exposeTopRated.php');
curl_setopt($ch, CURLOPT_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec ($ch);
curl_close ($ch);
// echo '<pre>';
// print_r(json_decode($contents, true));
// echo '</pre>';
// echo json_decode($contents, true);
$data = json_decode($contents, true);
foreach ($data as $value) {
        array_push($value, 'LittleTreats');
 	$allProducts[$count] = $value;
        $count += 1;
 }

$ch = curl_init('http://www.singhparul.com/products/avgRating.php');
curl_setopt($ch, CURLOPT_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec ($ch);
curl_close ($ch);
//echo '<pre>';
//print_r(json_decode($contents, true));
//echo '</pre>';
// echo json_decode($contents, true);
$data = json_decode($contents, true);
foreach ($data as $value) {
        array_push($value, 'Skin Care Products');
 	$allProducts[$count] = $value;
        $count += 1;
 }

$ch = curl_init('http://www.yi-playground.com/avgRating.php');
curl_setopt($ch, CURLOPT_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec ($ch);
curl_close ($ch);
//echo '<pre>';
//print_r(json_decode($contents, true));
//echo '</pre>';
// echo json_decode($contents, true);
$data = json_decode($contents, true);
foreach ($data as $value) {
        array_push($value, 'Bread & sweets');
 	$allProducts[$count] = $value;
        $count += 1;
 }

usort($allProducts,function($first,$second){
    return $first[1] < $second[1];
});

$ch = curl_init('http://dzaivc.com/avgRating.php');
curl_setopt($ch, CURLOPT_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec ($ch);
curl_close ($ch);
//echo '<pre>';
//print_r(json_decode($contents, true));
//echo '</pre>';
// echo json_decode($contents, true);
$data = json_decode($contents, true);
foreach ($data as $value) {
        array_push($value, 'Homebody Hut');
 	$allProducts[$count] = $value;
        $count += 1;
 }

usort($allProducts,function($first,$second){
    return $first[1] < $second[1];
});

for ($i = 0; $i < 5; $i++) {
	 echo "<tr><td><a href=\"" . $allProducts[$i][4] . "\">" . $allProducts[$i][0] . "</a></td><td>" . $allProducts[$i][5] . "</td><td>" . $allProducts[$i][1] . "</td></tr>";
}
?>
</table>
   <div style="height: 1rem"></div>
   <div class="container"><a class="btn btn-primary" href="https://dzaivc.com/mainhomepage.php">Return to home page</a></div>
</div>
</body>
</html>