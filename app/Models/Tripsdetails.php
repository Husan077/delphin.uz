<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class Tripsdetails extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function  getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title_en')
            ->saveSlugsTo('title_en')
            ->slugsShouldBeNoLongerThan(100)
            ->usingLanguage('en')
            ->allowDuplicateSlugs();
    }

    public function getRouteKeyName()
    {
        return 'title_en';
    }
}
