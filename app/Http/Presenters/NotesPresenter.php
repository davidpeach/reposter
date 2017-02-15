<?php

namespace App\Http\Presenters;

class NotesPresenter extends BasePresenter
{
    public function content()
    {
        $pattern = '~(?:(https?)://([^\s<]+)|(www\.[^\s<]+?\.[^\s<]+))(?<![\.,:])~i';
        // Temporarily remove preg_replace as some links in tweets are broken.
        //$string = preg_replace($pattern, '<a href="$0" target="_blank" title="$0">$0</a>', $this->model->content);

        return '<p>' . $this->model->content . '</p>';
    }

    public function timestamp()
    {
        return '<time datetime="' . $this->model->timestamp . '" title=" ' . $this->model->timestamp->format('jS F Y') . ' ">' . $this->model->timestamp->diffForHumans() . '</time>';
    }

    public function external_link()
    {
        return '<p><a href="https://twitter.com/chegalabonga/status/' . $this->model->uid . '">On Twitter</a></p>';
    }
}