<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Entry Results</title>
</head>
<body>
    <h1>Book Entry Results</h1>
    <?php
    // TODO 1: Create short variable names.
    $isbn = $_POST['isbn'];
    $author = $_POST['author'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    

    // TODO 2: Check and filter data coming from the user.


    // TODO 3: Setup a connection to the appropriate database.
    include_once "login.php";

    // TODO 4: Query the database.


    // TODO 5: Display the feedback back to user.


    // TODO 6: Disconnecting from the database.
    
    
    if(isset($isbn)&& isset($author)&& isset($title)&& isset($price)){
    $sql = "INSERT into catalogs values('$isbn','$author','$title','$price')";
    $result = $conn->query($sql);
    if(!$result) die('Insert Failed');
    else{
        echo "Success";
        
    }
}
else{
    echo "NULL is in";
}
    $conn->close();
    ?>
</body>
</html>