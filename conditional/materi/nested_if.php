<?php
$username = 'admin';
$password = '123456';

if ($username == 'admin') {
    if ($password == '12345') {
        echo "Login successful!";
    } else {
        echo "Invalid password.";
    }
} else {
    echo "Invalid username.";
}
