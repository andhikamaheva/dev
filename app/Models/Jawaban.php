<?php

namespace dev\Models;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    //
    protected $table      = 'jawaban';
    protected $primaryKey = 'idjawaban';
    protected $fillable   = ['idpertanyaan', 'jawaban', 'analisa'];
    public $timestamps    = false;
}
