<?php
include("header.php");
?>
<div id="page-wrapper">
    <div class="main-page">
    
    




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Page</title>
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
        form {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
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
        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Complaint Page</h1>
    </header>
    <form action="#" method="post">
      

        <label for="subject">subject:</label>
        <input type="text" id="subject" name="subject" required>

        
<label for="complaint">Complaint:</label>
        <textarea id="complaint" name="complaint" required></textarea>

     
        <button type="submit">Submit Complaint</button>
    </form>
  
</body>

        
        
    
    <div class="clearfix"> </div>
</div>
</div>
</div>
<?php
include("footer.php");
?>
		
		
