<?php
    session_start();
    $allFieldsFilled = true;
    foreach ($_REQUEST as $key => $value) {
        // $_SESSION[$key] = $value;
        if (!isset($_REQUEST[$key]) or empty($value)) {
            $allFieldsFilled = false;
            break;
        }
    }
    if ($allFieldsFilled && isset($_REQUEST['#submit'])) {
        foreach ($_REQUEST as $key => $value) {
            $_SESSION[$key] = $value;
        }
        include 'updateFile.php';

        header('Location: view.php');
    } else {
        header('Location: edit.php');
    }
?>