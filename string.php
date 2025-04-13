<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>The main body of a book</title>
    </head>
<body> <?php
        $sentence = "The main body of a book\n";
        echo strtolower ($sentence). "\n";
        echo strtoupper ($sentence) . "\n";
        echo str_replace("book","College" ,$sentence) . "\n";
        echo strlen($sentence) . "\n";
        echo $sentence [4] . "\n";
        
    ?>
</body>
</html>
        