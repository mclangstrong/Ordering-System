<?php

if (isset($success_message)) {
    foreach ($success_message as $message) {
        echo '<script>swal("' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '", "", "success");</script>';
    }
}

if (isset($warning_message)) {
    foreach ($warning_message as $message) {
        echo '<script>swal("' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '", "", "warning");</script>';
    }
}

if (isset($info_message)) {
    foreach ($info_message as $message) {
        echo '<script>swal("' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '", "", "info");</script>';
    }
}

if (isset($error_message)) {
    foreach ($error_message as $message) {
        echo '<script>swal("' . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . '", "", "error");</script>';
    }
}

?>
