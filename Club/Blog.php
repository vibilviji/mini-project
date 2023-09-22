<?php
include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">
    
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Simple Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        h1 {
            font-size: 2em;
        }
        nav {
            background-color: #444;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav li {
            display: inline;
            margin-right: 20px;
        }
        .blog-post {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }
        textarea {
            height: 150px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Blog</h1>
    </header>
=
    <div class="blog-post">
    <label for="complaint"></label>
        <textarea id="complaint" name="complaint" required></textarea>

        <label for="image">Upload image :</label>
        <input type="file" id="image" name="image" required>
<br><br>
       
        <p></p>
    </div>
   
        <button type="submit">Post Blog</button>
    
    <div class="blog-post">
  


        
    </div>
  
</body>
        
        
    
    <div class="clearfix"> </div>
</div>
</div>
</div>
<?php
include("footer.php");
?>
		
		
