<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function getRoutekeyName()
    {
        return 'slug';
    }

    public function isPublished()
    {
        return (bool) $this->published;
    }

    public function newCollection(array $models =[])
    {
        return new Class($models) extends Collection
        {
            public function allPublished()
            {
                return $this->filter->isPublished();
            }
        };
    }
}
