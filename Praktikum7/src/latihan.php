<html>
<?php
    $books = array(
        "name"=>"PHP For Beginner",
        "price"=>5.5,
        "qty"=>15,
        "author"=>"Virgiawan Sanria",
    );
    echo "Name : ".$books["name"];
    echo "<br>";
    echo "price : ".$books["price"];
    $animals = ["Lion", "Tiger", "Crocodile", "Cat", "Dog"];
    echo "<br>";
    foreach ($animals as $animal) {
    echo "$animal <br>";
    }
?>
</html>
