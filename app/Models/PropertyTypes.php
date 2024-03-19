<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyTypes extends Model
{
    protected $table = "propertytypes";

    use HasFactory;
    protected $fillable = ['title','slug'];
    public function properties()
    {
        return $this->hasMany(Property::class,'propertytype_id','id');
    }
    // public static function boot()
    // {
    //     parent::boot();

    //     static::saving(function ($model) {

    //         if (empty($model->slug)) {
    //             $model->slug = Str::slug($model->title, '-');
    //         }
    //     });
    // }
}
