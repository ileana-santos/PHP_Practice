  <?php
  //Built-In Superglobal Variables in PHP

    $_SERVER[""];
    //'$_SERVER' holds information about headers, paths, and script locations.

    $_GET[""];
    //`$_GET` is a superglobal array used to retrieve form data sent via the GET method in the URL.

    $_POST[""];
    //`$_POST` is a superglobal array used to collect form data submitted with the POST method,
    // providing a secure way to send sensitive information as it is not visible in the URL.

    $_REQUEST[""];
    //`$_REQUEST` is a superglobal array that combines the contents of `$_GET`, `$_POST`,
    // and `$_COOKIE`, allowing access to data sent through both GET and POST methods as well as
    // cookie data within a single array.

    $_FILES[""];
    //`$_FILES` is a superglobal array used to retrieve information about uploaded files sent through
    // a form with the `enctype="multipart/form-data"` attribute.

    $_COOKIE[""];
    //`$_COOKIE` is a superglobal array that contains variables passed to the current script via HTTP Cookies,
    // enabling the retrieval of cookie data sent by the client browser.

    $_SESSION[""];
    //`$_SESSION` is a superglobal array used to store session variables that persist across
    // multiple pages for a single user session, allowing data to be maintained
    // and accessed throughout the duration of the session.

    $_ENV[""];
    //`$_ENV` is a superglobal array containing environment variables passed to the script running on the server,
    //allowing access to system environment information such as server settings, paths, and user-defined variables.

  ?>
