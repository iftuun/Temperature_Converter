<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST["temperature"];
    $conversion = $_POST["conversion"];
    $converted_temperature = 0;

    if ($conversion == "celsius_to_fahrenheit") {
        // Celsius to Fahrenheit conversion formula
        $converted_temperature = ($temperature * 9/5) + 32;
    } elseif ($conversion == "fahrenheit_to_celsius") {
        // Fahrenheit to Celsius conversion formula
        $converted_temperature = ($temperature - 32) * 5/9;
    }

    echo "<p>Converted Temperature: $converted_temperature</p>";
}
?>
