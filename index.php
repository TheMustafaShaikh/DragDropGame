<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="fruits">
        
    </div>

    <div class="drop">
       
    </div>

    <div id="score"></div>
    <div id="timer"></div>


    <?php
    
    $con = mysqli_connect("localhost","root","","task1");
        if(isset($_GET['score'])){
            $name = $_GET['name'];
            $score = $_GET['score'];

            $query = "insert into scoreboard values ('$name','$score')";
            $result = mysqli_query($con,$query);
        }
        

        echo "<h4> Top 10 score </h4>";
        $query1 = "select * from scoreboard order by score desc limit 10";
        $result1 = mysqli_query($con,$query1);
        while($row = mysqli_fetch_assoc($result1)){
            $name = $row['name'];
            $score = $row['score'];

            echo "<p> name: $name : score: $score";
        }

    
    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- Also include jQueryUI -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    


</body>

</html>