<?php

namespace Vanguard;

class Rehive{
    
    private $admin = '';
    
    public static function registeruser($name, $email, $company = "citizen4", $password){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.rehive.com/3/auth/register/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['email' => $email,'name' => $name,'company' => $company,'password1' => $password,'password2' => $password]));
        $headers = array();
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        }
        $body = json_decode($result);
        return $body->data->token;
    }
    
    public static function registeraccount($bounty)
    {
        $token = self::admintoken();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.rehive.com/3/admin/accounts/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['name' => $bounty, 'user' => 'tumelo@embizo.co.za']));
        $headers = array();
        $headers[] = "Authorization: Token ".$token;
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        }
        
    }
    
    public static function updateaccountcurrency($reference, $code, $token)
    {
        
        $url = strtolower("https://api.rehive.com/3/admin/accounts/".$reference."/currencies/EXP/");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Token ".$token;
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        }
        
        die(var_dump($result));
    }
    
    public static function currency()
    {
        $token = self::admintoken();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.rehive.com/3/admin/currencies/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Token ".$token;
        //$headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        }
        
    }
    
    public static function credit($amount, $bounty_reference)
    {
        $token = self::admintoken();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.rehive.com/3/admin/transactions/credit/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['user' => 'tumelo@embizo.co.za', 'amount' => $amount, 'currency' => 'EXP', 'reference' => $bounty_reference, 'account' => '6VW8BBQXTV', 'status' => 'Complete']));
        $headers = array();
        $headers[] = "Authorization: Token ".$token;
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        }
    }
    
    public static function getbalance()
    {
        $token = self::admintoken();
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.rehive.com/3/admin/accounts/6VW8BBQXTV/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $headers = array();
        $headers[] = "Authorization: Token ".$token;
        //$headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        }
        $body = json_decode($result);
        $body = json_decode(json_encode($body->data->currencies), True);
        return $body[0]['available_balance'];
    }
    
    public static function admintoken()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.rehive.com/3/auth/login/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['user' => 'tumelo@embizo.co.za','company' => 'citizen4','password' => 'Sekitle123']));
        $headers = array();
        $headers[] = "Content-Type: application/json";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
        }
        
        $body = json_decode($result);
        return $body->data->token;
    }
}