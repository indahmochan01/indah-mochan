<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
     protected $table='kategori_galeri';

    protected $fillable=[
    	'id','nama','users_id'
    ];

    protected $casts=[

    ];
}
