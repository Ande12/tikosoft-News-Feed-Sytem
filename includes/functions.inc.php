<?php
// function to check for empty fields
function emptyInputSignup($name, $email, $username, $pwd) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    }
     else{
        $result = false;
     }
     return $result
}

// checking for characters
function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/"), $username) {
        $result = true;
    }
     else{
        $result = false;
     }
     return $result
}

// checking for wrong email format
function invalidemail($email)  {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
     else{
        $result = false;
     }
     return $result
}

// checking for wrong email format
function pwdMatch($pwd, $pwdRepeat)  {
    $result;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    }
     else{
        $result = false;
     }
     return $result
}

function uidExists($conn, $username)  {
    $sql = "SELECT * FROM users WHERE userUid = ? OR userEmail = ?;";
}