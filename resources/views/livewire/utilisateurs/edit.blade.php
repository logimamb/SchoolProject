<div class="row p-4 pt-5">
    <div class="col-12">
        {{-- <div class="card card-primary"> --}}
            <div class="card-header bg-primary d-flex align-items-center">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire d'édition'd'un nouvel employé
                </h3>
                <div class="card-tools d-flex align-items-right">
                    <button type="button" wire:click.prevent="goToListUser()"
                        class="btn btn-danger flex-grow-1 mr-2">Retourner à la liste des employés</button>
                </div>

            </div>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>

            <form wire:submit.prevent="updateUser()" role="form">

                <div class="card-body">

                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <label>Nom</label>
                            <input type="text" wire:model="editUser.nom"
                                class="form-control @error('editUser.nom') is-invalid @enderror">
                            @error("editUser.nom")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1 mr-2">
                            <label>Prénom</label>
                            <input type="text" wire:model="editUser.prenom"
                                class="form-control @error('editUser.prenom') is-invalid @enderror">
                            @error("editUser.prenom")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @if ($editUser["sexe"] == "H")
                        <img src="{{ asset('images/homme.png') }}" alt="Image de l'employé"
                            class="form-group flex-grow-2" style="width: 150px;height:150px; background-color: maroon">

                        @else
                        <img src="{{ asset('images/femme.png') }}" alt="Image de l'employé"
                            class="form-group flex-grow-2" style="width: 150px;height:150px; background-color: maroon">
                        @endif
                    </div>

                    <div class="d-flex" style="margin-top: -75px; width:82.5%;">
                        <div class="form-group flex-grow-1 mr-2">
                            <label>Sexe</label>
                            <select wire:model="editUser.sexe"
                                class="form-control @error('editUser.sexe') is-invalid @enderror">
                                <option value="">------------------</option>
                                <option value="H">Homme</option>
                                <option value="F">Femme</option>
                            </select>
                            @error("editUser.sexe")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group flex-grow-1 mr-2">
                            <label>Situation matrimoniale</label>
                            <select wire:model="editUser.situationMatrimoniale"
                                class="form-control @error('editUser.situationMatrimoniale') is-invalid @enderror">
                                <option value="">------------------</option>
                                <option value="CELIBATAIRE">CELIBATAIRE</option>
                                <option value="MARIE">MARIE</option>
                                <option value="DIVORCE">DIVORCE</option>
                                <option value="VEUVE">VEUVE</option>
                                <option value="VEUF">VEUF</option>
                            </select>
                            @error("editUser.situationMatrimoniale")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label>Nombre d'enfants</label>
                            <input type="text" wire:model="editUser.nombrEnfant" class="form-control">
                        </div>
                    </div>

                    <div class="d-flex">

                        <div class="form-group flex-grow-1 mr-2">
                            <label>Adresse e-mail</label>
                            <input type="email" wire:model="editUser.email"
                                class="form-control @error('editUser.email') is-invalid @enderror">
                            @error("editUser.email")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group flex-grow-1 mr-2">
                            <label>Piece d'identité</label>
                            <select wire:model="editUser.pieceIdentite"
                                class="form-control @error('editUser.pieceIdentite') is-invalid @enderror">
                                <option value="">------------------</option>
                                <option value="CNI">CNI</option>
                                <option value="PERMIS DE CONDUIRE">PERMIS DE CONDUIRE</option>
                                <option value="PASSPORT">PASSPORT</option>
                            </select>
                            @error("editUser.pieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label>Numéro de piéce d'identité</label>
                            <input type="text" wire:model="editUser.numeroPieceIdentite"
                                class="form-control @error('editUser.numeroPieceIdentite') is-invalid @enderror">
                            @error("editUser.numeroPieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>



                    <div class="d-flex">

                        <div class="form-group flex-grow-1 mr-2">
                            <label>Adresse</label>
                            <input type="text" wire:model="editUser.adresse"
                                class="form-control @error('editUser.adresse') is-invalid @enderror">
                            @error("editUser.adresse")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group flex-grow-1 mr-2">
                            <label>Téléphone 1</label>
                            <input type="text" wire:model="editUser.telephone"
                                class="form-control @error('editUser.telephone') is-invalid @enderror">
                            @error("editUser.telephone")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label>Téléphone 2</label>
                            <input type="text" class="form-control" wire:model="editUser.telephone2">
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <label>Service</label>
                            <select wire:model="editUser.service_id"
                                class="form-control @error('editUser.service_id') is-invalid @enderror">
                                <option value="">------------------</option>
                                @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{ $service->nomDeService }}</option>
                                @endforeach
                            </select>
                            @error("editUser.service_id")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group flex-grow-1 mr-2">
                            <label>Fonction</label>
                            <select wire:model="editUser.fonction_id"
                                class="form-control @error('editUser.fonction_id') is-invalid @enderror">
                                <option value="">------------------</option>
                                @foreach ($fonctions as $fonction)
                                <option value="{{ $fonction->id }}">{{ $fonction->nom }}</option>
                                @endforeach
                            </select>
                            @error("editUser.fonction_id")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group flex-grow-1">
                            <label>Niveau d'étude</label>
                            <input type="text" wire:model="editUser.niveauEtude"
                                class="form-control @error('editUser.niveauEtude') is-invalid @enderror">
                            @error("editUser.niveauEtude")
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            
                        </div>

                        <div class="form-group flex-grow-1 mr-2">
                            
                        </div>

                        <div class="form-group flex-grow-1">
                            
                        </div>
                    </div> --}}
                    

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary flex-grow-1 mr-2">Appliquer les modifications</button>
                </div>
            </form>
            {{--
        </div> --}}
    </div>
</div>
</div>

<script>
    window.addEventListener("showSuccessMessage", event => {
        Swal.fire({
            position: "top-end",
            icon: "success",
            toast: "true",
            title: event.detail.message || "Employé mis à jour avec succès !",
            showConfirmButton: false,
            timer: 3000
        })
    })
</script>