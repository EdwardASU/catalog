<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Search Results</title>
</head>
<body>
    <h1>Book Search Results</h1>
    <?php
    
    // TODO 1: Create short variable names.
    $type = $_POST['searchtype'];
    $term = $_POST['searchterm'];
    // TODO 2: Check and filter data coming from the user.


    // TODO 3: Setup a connection to the appropriate database.
    include_once "login.php";

    // TODO 4: Query the database.
    if(isset($type) &&isset($term)){
        $sql = "SELECT * from catalogs where $type like '%$term%'";
        $result = $conn->query($sql);
    if (!$result){
        die('Fatal error');
        }
    $rows = $result->num_rows;
        for ($j = 0 ; $j < $rows; ++$j)
        {
    $row = $result->fetch_array(MYSQLI_ASSOC);
        echo 'ISBN:' . htmlspecialchars($row['isbn']).'<br>';
    
        echo 'Author:' . htmlspecialchars($row['author']).'<br>';
    
        echo 'Title:' . htmlspecialchars($row['title']).'<br>';
    
        echo 'Price:' . htmlspecialchars($row['price']).'<br><br>';
    
        }
            }

    // TODO 5: Retrieve the results.


    // TODO 6: Display the results back to user.


    // TODO 7: Disconnecting from the database.
    $conn->close();
    ?>
</body>
</html>