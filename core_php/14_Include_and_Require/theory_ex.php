<?php
//Explain the difference between include and require in PHP

/*
include: If the specified file cannot be found or included, PHP will generate a warning but will continue executing the rest of the script. The script doesn't stop running.

require: If the specified file cannot be found or included, PHP will generate a fatal error and stop the script immediately. Execution of the rest of the script will halt.

// Using include
include('nonexistent_file.php');  // PHP will show a warning but continue

// Using require
require('nonexistent_file.php');  // PHP will show a fatal error and stop the script

*/

?>