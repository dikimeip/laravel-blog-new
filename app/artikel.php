<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table = "artikel";
    protected $fillable = ['judul','body','gambar','tanggal','most','kategori_id'];

    public function kategori()
    {
    	return $this->belongsTo('App\kategori');
    }
   
}
