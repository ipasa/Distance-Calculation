<?php
$cityDistance = [
	[  0,  648, 6476, 4000, 648, 6476, 4000, 700],
	[648,    0, 6476, 4000, 648, 6476, 4000, 700],
	[648, 6476,    0, 4000, 648, 6476, 4000, 700],
	[648, 6476, 4000,   0,  648, 6476, 4000, 700],
	[648, 6476, 4000, 648,    0, 6476, 4000, 700],
	[648, 6476, 4000, 648, 6476,    0, 4000, 700],
	[648, 6476, 4000, 648, 6476, 4000,    0, 700],
	[648, 6476, 4000, 648, 6476, 4000,  700,   0]
 ];

$cityDistanceSingleArray = array();

foreach ($cityDistance as $rowNumber => $cityDistanceRow) {
	for ($columnNumber = 0; $columnNumber < count($cityDistanceRow); $columnNumber++) {
		if ($rowNumber>$columnNumber) {
			array_push($cityDistanceSingleArray, $cityDistanceRow[$columnNumber]);
		}
	} 
}

function calculation($row, $column) {
	$cityName = array(
		"Dhaka", 
		"Barisal", 
		"Chittagong", 
		"Khulna",
		"Mymensingh",
		"Rajshahi",
		"Rangpur",
		"Sylhet"
	);

	$rowkey1	= array_search($row, $cityName);
	$columnkey2 = array_search($column, $cityName);

    $result = $rowkey1*($rowkey1-1)/2 + $columnkey2;
    return $result;
}

$arrayIndex = calculation("dhaka", "Sylhet");
echo $cityDistanceSingleArray[$arrayIndex];

//print_r($cityDistanceSingleArray);
//echo $cityDistanceCalculation = $cityDistance[0][1];