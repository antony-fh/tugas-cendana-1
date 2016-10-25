<?php
	$datakota = '{
		"datakota" :[
			{
				"id" : "1",
				"nama" : "Malang"
			},
			{
				"id" : "2",
				"nama" : "Nganjuk"
			},
			{
				"id" : "3",
				"nama" : "Blitar"
			},
			{
				"id" : "4",
				"nama" : "Tulungagung"
			}
		]
	}';

echo "<pre>";
$datakotaObject = json_decode($datakota);
print_r($datakotaObject);
echo $datakotaObject->datakota[0]->id;
?>