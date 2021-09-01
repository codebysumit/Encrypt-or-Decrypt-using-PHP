<?php 
    function sumit_encrypt($data, $public_key){
        $cipher = "AES-128-CTR";
        $key = "YOUR_PRIVET_KEY"; // Give same and strong password like Eg: AfHJjkFDSHfd237847650956@#$!*#FghHHg!@*&^$#7
        $options = 0;
        return openssl_encrypt($data, $cipher, $key, $options, $public_key);  
    }
    
    function sumit_random_public_key(){
        return openssl_random_pseudo_bytes(16);
    }
    
    function sumit_public_key_hex($bin){
        return bin2hex($bin);
    }
    
    function sumit_public_key_bin($hex){
        return hex2bin($hex);
    }

    function sumit_decrypt($data, $public_key){
        $cipher = "AES-128-CTR";
        $key = "YOUR_PRIVET_KEY"; // Give same and strong password like Eg: AfHJjkFDSHfd237847650956@#$!*#FghHHg!@*&^$#7
        $options = 0;
        return openssl_decrypt($data, $cipher, $key, $options, $public_key);  
    }
?>