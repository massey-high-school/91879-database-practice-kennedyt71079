<!DOCTYPE HTML>

<html lang="en">
    
<?php

    session_start();
    include("config.php");
    
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
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Nice Reading</h1>
        </div>    <!-- / banner -->


        
        <div class="box side">
        
            Side bar / search goes here
            
            <ol>
                <li>List</li>
                <li>Is</li>
                <li>Now</li>
                <li>Created</li>
                <li>yo</li>
            </ol>
            
        </div> <!-- / side bar -->
        
        <div class="box main">
            <h2>Welcome</h2>
            
            <p>
                Reading is one of life's simple pleasures. Please search the database by using the tools in the side bar. Hopefully you will find something that appeals.
            </p>
            
            <p>
                I must confess to having a love of Science Fiction so many of the books that I have reviewed are from that genre. The plan is to add more reviews to this site as time allows.

            </p>
            
            <p>
                If you'd like to suggest a book for review, please feel free to get in touch.
            </p>
            
        </div>    <!-- / main -->
        

        <div class="box footer">
            CC Troy Kennedy 2020
        </div>    <!-- / footer -->
    
    </div>  <!-- / wrapper  -->
    
</body>        
