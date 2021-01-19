<?php
session_start();

 if(isset($_SESSION['name'])){
     $name = $_SESSION['name'];
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="login_style.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <script >
        $(document).ready(function(){
            alert("your are contecting to ower web site have fun");
        });
    </script>
</head>
<body>
    <h1>welcome <?php echo $name ?></h1>

    
</body>
</html>
