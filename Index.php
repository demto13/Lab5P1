<!--/**
 * Created by PhpStorm.
 * User: ToSzi
 * Date: 3/7/2017
 * Time: 7:58 PM
 */-->

<!Doctype html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>PHPTry</title>
</head>
<body>
    <div id="page">
    <header>
        <link href="PHPIndexStyle.css" type="text/css" rel="stylesheet"/>
        <?php
            echo "<h1>Hello World!!!!</h1>"
        ?>
    </header>
    <main>
        <form action="Index.php" method="post">
            <fieldset>
                <legend> Details </legend>
                <label class="label 1" for="firstName">First Name</label>
                <input class="text 1" type="text" name="firstName" placeholder="First Name" />
                <label class="label 2" for="lastName">Last Name</label>
                <input class="text 2" type="text" name="lastName" placeholder="Last Name" />
                <input class="submitButton" type="submit" value="submit" />
            </fieldset>
        </form>
    </main>
    <aside>
        <?PHP

        $firstName = $_POST["firstName"];

        $lastName = $_POST["lastName"];

        if($firstName != null && $lastName != null)
        {
            printDetails($firstName, $lastName);
        }

        else
        {
            echo "<p>Both fields must be filled in. Please try again!</p>";
        }

        function printDetails($firstName, $lastName)
        {
            echo"<p class='errorMessage'>Hello {$firstName} {$lastName} how are you today?</p>";
        }
        ?>
    </aside>
    <footer>
        <p>CopyRight</p>
    </footer>
    </div>
</body>