<?php

namespace cmdstr\cookieEncryption;

use cmdstr\cookies\cookieEncryptionInterface;
use cmdstr\encrypt\encryption as encryptor;

class encryption implements cookieEncryptionInterface {
    private encryptor $encryptor;

    public function __construct(string $passphrase, string $encryptionMethod)
    {
        $this->encryptor = new encryptor($passphrase, $encryptionMethod);
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
