<?php
	/**
	 * Created by PhpStorm.
	 * User: Lavryniuk Andrii
	 * Date: 28.12.2018
	 * Time: 9:21
	 */
	echo 'football';
	$conn = pg_connect('host=localhost port=5432 dbname=football user=postgres password=qwas') or die('Error: ' . pg_errormessage($conn));
	var_dump($conn);
	echo 'Yes! Connected!';