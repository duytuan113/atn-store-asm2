<?php

# Heroku credential 
$host_heroku = "ec2-34-202-54-225.compute-1.amazonaws.com";
$db_heroku = "d42a9cupl6ic2j";
$user_heroku = "wvddlxkifppbxx";
$pw_heroku = "b14ba9b33208ac347a4c375c1094616d408c569d74032801e974a13e19e219f9";
# Create connection to Heroku Postgres
$conn_uri = "postgres://wvddlxkifppbxx:b14ba9b33208ac347a4c375c1094616d408c569d74032801e974a13e19e219f9@ec2-34-202-54-225.compute-1.amazonaws.com:5432/d42a9cupl6ic2j";
$conn = pg_connect($conn_uri);

if (!$conn)
{
  die('Error: Could not connect: ' . pg_last_error());
}
?>