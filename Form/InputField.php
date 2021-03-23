<?php

namespace App\Core\Form;

use App\Core\Model;

/**
 *
 * Class Field
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package App\Core\Form
 */
class InputField extends BaseField
{
    public const TYPE_TEXT      = 'text';
    public const TYPE_EMAIL     = 'email';
    public const TYPE_PASSWORD  = 'password';
    public const TYPE_NUMBER    = 'number';
    public const TYPE_RADIO     = 'radio';
    public const TYPE_CHECKBOX  = 'checkbox';

    public string $type;

    /**
     * Field constructor.
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $attribute);
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function renderInput(): string
    {
        return sprintf('<input type="%s" name="%s" value="%s" class="form-control %s">',
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
        );
    }
}