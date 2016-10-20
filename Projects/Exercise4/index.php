<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>

    <h1>Einfache Tetausgabe mit echo fresh</h1>

    <h2>Hello</h2>

    <?php echo "<h2>Hello World 1!</h2>"; ?>

    <h2>
      <?php echo "Hello World 2!"; ?>
    </h2>

    <h2>
      <?php echo "Hello"; ?>
      <?php echo "World 2!</h2>"; ?>

    <h2>
      <?php echo 'Hello "World" 3!'; // As it is -> als plain text ?>
    </h2>

    <h1>Textausgabe mit echo und Variablen</h1>

    <?php
    $myString1 = "Hello, ";
    $myString2 = "World!";
    $myInt1 = 12;
    $my_Int2 = 234;

    echo "<p>String1: ".$myString1."</p>";
    echo "<p>String1 und String2: ".$myString1.$myString2."</p>";

    echo "<p>String1: $myString1</p>";
    echo "<p>String1 und String2: $myString1 $myString2</p>";

    echo "<p style=\"color: tomato\">String1: $myString1</p>"; // \ on mac: shift + alt + 7

    echo '<p style="color: tomato">String1: $myString1</p>'; // As it is -> als plain text

    echo '<p style="color: tomato">String1:'.$myString1.'</p>';

    ?>

  </body>
</html>
