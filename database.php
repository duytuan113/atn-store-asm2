<?php

# Heroku credential 
$host_heroku = "ec2-174-129-225-160.compute-1.amazonaws.com";
$db_heroku = "dchnqbvo4vptrj";
$user_heroku = "wlkypelokpcxzh";
$pw_heroku = "08908a46a3e984d5f49f6c7f812c0f52b5bdd8fc619660b48c1d2f220e54c1ac";
# Create connection to Heroku Postgres
$conn_uri = "postgres://wlkypelokpcxzh:08908a46a3e984d5f49f6c7f812c0f52b5bdd8fc619660b48c1d2f220e54c1ac@ec2-174-129-225-160.compute-1.amazonaws.com:5432/dchnqbvo4vptrj";
$conn = pg_connect($conn_uri);

if (!$conn)
{
  die('Error: Could not connect: ' . pg_last_error());
}
?>