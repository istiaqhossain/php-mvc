<?php

namespace app\core\form;

use app\core\Model;

class Field 
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    public const TYPE_NUMBER = 'number';
    public const TYPE_EMAIL = 'email';

    public string $type;
    public Model $model;
    public string $attribute;

    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('
        <div class="form-floating mb-4">
            <input name="%s" value="%s" type="%s" class="form-control %s" id="%s" placeholder="%s">
            <label for="%s">%s</label>
            <div class="invalid-feedback">
                %s
            </div>    
        </div>
        ', 
            $this->attribute, // name
            $this->model->{$this->attribute}, // value
            $this->type, // type
            $this->model->hasError($this->attribute) ? 'is-invalid' : '', // error class
            $this->attribute, // id
            $this->attribute, // placeholder
            $this->attribute, // for
            ucfirst($this->attribute), // label
            $this->model->getFirstError($this->attribute) // error msg
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
}