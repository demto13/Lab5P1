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
                <label class="label 3" for="age">Age</label>
                <input class="text 3" type="text" name="age" placeholder="Age">
                <label class="label 4" for="wantedGoods">Wanted Goods</label>
                <select class="drop 1" name="wantedGoods">
                    <option value="specs">Specs</option>
                    <option value="mugs">Mugs</option>
                    <option value="sausages">Sausages</option>
                </select>
                <input class="submitButton" type="submit" value="submit" />
            </fieldset>
        </form>
    </main>
    <aside>
        <?PHP

        $firstName = $_POST["firstName"];

        $lastName = $_POST["lastName"];

        $age = $_POST["age"];

        $wantedGoods = $_POST["wantedGoods"];

        $provisionedGoods = array("specs", "mugs", "sasusagerolls");

        if($firstName != null && $lastName != null)
        {
            printDetails($firstName, $lastName, $age, $wantedGoods, $provisionedGoods);
        }

        else
        {
           echo "<p>Both fields must be filled in. Please try again!</p>";
        }

        function printDetails($firstName, $lastName, $age, $wantedGoods, $provisionedGoods)
        {
            switch($firstName)
            {
                case "Szilvia":
                    echo "<h1>Welcome Princess:-):-):-):-) </h1>";
                    break;
                case "Tamas":
                    echo "<h1>Welcome My Lord!</h1>";
                    break;
                default:
                    echo"<p style='color: red'>Hello {$firstName} {$lastName} how are you today?</p>";
                    break;
            }

            if($age >= 21)
            {
                echo "<p>You can have specs, mugs and sausage rolls!!!</p>";
            }
            elseif($age >= 18)
            {
                echo "<p>You can have specs and mugs!!!</p>";
            }
            elseif($age >= 16)
            {
                echo "<p>You can have specs!!!</p>";
            }
            else
            {
                echo "<p> You are just too young Buddy!";
            }

            switch($wantedGoods)
            {
                case "specs":
                    echo"<p>You need to be 16+</p>";
                    break;
                case "mugs":
                    echo"<p>You need to be 18+</p>";
                    break;
                case "sausages":
                    echo"<p>You need to be 21+</p>";
                    break;
            }

            foreach($provisionedGoods as $individualGood)
            {
                echo"<p>$individualGood</p>";
            }
        }
        ?>
    </aside>
    <footer>
        <p>CopyRight</p>
    </footer>
    </div>
</body>