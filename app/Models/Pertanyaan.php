<?php

namespace dev\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    //
    protected $table      = 'pertanyaan';
    protected $primaryKey = 'idpertanyaan';
    protected $fillable   = ['pertanyaan'];
    public $timestamps    = false;

    public function jawaban()
    {
        return $this->hasMany('dev\Models\Jawaban', 'idpertanyaan');
    }
}
