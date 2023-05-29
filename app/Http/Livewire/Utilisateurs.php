<?php

namespace App\Http\Livewire;

use App\Models\Fonctions;
use App\Models\Services;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{
    use WithPagination;
    protected $paginationTheme ="Bootstrap";

    public $isBtnAddClicked = false;

    public $newUser = [];

    protected $rules = [
        "newUser.nom" => "required",
        "newUser.prenom" => "required",
        //"newUser.photo" => "required",
        "newUser.service_id" => "required",
        "newUser.fonction_id" => "required",
        "newUser.niveauEtude" => "required",
        "newUser.adresse" => "required",
        "newUser.sexe" => "required",
        "newUser.telephone" => "required|numeric|unique:users,telephone",
        "newUser.telephone2" => "required|numeric|unique:users,telephone2",
        "newUser.pieceIdentite" => "required",
        "newUser.numeroPieceIdentite" => "required|unique:users,numeroPieceIdentite",
        "newUser.situationMatrimoniale" => "required",
        "newUser.email" => "required|email|unique:users,email"
    ];

    protected $messages = [
        "newUser.nom.required" => "Le nom de l'utilisateur est réquis.",
        "newUser.prenom.required" => "Le prénom l'utilisateur est réquis.",
        "newUser.telephone.required" => "Le numéro de téléphone 1 de l'utilisateur est réquis.",
        "newUser.pieceIdentite.required" => "La piéce d'identité de l'utilisateur est réquis.",
        "newUser.numeroPieceIdentite.required" => "Le numéro de piéce de l'utilisateur est réquis.",
        "newUser.email.required" => "L'adresse email de l'utilisateur est réquis.",
        "newUser.email.email" => "Le format de l'adresse email n'est pas conforme."
    ];

     protected $validationAttributes = [
         "newUser.nom" => "Le nom de l'utilisateur"
    ];

    public function render()
    {
        return view('livewire.utilisateurs.index', [
            "services" => Services::all(),
            "fonctions" => Fonctions::all(),
            "users" => User::latest()->paginate(10)
        ])->extends("layouts.master")->section("contenu");
    }

    public function goToAddUser(){
        $this->isBtnAddClicked = true;
    }

    public function goToListUser(){
        $this->isBtnAddClicked = false;
    }

    public function addUser(){
        //dump($this->newUser);
        $validationAttributes = $this->validate();

        $validationAttributes["newUser"]["password"] = "password";
        $validationAttributes["newUser"]["photo"] = "image.png";
        User::create($validationAttributes["newUser"]);

        $this->newUser = [];

        $this->dispatchBrowserEvent("showSuccessMessage",["message" => "Employé créé avec succès !"]);
    }
}
