<?php
  header('Access-Control-Allow-Origin: *');
  session_start();

  // Button click control
  if(isset($_POST['submit']))
  {
    // USER
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Variable
    $error_counter = 0;

    if((empty($username) || (strlen($username) > 10) || (!preg_match('/^[a-zA-Z0-9]*$/', $username))) && (empty($password) || (strlen($password) > 10) || (!preg_match('/^[A-Z0-9]*$/', $password))))
    {
      $error_counter += 1;
       // Alert message
       $signup_control_alert_message = array(
        "message" => "Please fill the required fields (Username, Password)",
        "type" => "danger"
      );
      $_SESSION['signup_control_alert_message'] = $signup_control_alert_message;
      header("Location: signup.php");
    }
    else {
      // username control
      if(empty($username) || (strlen($username) > 10) || (!preg_match('/^[a-zA-Z0-9]*$/', $username)))
      {
        $error_counter += 1;
        // Alert message
        $signup_control_alert_message= array(
          "message" => "Username is required",
          "type" => "danger"
        );
        $_SESSION['signup_control_alert_message'] = $signup_control_alert_message;
        header("Location: signup.php");
      }
      // password control
      if(empty($password) || (strlen($password) > 10) || (!preg_match('/^[A-Z0-9]*$/', $password)))
      {
        $error_counter += 1;
        // Alert message
        $signup_control_alert_message = array(
          "message" => "Password is required",
          "type" => "danger"
        );
        $_SESSION['signup_control_alert_message'] = $signup_control_alert_message;
        header("Location: signup.php");
      }
    }

    // no error
    if($error_counter == 0)
    {
      $file = fopen("../users.txt", "a") or die("Unable to open file!");

      $user_status = 1;
      $message = "\n".$username."?".$password."?";
      fwrite($file, $message);
      fclose($file);

      // Access success
      if($user_status == 1)
      {
        fclose($file);
        $signup_control_alert_message = array(
          "message" => "Access success",
          "type" => "success"
        );
        $_SESSION['signup_control_alert_message'] = $signup_control_alert_message;
        $_SESSION['username'] = $username;
        header("Location: ../index.php");
      }
      // Access denied
     else {
        fclose($file);
        $signup_control_alert_message = array(
          "message" => "Username and Password do not match.",
          "type" => "danger"
        );
        $_SESSION['signup_control_alert_message'] = $signup_control_alert_message;
        header("Location: signup.php");
      }
    }
  }
?>