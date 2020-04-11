

<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    </head>
    <Style>
        section{
            font-size:2em;
            width:50%;
            margin-left:20%;
            margin-right:20%;
        }
        .card-header{
            background-color: teal;
            color:white;
        }
        .card-footer{
            background-color: teal;
            color:white;
        }
        .btn{
            background-color: teal;
            color:white;
        }
    </Style>
<body>
<section>

<div class="card text-center">
  <div class="card-header">
    TEAM FOOBAA
  </div>
  <div class="card-body" style="">
      <?php
       session_start();
       if ( isset($_SESSION['email'])) {
            echo "<h2 class='card-title'>Welcome </h2>". $_SESSION['name'] ;
            echo "<p class='card-text'>You have successfully Login to Team Foobaa Homepage.</p>";
            echo "<a href='register.html' class='btn'>Back</a>";
            echo "</div>";
            echo "<div class='card-footer'>";
            echo "Your Email Address is " . " " . $_SESSION['email'];
            echo "</div>";
            echo "</div>";
        }
       session_destroy();
?>
   <a href = "login.html" class="btn" style="color:white">Login</a>
    <a href = "logout.php" class="btn" style="color:white">Logout</a>

</section>
</body>
</html>