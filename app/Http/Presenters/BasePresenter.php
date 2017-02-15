<?php

namespace App\Http\Presenters;

class BasePresenter
{
    ///^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function __get($attribute)
    {
        if (method_exists($this, $attribute)) {
            return $this->{$attribute}();
        }

        return $this->model->{$attribute};
    }
}