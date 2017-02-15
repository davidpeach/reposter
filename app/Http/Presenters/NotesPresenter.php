<?php

namespace App\Http\Presenters;

class NotesPresenter extends BasePresenter
{
    public function content()
    {
        $pattern = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i';
        $string = preg_replace($pattern, '<a href="$0" target="_blank" title="$0">$0</a>', $this->model->content);

        return '<p>' . $string . '</p>';
    }
}