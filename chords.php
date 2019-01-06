<?php
//Replace connection info appropriately for your own DB
    $foo = $_POST['notes'];
    // do stuff with params
    $myArray = explode(',', $foo);
    //echo $myArray[0];

$rootnote = $myArray[0] OR $myArray[5] ;
$thirdnote = $myArray[2] OR $myArray[4] ;
$fifthnote = $myArray[1] OR $myArray[3] ;

//$servername = "???";
//$username = "???";
//$password = "???";
//$dbname = "DBNAME";
// Create connection

//echo $rootnote;
//echo $thirdnote;
//echo $fifthnote;

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{
  //echo "Connection successful!";
}

$sql = "SELECT chord FROM chord_name WHERE root = '$rootnote' && third = '$thirdnote' && fifth = '$fifthnote'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
  //  echo $result;
    while($row = mysqli_fetch_assoc($result)) {
        echo "chord: " . $row["chord"] ."<br>";

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
/*
$firstnote = $myArray[0];

SELECT chord FROM table WHERE*/

?>
