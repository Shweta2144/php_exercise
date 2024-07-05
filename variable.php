<?php
    
    $stringVar = "Hello, World!";
    $integerVar = 42;
    $floatVar = 3.14;
    $booleanVar = true;
    $stringVar="shweta madalapure";

    
    echo "<h2>String Variable</h2>";
    echo "Value: " . $stringVar . "<br>";
    echo "Type and Value: ";
    var_dump($stringVar);
    echo "<br><br>";

    echo "<h2>Integer Variable</h2>";
    echo "Value: " . $integerVar . "<br>";
    echo "Type and Value: ";
    var_dump($integerVar);
    echo "<br><br>";

    echo "<h2>Float Variable</h2>";
    echo "Value: " . $floatVar . "<br>";
    echo "Type and Value: ";
    var_dump($floatVar);
    echo "<br><br>";

    echo "<h2>Boolean Variable</h2>";
    echo "Value: " . ($booleanVar ? "true" : "false") . "<br>";
    echo "Type and Value: ";
    var_dump($booleanVar);
    echo "<br><br>";

    echo "<h2>integer variable </h2> ";
    echo "value :".$stringVar . "<br>";
    echo "type and value :";
    var_dump($stringVar);
    echo "<br><br>";
    ?>