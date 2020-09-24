<!DOCTYPE HTML>

<html lang="en">

<?php

    session_start();
    include("config.php");
    include("functions.php"); // include data sanitising...
    
    // Connect to database...
    
    $dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if(mysqli_connect_errno())
        
    {
        echo "Connection failed:".mysqli_connect_error();
        exit; 
    }
    
?>
    
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Book Review Database">
    <meta name="keywords" content="books, reading, reviews, fiction, non fiction,
                                   genre, database">
    <meta name="author" content="Troy Kennedy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Book Review Database</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/bookstyle.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Home Page">
            <img class="img-circle" src="images/books.jpg" width="150" height="150" alt="logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Nice Reading</h1>
        </div>    <!-- / banner -->


        
        <div class="box side">
        
            <h2>Search | <a class="side" href="show_all.php">Show All</a></h2>
            
            <i>Type part of the title / author name if desired</i>
            
            <hr />
            
            Title search<br />
            Author Serach<br />
            Genre Search<br />
            Rating Search<br />
                
            
        </div> <!-- / side bar -->
        