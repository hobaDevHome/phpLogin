<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    echo $_SERVER["DOCUMENT_ROOT"];
    ?>

    <main>
        <h2>Log In</h2>
        <form action="includes/formhandler.php" method="post">
            <div>
                <label for="username">User name</label>

                <input type="text" id="username" name="username" placeholder="username...">
            </div>

            <div>

                <label for="password">Password</label>
                <input type="text" id="password" name="password" placeholder="password...">
            </div>



            <button type="submit">Log IN</button>
        </form>
        <hr>
        <h2>Sign Up</h2>
        <form action="includes/formhandler.php" method="post">
            <div>
                <label for="username">User name</label>

                <input type="text" id="username" name="username" placeholder="username...">
            </div>

            <div>

                <label for="password">Password</label>
                <input type="text" id="password" name="password" placeholder="password...">
            </div>
            <div>

                <label for="email">email</label>
                <input type="text" id="email" name="email" placeholder="email...">
            </div>



            <button type="submit">Sign UP</button>
        </form>

    </main>
</body>

</html>