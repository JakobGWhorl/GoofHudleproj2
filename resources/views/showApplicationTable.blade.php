<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Application Table</title>

        <link type="style/css" href="./css/app.css" rel="stylesheet">
        <link type="style/css" href="./css/style.css" rel="stylesheet">

        <!-- Fonts --> 
        <link rel="preconnect" href="https://fonts.bunny.net%22%3E/
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com%22%3E/
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           body{
                background-color: #f5b82e;
                width: 100%;
                font-family: Raleway,'Times New Roman', Times, serif;
                width:99%;
                }

            table{
                border: 2px solid #000;
                border-radius: 10px;
                background-color: #f4ac32;
                margin: 0px auto;
                height: fit-content;
                width: 500px;
                padding: 30px;
                text-align: center;
                }

                h1{
                    width:500px;
                    margin:auto;
                    border-bottom: 2px solid;
                    margin-bottom:30px;
                    margin-top:50px;
                    text-align: center;
                    padding-bottom: 20px;
                }

                h3{
                    width:500px;
                    margin:auto;
                    margin-top:30px;
                }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <h1>
                Job Applicants
            </h1>
            <table>
                <tr class="tablerow">
                    <td class="tabledata appid">
                        ID
                    </td>
                    <td class="tabledata appfirstname">
                        First_name
                    </td>
                    <td class="tabledata applastname">
                        Last_name
                    </td>
                    <td class="tabledata appemail">
                        Email
                    </td>

                    <td class="tabledata appaddress">
                        Address
                    </td>
                    <td class="tabledata appeducation">
                        Education
                    </td>
                    <td class="tabledata appyearsofexp">
                        years of expirence
                    </td>
                    <td class="tabledata appother">
                        other
                    </td>
                    <td class="tabledata appid">
                        Rando_ID
                    </td>
                </tr>
                
                    @foreach ($a as $JobApplication)
                        
                    
                
                <tr>    <td class="tabledata appid">
                       {{$JobApplication['id'] }}
                    </td>
                    <td class="tabledata appfirstname">

                  {{ $JobApplication['first_name']  }}

                    </td>

                    <td class="tabledata applastname">

                    {{ $JobApplication['last_name'] }}

                    </td>

                    <td class="tabledata appemail">

                    {{ $JobApplication['email'] }}

                    </td>

                    <td class="tabledata appaddress">

                    {{ $JobApplication['address'] }}

                    </td>

                    <td class="tabledata appeducation">

                    {{ $JobApplication['education'] }}

                    </td>

                    <td class="tabledata appyearsofexp">

                    {{ $JobApplication['years_of_exp'] }}

                    </td>

                    <td class="tabledata appother">

                    {{ $JobApplication['other'] }}

                    </td>
                    <td class="tabledata appid">

                    <?php 
                    $other = rand(0,999);
                    print $other;
                    ?>

                    </td></tr>
                    @endforeach            
                </table>
           

        </div>
    </body>
</html>
