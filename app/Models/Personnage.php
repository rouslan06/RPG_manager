<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personnage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nom',
        'description',
        'specialite',
        'magie',
        'force',
        'agilite',
        'intelligence',
        'PV',
    ];

    private string $nom;

    private string $description;

    private string $specialite;

    private int $magie;

    private int $force;

    private int $agilite;

    private int $intelligence;

    private int $PV;

}