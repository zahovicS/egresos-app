<li class="dropdown ms-2">
    <a class="rounded-circle" href="#!" role="button" id="dropdownUser"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="avatar avatar-md avatar-indicators avatar-online">
            <img alt="avatar" src="{{ PublicPath('assets/images/avatar/avatar-1.jpg') }}" class="rounded-circle">
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
        <div class="px-4 pb-0 pt-2">
            <div class="lh-1 ">
                <h5 class="mb-1">{{ auth()->user()["fullname"] }}</h5>
                {{-- <a href="#!" class="text-inherit fs-6">View my profile</a> --}}
            </div>
            <div class=" dropdown-divider mt-3 mb-2"></div>
        </div>
        <ul class="list-unstyled">
            {{-- <li>
                <a class="dropdown-item d-flex align-items-center" href="#!">
                    <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>Edit Profile
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="#!">
                    <i class="me-2 icon-xxs dropdown-item-icon" data-feather="activity"></i>Activity Log
                </a>
            </li> --}}
            {{-- <li>
                <a class="dropdown-item d-flex align-items-center" href="#!">
                    <i class="me-2 icon-xxs dropdown-item-icon" data-feather="settings"></i>Configuración
                </a>
            </li> --}}
            <li>
                <a class="dropdown-item" href="/auth/logout">
                    <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>Cerrar sesión
                </a>
            </li>
        </ul>
    </div>
</li>
