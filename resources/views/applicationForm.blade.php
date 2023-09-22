<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <form action={{ url('/show')}} method="get">
            @csrf
            <?php $id = rand(0,999) ?>
                <label for="first_name">First Name:</label>
                <br>
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
                <input type="text"name="other">
                <br><br>
                <button>Enter</button>
            </form>

            <form action=""></form>

        </div>
    </body>
</html>
