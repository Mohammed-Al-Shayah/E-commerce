<?php

namespace App\Traits;

trait Trans {

    public function getTransNameAttribute(){
        if ($this->name) {
            return json_decode($this->name, true)[app()->currentLocale()];
        }
        return  $this->name;
    }

    public function getArNameAttribute()
    {
        if ($this->name) {
            return json_decode($this->name, true)['ar'];
        }
        return  $this->name;
    }


    public function getEnNameAttribute()
    {
        if ($this->name) {
            return json_decode($this->name, true)['en'];
        }
        return  $this->name;
    }



    public function getTransContentAttribute(){
        if ($this->content) {
            return json_decode($this->content, true)[app()->currentLocale()];
        }
        return  $this->content;
    }

    public function getArContentAttribute()
    {
        if ($this->content) {
            return json_decode($this->content, true)['ar'];
        }
        return  $this->content;
    }


    public function getEnContentAttribute()
    {
        if ($this->content) {
            return json_decode($this->content, true)['en'];
        }
        return  $this->content;
    }
}

