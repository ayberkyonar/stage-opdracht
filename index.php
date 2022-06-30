<?php
$string_value = 'abcdefghijklmnopqrstuvwxyz';
$string_value = preg_replace('/\s+/', '', $string_value);

if (strlen($string_value) === 26) {

    $first_three = substr($string_value, -strlen($string_value), 3);
    $last_three = substr($string_value, -3, strlen($string_value));
    $middle = substr($string_value, 3, -3  );
    $middle = "...";

    $answer = $first_three . $middle . $last_three;
} else {
    $answer = 'No valid string is included';
}
echo $answer;