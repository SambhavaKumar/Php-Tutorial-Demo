<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "HomePhpPage" ?>
    </title>
</head>

<body>
    <h1>
        <?php
        echo "testing <br/>";
        ?>
        <?php
        /**
         * Variables are containers for storing information. testing
         * always start with a $ sign.
         * Cannot start with a number.
         * Must start with a letter or an underscore character.
         * Can only contain alphanumeric characters and underscores 
         * Variables in php are case sensitive. ($Name, $name and $namE are different)
         */

        $name = "Sambhava";
        $income = 2000;
        // Variables are casesensitive in php
        //$namE="Amit";
        $income = 5000;
        echo "my name is $name and my income is $income rupees.";
        ?>
    </h1>

</body>

</html>