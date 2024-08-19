<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h2>PHP Array</h2>
        <?php
        $man = array ("munim","sadia","mim","popi","ritu") ;
        var_dump($man) ;
        ?>

        <h2>PHP Strings</h2>
        <?php
        $c="bangladesh";
        var_dump("i love $c");
        ?>

        <h2>String Length</h2>
        <?php
        echo"mahatab munim = ";
        echo strlen ("mahatab munim") ;
        ?>

        <h2>Word Count</h2>
        <?php 
        $d = "mahatab munim";
        var_dump("mahatab munim = ");
        echo str_word_count ( $d ) ;
        ?>
        <h2>PHP - Modify Strings</h2>
        <h2>Upper Case</h2>
        <?php
        $name="mahatab munim";
        echo strtoupper($name); 
        ?>

        <h2>Lower Case</h2>
        <?php
        echo strtolower($name);
        ?>

        <h2>Replace String</h2>
        <?php 
        echo str_replace ("mahatab","i love","$name") ;
        ?>

        <h2>Reverse a String</h2>
        <?php
        $myname="my is name mahatab munim";
        echo strrev($myname) ;
        ?>

        <h2>Remove Whitespace</h2>
        <?php
        echo trim ($myname) 
        ?>

        <h2>PHP - Concatenate Strings</h2>
        <h2>String Concatenation</h2>
        <?php
        $aa="mahatab";
        $bb="munim";
        $aabb=$aa . " " . $bb ;
        echo $aabb ; 
        ?>

    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>