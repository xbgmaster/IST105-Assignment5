<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            position: relative;
            top: 50vh;
            left: 50vw;
            transform: translate(-50%, -50%);
            /*other attribute of size, viewport width, is like 50% of the screen*/
            width: 50vw;
            /*other attribute of size, viewport height, is like 50% of the screen*/
            height: 50vh;
            width: 400px;
        }

        div {
            text-align: center;
        }

        body {
            background-image: url("https://as1.ftcdn.net/v2/jpg/00/91/50/18/1000_F_91501890_eRy2gFczgLI2mAkpbwm0vvpwIsbn6x1a.jpg");
            background-size: cover;
            background-position: top;
            background-attachment: scroll;
        }

        h1 {
            text-align: center;
            display: block;
        }

        input, label {
            width: 100%;
            font-weight: bold;
        }
        pre {
            font-weight: bold;
        }
    </style>
</head>

    <body>
            <form method="POST" action="process.php">
                <div>
                    <h1>The interactive treasure hunt</h1>
                </div>
                <div>
                    <label for="number">Input a number</label>
                    <input type="number" id="number" name="number" title="XXX"><br>
                </div>
                <div>

                </div>
                <br>
                <div>
                    <label for="number">Secret word:</label>
                    <input type="text" id="secretMessage" name="secretMessage" require title="XXX"><br>
                </div>
                <br>
                <div>
                    <input type="submit" value="Solve the Puzzle" style="width: 200px;">
                </div>
        </form>
    </body>
</html>