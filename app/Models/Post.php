<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\File;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;


class Post extends Model implements HasMedia
{

    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;

    protected $fillable = [
        'title',
        'perex',
        'published_at',
        'enabled',

    ];


    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/posts/'.$this->getKey());
    }



    public function registerMediaCollections(): void
    {
      $this->addMediaCollection('cover')
          ->accepts('image/*');

      $this->addMediaCollection('gallery')
          ->accepts('image/*')
          ->maxNumberOfFiles(20);

      $this->addMediaCollection('pdf')
          ->accepts('application/pdf');

    }

    public function registerMediaConversions(Media $media = null) : void
    {

      $this->autoRegisterThumb200();

    }


}
