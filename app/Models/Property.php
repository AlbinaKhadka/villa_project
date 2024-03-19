<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
        protected $table="properties";
        public function Propertytype()
        {
            return $this->belongsTo(Propertytype::class,'propertytype_id','id');
        }
        public function setPriceAttribute($value)
    {
        $this->attributes['Price'] = (float)preg_replace('/[^\d.]/', '', $value);

    }

    }


