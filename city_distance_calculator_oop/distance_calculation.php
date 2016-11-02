<?php

/**
* Calculating Distance Between Two Cities
*/
class City 
{
	private $cities;
	public function __construct($cities)
	{
		$this->cities = $cities;
	}

	public function getAll()
	{
		return $this->cities;
	}

	public function getIndex($value)
	{
		return array_search($value, $this->cities);
	}
}

class DistanceCalculation
{
	private $cityDistance;
	private $city;
	private $cityDistanceSingleArray;

	public function __construct($distance, City $city)
	{
		$this->cityDistance = $distance;
		$this->cityDistanceSingleArray = [];
		$this->makeTriangularArray();
		$this->city = $city;
	}

	private function makeTriangularArray()
	{
		foreach ($this->cityDistance as $rowNumber => $cityDistanceRow) {
			for ($columnNumber = 0; $columnNumber < count($cityDistanceRow); $columnNumber++) {
				if ($rowNumber>$columnNumber) {
					array_push($this->cityDistanceSingleArray, $cityDistanceRow[$columnNumber]);
				}
			} 
		}
	}

	private function calculateIndex($row, $column) 
	{
		$rowkey1	= $this->city->getIndex($row);
		$columnkey2 = $this->city->getIndex($column);
	    return ( $rowkey1 * ( $rowkey1 - 1 ) /2 ) + $columnkey2;
	}

	public function calculate($row, $column) 
	{
	    return $this->cityDistanceSingleArray[$this->calculateIndex($row, $column)];
	}
}


$cityDistance  = [
	[  0, 648, 646, 654, 648, 987, 235, 123],
	[277,   0, 476, 345, 648, 678, 463, 222],
	[229, 500,   0, 234, 648, 567, 456, 345],
	[300, 476, 400,   0, 648, 456, 456, 456],
	[340, 345, 256, 648,   0, 345, 456, 345],
	[450, 345, 456, 648, 646,   0, 456, 456],
	[480, 646, 123, 648, 676, 566,   0, 234],
	[648, 676, 456, 648, 456, 654, 700,   0]
];

$cityName = [
	"Dhaka", 
	"Barisal", 
	"Chittagong", 
	"Khulna",
	"Mymensingh",
	"Rajshahi",
	"Rangpur",
	"Sylhet"
];

$distance 	= new DistanceCalculation($cityDistance, new City($cityName));
echo $distance->calculate("Sylhet", "Rajshahi");
