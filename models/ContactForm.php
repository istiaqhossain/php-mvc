<?php

namespace app\models;

use app\core\Model;

class ContactForm extends Model
{
    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public string $message = '';

    public function rules(): array
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'message' => [self::RULE_REQUIRED],
        ];
    }

    public function labels(): array
    {
        return [
            'firstname' => 'First Name', 
            'lastname' => 'Last Name', 
            'email' => 'E-Mail', 
            'message' => 'Message', 
        ];
    }

    public function send()
    {
        return true;
    }
}