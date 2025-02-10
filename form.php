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
            background-image: url("map.jpg");
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
        <form method="POST" action="">
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

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // get the inputs information
            $number = $_POST['number'];
            $text = $_POST['secretMessage'];

            // Validations of data that user send
            // echo "Número recibido: $number<br>";
            //echo "Texto recibido: $text<br>";

            // Escape the argument to prevent injections 
            $escaped_number = escapeshellarg($number);
            $escaped_text = escapeshellarg($text);

            // Command to send until the python file.
            $command = "python process.py $escaped_number $escaped_text";    

            //$command = "C:/Users/aleja/AppData/Local/Programs/Python/Python313/python.exe " . __DIR__ . "/process.py $escaped_number $escaped_text 2>&1";


            // Validations of data that user send
            //echo "Comando ejecutado: $command<br>";

            // Ejecutar el comando y obtener la salida
            $output = shell_exec($command);
            //echo "Comando salida: $output<br>";

            // Show the result
            echo "<h2>Resultados:</h2>";
            echo "<pre>$output</pre>";
        }
?>
</body>

</html>