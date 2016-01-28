<?php
    session_start();
    include("connection.php");

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data
// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array
    if (empty($_POST['fname']))
        $errors['fname'] = 'First name is required.';
    if (empty($_POST['lname']))
        $errors['lname'] = 'Last name is required.';
    if (empty($_POST['email']))
        $errors['email'] = 'Email is required.';
        else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $errors['general'] .= "Bitte eine g&uuml;ltige E-Mail Adresse eingeben.<br>";
    if (empty($_POST['password']))
        $errors['password'] = 'Password alias is required.';
        else {

                if(strlen($_POST['password'])<6) $errors['general'] .= "Das Passwort muss mindestens 6 Zeichen lang sein.<br>";
                if(!preg_match('`[A-Z]`', $_POST['password'])) $errors['general'] .= "Das Passwort muss mindestens einen Gro&szlig;buchstaben beinhalten.<br>";

            }
// return a response ===========================================================
    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {
        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

        $query      = "SELECT * FROM `users` WHERE `email` LIKE '".mysqli_real_escape_string($db, $_POST['email'])."'";

        $result     = mysqli_query($db, $query);

        $results    = mysqli_num_rows($result);

        if($results){
            $data['success'] = false;
            $errors['general'] .= "Die E-Mail Adresse ist bereits registriert";
            $data['errors']  = $errors;
        }
            else {

                $query  = "INSERT INTO `users` (`email`,`fname`,`lname`,`password`) VALUES ('".mysqli_real_escape_string($db, $_POST['email'])."','".mysqli_real_escape_string($db, $_POST['fname'])."','".mysqli_real_escape_string($db, $_POST['lname'])."','".mysqli_real_escape_string($db,md5(md5($_POST['email']).$_POST['password']))."')";

                mysqli_query($db,$query);

                $message = "Ihre Registrierung ist erfolgreich abgeschlossen!";

                $_SESSION['id'] = mysqli_insert_id($db);

                    $data['success'] = true;
                    $data['message'] = $message;
                    $data['content'] = $_SESSION;
                    //redirect
                }
        // if there are no errors process our form, then return a message
        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)
        // show a message of success and provide a true success variable
    }
    // return all our data to an AJAX call
    echo json_encode($data);
?>
