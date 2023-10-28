<?php
include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">
    

    <header>
        <h1>Blog</h1>
    </header>

<form action="clubblog.php" method="post"  enctype="multipart/form-data">
    <div class="blog-post">
    <label for="blog"></label>
        <textarea class="form-control" id="blog" name="blog" required></textarea>

        <label for="image">Upload image :</label>
        <input type="file" id="image" name="filetoupload" required>
<br><br>

   
        <button class="btn btn-primary" type="submit">Post Blog</button>
    
    <div class="blog-post">
    </form>


        
    </div>
  

        
        
    
    <div class="clearfix"> </div>
</div>
</div>
</div>
<?php
include("footer.php");
?>