<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $primary = 'id_cand';
    protected $guarded = [];
    public function Filiere()
    {
        return $this->belongsTo(Filiere::class, 'codefil', 'codefil');
    }
}
