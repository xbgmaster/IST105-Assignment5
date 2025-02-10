<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the inputs
        $number = $_POST["number"];
        $text = $_POST["secretMessage"];

        // Escape the arguments to prevent injections
        $escaped_number = escapeshellarg($number);
        $escaped_text = escapeshellarg($text);
        // Command to send to the python file.
        //$command = "python3 /var/www/html/process.py $escaped_number $escaped_text";    
        $command = "/usr/bin/python3 /var/www/html/IST105-Assignment5/process.py $escaped_number $escaped_text"; 
        //$command = "python process.py $escaped_number $escaped_text"; 
        // Execute the command and capture the output
        $output = shell_exec($command);
        // If there's an error, it could be that Python isn't executing
        if ($output === null) {
            echo "Error: Unable to execute the command.";
        } else {
            echo "<h2>Assignment 5 Result:</h2>";
            echo "<pre>$output</pre>";
        }
    }
?>