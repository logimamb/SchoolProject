<aside class="control-sidebar control-sidebar-dark">

    <div class="bg-dark">
        <div class="card-body box-profile bg-dark">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/utilisateur.png') }}"
                    alt="User profile picture">
            </div>
            <h3 class="profile-username text-center ellipsis">{{ userFullName() }}</h3>
            <p class="text-muted text-center">{{ getRolesName() /*Auth()->user()->fonction->nom*/}}</p>
            <ul class="list-group bg-dark mb-3">
                <li class="list-group-item">
                    <a class="d-flex align-items-center" href=""><i class="fa fa-lock pr-2"></i><b>Mot de passe</b>
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="d-flex align-items-center" href=""><i class="fa fa-user pr-2"></i><b>Mon profile</b>
                    </a>
                </li>
            </ul>
            <a class="btn btn-primary btn-block" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Déconnexion
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</aside>