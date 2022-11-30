<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Compte extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'pseudo',
        'nom',
        'prenom',
        'email',
        'mdp',
    ];

    private string $pseudo;

    private string $nom;

    private string $prenom;

    private string $email;

    protected $hidden = [
        'mdp',
    ];

    public function setPasswordAttribute($mdp)
    {
        $this->attributes['mdp'] = bcrypt($mdp);
    }
}
