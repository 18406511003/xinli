<?php
const HOST = 'localhost';
const USER = 'root';
const PASS = '305290744';
const DBNAME = 'xinli';
$con = mysql_connect(HOST,USER,PASS);
mysql_select_db(DBNAME);
mysql_query('set names utf8');
?>