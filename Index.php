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
    <header>
        <?php
            echo "<h1>Hello World!!!!</h1>"
        ?>
    </header>
    <main>
        <form action="Index.php" method="post">
            <fieldset>
                <legend> Details </legend>
                <label class="label 1" for="firstName">First Name</label>
                <input type="text" name="firstName" placeholder="First Name" />
                <label class="label 2" for="lastName">Last Name</label>
                <input type="text" name="lastName" placeholder="Last Name" />
                <input class="submitButton" type="submit" value="submit" />
            </fieldset>
        </form>
    </main>
    <aside>
        <?PHP

        $firstName = $_POST["firstName"];

        $lastName = $_POST["lastName"];

        printDetails($firstName, $lastName);


        function printDetails($firstName, $lastName)
        {
            echo"<p>Hello {$firstName} {$lastName} how are you today?</p>";
        }
        ?>
    </aside>
    <footer>
        <p>CopyRight</p>
    </footer>
</body>