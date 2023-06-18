<?php

namespace App\Http\Livewire;

use App\Models\Fonctions;
use App\Models\Services;
use App\Models\User;
use Doctrine\Inflector\Rules\Portuguese\Rules;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateurs extends Component
{
    use WithPagination;
    protected $paginationTheme ="Bootstrap";

    public $currentPage = PAGELIST;

    public $newUser = [];
    public $editUser = [];

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

    public function rules(){
        if($this->currentPage == PAGEEDITFORM){
            return [
                "editUser.nom" => ["required"],
                "editUser.prenom" => ["required"],
                //"newUser.photo" => "required",
                "editUser.service_id" => ["required"],
                "editUser.fonction_id" => ["required"],
                "editUser.niveauEtude" => ["required"],
                "editUser.adresse" => ["required"],
                "editUser.nombrEnfant" => ["numeric"],
                "editUser.sexe" => ["required"],
                "editUser.telephone" => ["required","numeric",Rule::unique('users','telephone')->ignore($this->editUser['id'])],
                "editUser.telephone2" => ["required","numeric",Rule::unique('users','telephone2')->ignore($this->editUser['id'])],
                "editUser.pieceIdentite" => ["required"],
                "editUser.numeroPieceIdentite" => ["required",Rule::unique('users','numeroPieceIdentite')->ignore($this->editUser['id'])],
                "editUser.situationMatrimoniale" => ["required"],
                "editUser.email" => ["required","email",Rule::unique('users','email')->ignore($this->editUser['id'])]
            ];
        }else{
            return [
                "newUser.nom" => "required",
                "newUser.prenom" => "required",
                //"newUser.photo" => "required",
                "newUser.service_id" => "required",
                "newUser.fonction_id" => "required",
                "newUser.niveauEtude" => "required",
                "newUser.nombrEnfant" => ["numeric"],
                "newUser.adresse" => "required",
                "newUser.sexe" => "required",
                "newUser.telephone" => "required|numeric|unique:users,telephone",
                "newUser.telephone2" => "required|numeric|unique:users,telephone2",
                "newUser.pieceIdentite" => "required",
                "newUser.numeroPieceIdentite" => "required|unique:users,numeroPieceIdentite",
                "newUser.situationMatrimoniale" => "required",
                "newUser.email" => "required|email|unique:users,email"
            ];
        }
    }

    public function goToAddUser(){
        $this->currentPage = PAGECREATEFORM;
    }

    public function goToAEditUser($id){
        //dump(User::find($id)->toArray());
        $this->editUser = User::find($id)->toArray();
        $this->currentPage = PAGEEDITFORM;
    }

    public function goToListUser(){
        $this->currentPage = PAGELIST;
        $this->editUser = [];
        $this->newUser = [];
    }

    public function addUser(){
        //dump($this->newUser);
        $validationAttributes = $this->validate();

        $validationAttributes["newUser"]["password"] = "password";
        $validationAttributes["newUser"]["photo"] = "image.png";
        User::create($validationAttributes["newUser"]);

        $this->editUser = [];

        $this->dispatchBrowserEvent("showSuccessMessage",["message" => "Employé créé avec succès !"]);
    }


    public function updateUser(){
        //dump($this->editUser);

        $validationAttributes = $this->validate();
        
        User::find($this->editUser["id"])->update($validationAttributes["editUser"]);

        $this->dispatchBrowserEvent("showSuccessMessage",["message" => "Employé mis à jour avec succès !"]);
    }

    public function confirmDelete($name,$id){
        $this->dispatchBrowserEvent("showConfirmMessage",["message" => [
            "text" => "Vous êtes sur le point de supprimer $name de la liste des employés. Voulez-vous continuer ?",
            "title" => "Etes-vous sûr de continuer ?",
            "type" => "warning",
            "data" => [
                "user_id" => $id,
            ]
        ]]);
    }

    public function deleteUser($id){
        User::destroy($id);

        $this->dispatchBrowserEvent("showSuccessMessage",["message" => "Employé supprimé avec succès !"]);
    }
}
