<?php
  header('Access-Control-Allow-Origin: *');
  session_start();

  // Button click control
  if(isset($_POST['submit']))
  {
    // USER
    $username = $_POST['username'];
    $password = strtoupper($_POST['password']);

    // Variable
    $error_counter = 0;

    if((empty($username) || (strlen($username) > 10) || (!preg_match('/[a-zA-Z0-9]/', $username))) && (empty($password) || (strlen($password) > 10) || (!preg_match('/[a-zA-Z0-9]/', $password))))
    {
      $error_counter += 1;
       // Alert message
       $login_control_alert_message = array(
        "message" => "Please fill the required fields (Username, Password).",
        "type" => "danger"
      );
      $_SESSION['login_control_alert_message'] = $login_control_alert_message;
      header("Location: ../index.php");
    }
    else {
      // username control
      if(empty($username) || (strlen($username) > 10) || (!preg_match('/[a-zA-Z0-9]/', $username)))
      {
        $error_counter += 1;
        // Alert message
        $login_control_alert_message = array(
          "message" => "Username is required",
          "type" => "danger"
        );
        $_SESSION['login_control_alert_message'] = $login_control_alert_message;
        header("Location: ../index.php");
      }
      // password control
      if(empty($password) || (strlen($password) > 10) || (!preg_match('/[a-zA-Z0-9]/', $password)))
      {
        $error_counter += 1;
        // Alert message
        $login_control_alert_message = array(
          "message" => "Password is required",
          "type" => "danger"
        );
        $_SESSION['login_control_alert_message'] = $login_control_alert_message;
        header("Location: ../index.php");
      }
    }

    // no error
    if($error_counter == 0)
    {
      $file = fopen("../users.txt", "r") or die("Unable to open file!");

      // USER
      $file_row = array();
      $all_username = array();
      $all_password = array();

      while(!feof($file))
      {
        $text = fgets($file);
        $file_row = explode("?", $text);
        array_push($all_username, $file_row[0]);
        array_push($all_password, strtoupper($file_row[1]));
        $file_row = null;
      }

      // Variable
      $user_status = 0;

      for($i=0; $i<count($all_username); $i++)
      {
        if((strcasecmp($username, $all_username[$i])) == 0)
        {
          if(strcasecmp($password, $all_password[$i]) == 0)
          {
            $user_status = 1;
            break;
          }
        }
      }
      // Access success
      if($user_status == 1)
      {
        fclose($file);
        $login_control_alert_message = array(
          "message" => "Access success",
          "type" => "success"
        );
        $_SESSION['login_control_alert_message'] = $login_control_alert_message;
        $_SESSION['username'] = $username;
        sleep(1);
        header("Location: ../html/homepage.html");
      }
      // Access denied
     else {
        fclose($file);
        $login_control_alert_message = array(
          "message" => "Username and Password do not match.",
          "type" => "danger"
        );
        $_SESSION['login_control_alert_message'] = $login_control_alert_message;
        header("Location: ../index.php");
      }
    }
  }
?>