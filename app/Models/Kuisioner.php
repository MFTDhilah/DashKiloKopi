<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuisioner extends Model
{
    protected $table = 'kuisioner';

    protected $fillable = [
        'Nama',
        'Alamat',
        'NoWa',
        'Instagram',
        'Jawaban',
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
