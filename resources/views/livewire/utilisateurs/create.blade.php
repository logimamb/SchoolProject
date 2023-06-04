<div class="row p-4 pt-5">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header bg-primary d-flex align-items-center">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire de création d'un nouvel
                    employé</h3>
                <div class="card-tools d-flex align-items-right">
                    <button type="button" wire:click.prevent="goToListUser()" class="btn btn-danger flex-grow-1 mr-2">Retourner à la liste des employés</button>
                </div>

            </div>

            {{-- <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul> --}}

            {{-- <div class="card card-primary table-responsive p-0" style="height: 500px;"> --}}
                <form wire:submit.prevent="addUser()" role="form">

                    <div class="card-body">

                        <div class="d-flex">
                            <div class="form-group flex-grow-1 mr-2">
                                <label>Nom</label>
                                <input type="text" wire:model="newUser.nom" class="form-control @error('newUser.nom') is-invalid @enderror">
                                @error("newUser.nom")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group flex-grow-1 mr-2">
                                <label>Prénom</label>
                                <input type="text" wire:model="newUser.prenom" class="form-control @error('newUser.prenom') is-invalid @enderror">
                                @error("newUser.prenom")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <img src="{{ asset('images/homme.png') }}" alt="Image de l'employé" class="form-group flex-grow-2" style="width: 150px;height:150px; background-color: maroon">
                            {{-- <input type="file" name="photo"> --}}
                            {{-- @error("newUser.photo")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror --}}
                        </div>

                        <div class="d-flex" style="margin-top: -75px; width:82.5%;">
                            <div class="form-group flex-grow-1 mr-2">
                                <label>Sexe</label>
                                <select wire:model="newUser.sexe"
                                    class="form-control @error('newUser.sexe') is-invalid @enderror">
                                    <option value="">------------------</option>
                                    <option value="H">Homme</option>
                                    <option value="F">Femme</option>
                                </select>
                                @error("newUser.sexe")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group flex-grow-1 mr-2">
                                <label>Situation matrimoniale</label>
                                <select wire:model="newUser.situationMatrimoniale" class="form-control @error('newUser.situationMatrimoniale') is-invalid @enderror">
                                    <option value="">------------------</option>
                                    <option value="CELIBATAIRE">CELIBATAIRE</option>
                                    <option value="MARIE">MARIE</option>
                                    <option value="DIVORCE">DIVORCE</option>
                                    <option value="VEUVE">VEUVE</option>
                                    <option value="VEUF">VEUF</option>
                                </select>
                                @error("newUser.situationMatrimoniale")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group flex-grow-1">
                                <label>Nombre d'enfants</label>
                                <input type="text" wire:model="newUser.nombrEnfant" class="form-control">
                            </div>
                        </div>

                        <div class="d-flex">

                            <div class="form-group flex-grow-1 mr-2">
                                <label>Adresse e-mail</label>
                                <input type="email" wire:model="newUser.email" class="form-control @error('newUser.email') is-invalid @enderror">
                                @error("newUser.email")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group flex-grow-1 mr-2">
                                <label>Piece d'identité</label>
                                <select wire:model="newUser.pieceIdentite" class="form-control @error('newUser.pieceIdentite') is-invalid @enderror">
                                    <option value="">------------------</option>
                                    <option value="CNI">CNI</option>
                                    <option value="PERMIS DE CONDUIRE">PERMIS DE CONDUIRE</option>
                                    <option value="PASSPORT">PASSPORT</option>
                                </select>
                                @error("newUser.pieceIdentite")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group flex-grow-1">
                                <label for="" class="">Numéro de piéce d'identité</label>
                                <input type="text" wire:model="newUser.numeroPieceIdentite" class="form-control @error('newUser.numeroPieceIdentite') is-invalid @enderror">
                                @error("newUser.numeroPieceIdentite")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>



                        <div class="d-flex">

                            <div class="form-group flex-grow-1 mr-2">
                                <label>Adresse</label>
                                <input type="text" wire:model="newUser.adresse" class="form-control @error('newUser.adresse') is-invalid @enderror">
                                @error("newUser.adresse")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group flex-grow-1 mr-2">
                                <label>Téléphone 1</label>
                                <input type="text" wire:model="newUser.telephone" class="form-control @error('newUser.telephone') is-invalid @enderror">
                                @error("newUser.telephone")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group flex-grow-1">
                                <label>Téléphone 2</label>
                                <input type="text" class="form-control" wire:model="newUser.telephone2">
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="form-group flex-grow-1 mr-2">
                                <label>Service</label>
                                <select wire:model="newUser.service_id" class="form-control @error('newUser.service_id') is-invalid @enderror">
                                    <option value="">------------------</option>
                                    @foreach ($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->nomDeService }}</option>
                                    @endforeach
                                </select>
                                @error("newUser.service_id")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group flex-grow-1 mr-2">
                                <label>Fonction</label>
                                <select wire:model="newUser.fonction_id" class="form-control @error('newUser.fonction_id') is-invalid @enderror">
                                    <option value="">------------------</option>
                                    @foreach ($fonctions as $fonction)
                                        <option value="{{ $fonction->id }}">{{ $fonction->nom }}</option>
                                    @endforeach
                                </select>
                                @error("newUser.fonction_id")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group flex-grow-1">
                                <label>Niveau d'étude</label>
                                <input type="text" wire:model="newUser.niveauEtude" class="form-control @error('newUser.niveauEtude') is-invalid @enderror">
                                @error("newUser.niveauEtude")
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="">Mot de passe</label>
                            <input type="text" class="form-control" disabled placeholder="password">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary flex-grow-1 mr-2">Enregistrer</button>
                    </div>
                </form>
            {{-- </div> --}}
        </div>
    </div>
</div>

<script>
    window.addEventListener("showSuccessMessage", event => {
        Swal.fire({
            position: "top-end",
            icon: "success",
            toast: "true",
            title: event.detail.message || "Employé créé avec succès !",
            showConfirmButton: false,
            timer: 3000
        })
    })
</script>