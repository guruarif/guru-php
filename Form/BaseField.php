<?php


namespace App\Core\Form;

use App\Core\Model;

/**
 *
 * Class BaseField
 * @author Guru Arif <guruarifahmed@gmail.com>
 * @package App\Core\Form
 */

abstract class BaseField
{
    public Model $model;
    public string $attribute;

    /**
     * Field constructor.
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    abstract public function renderInput(): string;

    public function __toString()
    {
        return sprintf('
            <div class="form-group">
                <label class="label-control">%s</label>
                %s    
                <div class="invalid-feedback">
                    %s
                </div>
            </div>
        ',
            $this->model->getLabel($this->attribute),
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }
}