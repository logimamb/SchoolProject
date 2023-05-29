<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        "service_id",
        "fonction_id",
        "nom",
        "prenom",
        "sexe",
        "telephone",
        "telephone2",
        "adresse",
        "situationMatrimoniale",
        "nombrEnfant",
        "pieceIdentite",
        "numeroPieceIdentite",
        "niveauEtude",
        "email",
        "photo",
        "password",

        // 'nom',
        // 'prenom',
        // 'telephone1',
        // 'numeroPieceIdentite',
        // 'pieceIdentite',
        // 'telephone2',
        // 'sexe',
        // 'email'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function frais(){
        return $this->hasMany(Frais::class);
    }

    public function recus(){
        return $this->hasMany(Recu::class);
    }

    public function inscriptions(){
        return $this->hasMany(Inscription::class);
    }

    public function service(){
        return $this->belongsTo(Services::class);
    }

    public function fonction(){
        return $this->belongsTo(Fonctions::class);
    }

    public function matieres(){
        return $this->belongsToMany(Matiere::class);
    }

    public function enseignants(){
        return $this->belongsToMany(Enseignant::class);
    }
    
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function diplomes(){
        return $this->belongsToMany(Diplomes::class);
    }

    public function hasRole($role){
        return $this->roles()->where("nom",$role)->first() !== null;
    }

    public function hasAnyRoles($roles){
        return $this->roles()->whereIn("nom",$roles)->first() !== null;
    }

    public function getAllRoleNAmesAttribute(){
        return $this->roles()->implode('nom', ', ');
    }

}
