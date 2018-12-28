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
	$query = 'SELECT id, name FROM groups';
	$query = 'SELECT groups.name, commands.id, commands.country 
FROM groups 
JOIN commands
on groups.id=commands.id_group';

	$query = 'SELECT * 
	FROM groups, commands
WHERE groups.id= commands.id_group';
	var_dump($query);
	$result = pg_query($conn, $query);
	$row = pg_fetch_all($result);
	echo '<pre>';
	var_dump($row);
	echo '</pre>';
	echo 'группа2: ' . $row[1]['name'];
