<div class="row p-4 pt-5">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire de création d'un nouvel
                    employé</h3>
            </div>

            <form action="" role="form">
                <div class="card-body">
                    {{-- <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Nom</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>
                    </div> --}}

                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <label>Nom</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group flex-grow-1">
                            <label>Prénom</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Sexe</label>
                        <select class="form-control">
                            <option value="">------------------</option>
                            <option value="H">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Adresse e-mail</label>
                        <input type="email" class="form-control" required>
                    </div>

                    <div class="d-flex">
                        <div class="form-group flex-grow-1 mr-2">
                            <label>Téléphone 1</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group flex-grow-1">
                            <label>Téléphone 2</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Piec d'identité</label>
                        <select class="form-control">
                            <option value="">------------------</option>
                            <option value="CNI">CNI</option>
                            <option value="PERMIS DE CONDUIRE">PERMIS DE CONDUIRE</option>
                            <option value="PASSPORT">PASSPORT</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="" class="">Numéro de piece d'identité</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="" class="">Mot de passe</label>
                        <input type="password" class="form-control" disabled placeholder="Mot de passe">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary flex-grow-1 mr-2">Enregistrer</button>
                    <button type="button" wire:click.prevent="goToListUser()"
                        class="btn btn-danger flex-grow-1 mr-2">Retourner à la liste des employés</button>
                </div>
            </form>
        </div>
    </div>
</div>