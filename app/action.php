<?php

class Captcha{

    public function captchaVerify(){
        $token = $_POST['INPUT_TOKEN'];
        $secretKey = 'SITE_KEY';
        $ip = $_SERVER['REMOTE_ADDR'];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $token . "&remoteip=" . $ip;
        $request = file_get_contents($url);
        $response = json_decode($request);
    }
}