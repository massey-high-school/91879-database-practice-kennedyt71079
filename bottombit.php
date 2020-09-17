<div class="box side">
    
    <h3>Search | <a class ="side" href="show_all.php">Show All</a>
    </h3>
    
    <i>Type part of the title / Author name and then search</i>

    <hr /> 
    
    <!-- Start of Title Search -->
    
    <form method="post" action="title_search.php" 
    enctype="multipart/form-data">
        
        <input class="search" type="text" name ="title" size="40" value=""
        required placeholder="Title..." />
        
        <input class="submit" type="submit" name="find_title"
               value="Search"/>
    
    </form>
    
    <!-- end of Title Search -->
    
        
    <!-- Start of author Search -->
    
    <form method="post" action="author_search.php" 
    enctype="multipart/form-data">
        
        <input class="search" type="text" name ="author" size="40" value=""
        required placeholder="author..." />
        
        <input class="submit" type="submit" name="find_author"
               value="Search"/>
    
    </form>
    
    <!-- end of author Search -->
    
    <hr />
    <!-- Start of Author Search -->
    Author Search <br />
    <!-- end of Author Search -->
    
    <!-- Start of Genre Search -->
    Genre Search <br />
    <!-- End of Genre Search-->
    
    <!-- Start of Rating Search -->
    Rating Search
    <!-- End of rating Search -->
    
</div>  <!-- / side box -->
    
<div class="box footer">
    CC Troy Kennedy 2020
</div>    <!-- / footer -->
    
</div>  <!-- / wrapper  -->    

</body>    
