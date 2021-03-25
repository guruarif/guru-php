<?php


namespace guruarif\guruphp\Form;

/**
 *
 * Class Field
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package guruarif\guruphp\Form
 */

class TextareaField extends BaseField
{

    public function renderInput(): string
    {
        return sprintf('<textarea name="%s" class="form-control %s">%s</textarea>',
            $this->attribute,
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
            $this->model->{$this->attribute},
        );
    }
}