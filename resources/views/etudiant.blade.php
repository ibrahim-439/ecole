<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
                    /*! Form  */
            label{
                float:left;
                text-transform:capitalize;
            }
            input[type=text], select, textarea {
            width: 100%; /* Full width */
            padding: 12px; /* Some padding */
            border: 1px solid #ccc; /* Gray border */
            border-radius: 4px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 6px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
            }

            /* Style the submit button with a specific background color etc */
            input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            /* When moving the mouse over the submit button, add a darker green color */
            input[type=submit]:hover {
            background-color: #45a049;
            }

            /* Add a background color and some padding around the form */
            .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin-top:100px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
             <div class="container">
                <form action="" method="Post">
                        @csrf

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="fNameEtude" placeholder="First Name.."> 
                    
                    <label for="lname">Last Name</label>
                    <input type="text" id="cours" name="LNameEtude" placeholder="Last Name..">

                    <label for="Number">Number Etudiant</label>
                    <input type="text" id="Number" name="NumberEt" placeholder="Number Etudiant..">

                    <label for="classEtudiant">Class Etudiant</label>
                        <select id="classEtudiant" name="classEtudiant">
                        <option value="type A">Class A</option>
                        <option value="type B">Class B</option>
                        <option value="type C">Class C</option>
                    </select>




                    <input type="submit" value="Submit">

                </form>
                </div>
            </div>
        </div>
    </body>
</html>
