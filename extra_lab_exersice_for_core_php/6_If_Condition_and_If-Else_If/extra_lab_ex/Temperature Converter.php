<?php
function convertTemperature($temperature, $unit) {

    if (strtoupper($unit) == "C") {
        // Convert from Celsius to Fahrenheit
        $converted = ($temperature * 9/5) + 32;
        $convertedUnit = "F";
    } 
    elseif (strtoupper($unit) == "F") {
        // Convert from Fahrenheit to Celsius
        $converted = ($temperature - 32) * 5/9;
        $convertedUnit = "C";
    } 
    else {
        // Invalid unit input
        return "Invalid unit. Please use 'C' for Celsius or 'F' for Fahrenheit.";
    }
    
    return "$temperature $unit is equal to $converted $convertedUnit.";
}

// Example usage
$temperature = 100;
$unit = 'C';
echo convertTemperature($temperature, $unit);
?>
