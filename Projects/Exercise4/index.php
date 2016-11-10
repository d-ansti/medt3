<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test</title>
  </head>
  <body>

    <h1>Einfache Textausgabe mit echo</h1>

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

    <h1>Kontrollstrukturen</h1>
    <?php
    $myBool = true;
      if ($myBool)
        echo "<p>Yes, it is!</p>";
      else
        echo "<p>Nooooo!</p>";
    ?>

    <h2>Loops in Kombination mit Arrays</h2>

    <?php
      $myArray1 = array("Home", "Products", "About");
      $myArray2 = ["Home", "Products", "About"];

      echo "<ul>";

      foreach ($myArray1 as $item) {
        echo "<li>$item</li>";
      }

      echo "</ul><ul>";

      for ($i=0; $i < sizeof($myArray2); $i++) {
        echo "<li>".$myArray2[$i]."</li>";
      }

      echo "</ul>"
    ?>

    <h2>Assoziative Arrays</h2>

    <?php
      #              key => value    key => value
      $myGETArray = ["vn"=>"Markus", "nn"=>"Brunner", "submitBtn"=>"Anmelden"];
      #              Mit dem Key kann man den Wert auslesen!
      if (isset($myGETArray)) {
        echo "<p>Button: ".$myGETArray['submitBtn']."</p>";
        echo "<ul>";
        foreach ($myGETArray as $item) {
          echo "<li>$item</li>";
        }
        echo "</ul>";
      }
    ?>

    <h1>Superglobals - $_SERVER</h1>
    <?php
        # var_dump($_SERVER);
        echo "Client-Sprache: ".$_SERVER["HTTP_ACCEPT_LANGUAGE"];
        echo "<br>";
        echo "IP-Adresse: ".$_SERVER["REMOTE_ADDR"];
    ?>

  </body>
</html>
