<?php
/* What are super global variables in PHP? List at least five super global arrays and their
   use.
    ans:
    In PHP, super global variables are built-in global arrays that are always accessible, regardless of scope. These variables can be accessed from any part of a PHP script, including inside functions and classes.

    list of super global arrays:
    $_GET:
    Use: Ideal for non-sensitive data that needs to be passed in the URL (e.g., search queries or page numbers).

    $_POST:
    Use: Ideal for handling sensitive data (e.g., login credentials) because the data is not visible in the URL.

    $_SESSION:
    Use: Commonly used for user authentication and storing user-specific data during a session.

    $_COOKIE:
    Use: Ideal for storing small, persistent user preferences or session identifiers.

    $_SERVER:
    Use: Useful for retrieving information about the request, such as the HTTP method, server information, or client IP address.

?>