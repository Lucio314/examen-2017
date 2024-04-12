<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $primaryKey = 'codefil';
    protected $guarded = [];
    public $incrementing = false;
    public function candidats()
    {
        return $this->hasMany(Candidat::class, 'codefil', 'codefil');
    }
}
