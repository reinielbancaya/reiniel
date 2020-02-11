<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://app-rnb.herokuapp.com/");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {

    $username = $data->getElementsByTagName("username")->item(0)->nodeValue;
    $email = $data->getElementsByTagName("email")->item(0)->nodeValue;
    $password = $data->getElementsByTagName("password")->item(0)->nodeValue;

    echo "
    <ul>
    <li>Id: <strong>$id</strong></li>
    <li>Email: <strong>$email</strong></li>
    <li>Password: <strong>$password</strong></li>
    </ul>";
}
