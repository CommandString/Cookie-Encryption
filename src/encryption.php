<?php

namespace CommandString\CookieEncryption;

use CommandString\Cookies\CookieEncryptionInterface;
use CommandString\Encrypt\Encryption as Encryptor;

class Encryption implements CookieEncryptionInterface {
    private Encryptor $encryptor;

    public function __construct(string $passphrase, string $encryptionMethod)
    {
        $this->encryptor = new Encryptor($passphrase, $encryptionMethod);
    }

    public function encrypt(string|int $data):string
    {
        return $this->encryptor->encrypt($data);
    }

    public function decrypt(string $data):string
    {
        return $this->encryptor->decrypt($data);
    }
}
