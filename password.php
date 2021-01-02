<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<body>
    <?php
    extract($_POST);
    // check if user has left USERNAME or PASSWORD field blank
    if ( !$USERNAME || !$PASSWORD) {
        fieldsBlank();
        die();
    }
    // check if the New User button was clicked
    if (isset($NewUser)) {
        // open password.txt for writing using append mode
        if ( !($file = fopen("password.txt", "a"))) {
            // print error message and terminate script
            // execution if file cannot be opened
            print ("<title>Error</title></head><body>Could not open password file</body></html>");
            die();
        }
        // write username and password to file and call function userAdded
        fputs($file, "$USERNAME, $PASSWORD\n");
        userAdded($USERNAME);
    } else {
        // if a new user is not being added, open file for reading
        if (!($file = fopen("password.txt", "r"))) {
            print ("<title>Error</title></head><body>Could not ope password file </body></html>");
            die();
        }
        $userVerified = 0;

        // read each lie in file and check username and password
        while (!feof($file) && !$userVerified) {
            // read line from file
            $line = fgets($file, 255);

            // remove newline character from end of line
            $line = chop($line);

            // split username and password
            $field = explode(",", $line, 2);

            // verify username
            if ($USERNAME == $field[0]) {
                $userVerified = 1;

                // call function checkPassword to verify user's password
                if (checkPassword($PASSWORD, $field) == true)
                    accessGranted($USERNAME);
                else
                    wrongPassword();
            }
        }
        // close text file
        fclose($file);

        // call function accessDenied if username has not been verified
        if (!$userVerified)
            accessDenied();
    }

    // verify user password and return a boolen
    function checkPassword($userpassword, $filedata)
    {
        if ($userpassword == $filedata[1])
            return true;
        else
            return false;
    }

    // print a message indicating the user has been added
    function userAdded($name)
    {
        print ("<title>Thank you</title></head><body style= \"font-family: Arial; font-size: 1em; color: blue\">
        <strong>You have been added to the user list, $name. <br /> Enjoy the site. </strong>");
    }

    // print a message indicating permission has been granted
    function accessGranted($name)
    {
        print ("<title>Thank you</title></head><body style= \"font-family: Arial; font-size: 1em; color:blue\">
    <strong>Permission has been granted, $name. <br />Enjoy the site.</strong>");
    }

    // print a message indicating password is invalid
    function wrongPassword()
    {
        print ("<title>Access denied</title></head><body style= \"font-family: Arial; font-size: 1em; color:red\">
    <strong>You entered an invalid password. <br />Access has been denied</strong>");
    }

    // print a message indicating access has been denied
    function accessDenied()
    {
        print ("<title>Access Denied</title></head><body style= \"font-family: Arial; font-size: 1em; color:red\">
    <strong>You were denied access to this server.<br /></strong>");
    }

    // print a message indicating that fields have been left blank
    function fieldsBlank()
    {
        print ("<title>Access Denied</title></head><body style= \"font-family: Arial; font-size: 1em; color:red\"
    <strong>Please fill in all form fields.<br /></strong>");
    }

    ?>
</body>
</html>
    