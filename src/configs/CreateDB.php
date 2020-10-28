<?php 
include('config.php'); 
//create connection
$conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password); 
if (!$conn) {
	die('Connection failed: ' . mysqli_connect_error()); 
}
echo "Connected Successfully\n"; 


//create database
$q = 'CREATE DATABASE movie_reviews'; 
$isCreated = mysqli_query($conn,$q); 
if (!$isCreated) {
	die("Error creating database " . mysqli_error($conn) ."\n"); 
	mysqli_close($conn); 
}
echo "Database is created successfully\n"; 
mysqli_select_db( $conn, 'movie_reviews'); 

//create tables
$qt1 = 'CREATE TABLE genre(
id INT(5) PRIMARY KEY,
genrename VARCHAR(30) NOT NULL)'; 

$qt2 = 'CREATE TABLE reviews(
genreid INT(5), 
title VARCHAR(50), 
review VARCHAR(200), 
FOREIGN KEY(genreid) REFERENCES genre(id))'; 

//query database
$genre = mysqli_query($conn, $qt1); 
$review = mysqli_query($conn, $qt2); 

if (!$genre & !$review) {
	echo "Error creating tables: " . mysqli_error($conn); 
} else {
	echo " Tables created sucessfuly"; 
} 
