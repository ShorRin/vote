<?php
    header('Access-Control-Allow-Origin:*');

    
        $servername = "localhost";
        $username = "root";
        $password = "csl13773021518";
        $dbname = "voteDB";
    
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $index = $_REQUEST["index"];
        $param = $_REQUEST["prof"];
	
	if($param == "delete"){
	$sql = "DELETE FROM votes WHERE vote_id = $index";
	$result = $conn -> query($sql);
		if($result === TRUE){
			echo "dsucceed";
		}
	} else {
        $sql = "UPDATE votes SET $param = $param + 1 WHERE vote_id = $index";
        $result = $conn -> query($sql);
        
        if($result === TRUE){
            echo "succeed";
        }
	}
        $conn -> close();
?>
