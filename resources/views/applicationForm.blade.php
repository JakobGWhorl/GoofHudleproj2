<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Application Table</title>

        <style type="style/css" href="./css./app.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <form action="/"method="post">
                <label for="first_name">First Name:</label>
                <br><br>
                <input type="text"name="first_name">
                <br><br>
                <label for="last_name">Last Name:</label>
                <br>
                <input type="text"name="last_name">
                <br><br>
                <label for="email">Email:</label>
                <br>
                <input type="text"name="email">
                <br><br>
                <label for="address">Address:</label>
                <br>
                <input type="text"name="address">
                <br><br>
                <label for="education">Education:</label>
                <br>
                <select name="education">
                    <option value="undergraduate">undergraduate</option>
                    <option value="graduate">graduate</option>
                </select>
                <br><br>
                <label for="years_of_exp">Years of Experience:</label>
                <br>
                <input type="text"name="years_of_exp">
                <br><br>
                <label for="other">Other:</label>
                <br>
                <input type="text"name="Other">
                <br><br>
                <button>Enter</button>
            </form>

        </div>
    </body>
</html>
