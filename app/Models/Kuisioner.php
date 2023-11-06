<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuisioner extends Model
{
    protected $table = 'Kuisioner';

    protected $fillable = [
        'Nama',
        'Alamat',
        'NoWa',
        'Instagram',
        'Petanyaan1',
        'Pertanyaan2',
        'poto',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/kuisioners/'.$this->getKey());
    }
}
