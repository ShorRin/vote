<?php
    header('Access-Control-Allow-Origin:*');

    if($_REQUEST["prof"] == "update"){
        $servername = "localhost";
        $username = "root";
        $password = "csl13773021518";
        $dbname = "voteDB";
    
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
        $sql = "SELECT * from votes";
        $result = $conn -> query($sql);
        

        $end = "";
        if($result -> num_rows > 0){
            while($row = $result ->fetch_assoc()){
                $end = $end.$row["vote_id"].",".$row["vote_name"].",".$row["support"].",".$row["reject"].",".$row["giveup"].";";
            }
            echo $end;
        } 
        $conn -> close();
    } else{
        $name = $_REQUEST["name"];
        $servername = "localhost";
        $username = "root";
        $password = "csl13773021518";
        $dbname = "voteDB";
    
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
        $sql = "INSERT INTO votes (vote_name, support, reject, giveup) VALUES ('$name', '0', '0', '0')";
        $result = $conn -> query($sql);
        $conn -> close();
        echo "succeed";
    }
?>
