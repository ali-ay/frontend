<?php
namespace App\Service;

class AES128Encryptor
{
    private $_key;

    public function __construct($key = '')
    {
        // Use a 16-byte key for AES-128
        $this->_key = substr(str_pad($key, 16, "\0"), 0, 16);
    }

    public function encrypt($data)
    {
        return base64_encode(openssl_encrypt($data, 'aes-128-ecb', $this->_key, OPENSSL_RAW_DATA));
    }

    public function decrypt($encryptedData)
    {
        return openssl_decrypt(base64_decode($encryptedData), 'aes-128-ecb', $this->_key, OPENSSL_RAW_DATA);
    }
}