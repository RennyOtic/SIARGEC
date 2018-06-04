{{-- ### $Topbar ### --}}
<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left">
            {{-- ### Boton de abrir y cerrar el menu ### --}}
            <li>
                <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                    <i class="ti-menu"></i>
                </a>
            </li>
            {{-- ### Boton de abrir y cerrar busqueda ### --}}
            <li class="search-box">
                <a class="search-toggle no-pdd-right" href="javascript:void(0);">
                    <i class="search-icon ti-search pdd-right-10"></i>
                    <i class="search-icon-close ti-close pdd-right-10"></i>
                </a>
            </li>
            {{-- ### Boton de    busqueda ### --}}
            <li class="search-input">
                <input class="form-control" type="text" placeholder="Buscar...">
            </li>
        </ul>
        <ul class="nav-right">
            <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                    <div class="peer mR-10">
                        <i class="w-2r bdrs-50p ti-user"></i>
                    </div>
                    <div class="peer">
                        <span class="fsz-sm c-black">
                            {{ Auth::user()->fullName() }}
                            <i class="ti-angle-down" style="font-size: 10px"></i>
                        </span>
                    </div>
                </a>
                <ul class="dropdown-menu fsz-sm">
                    <li>
                        <a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"  data-toggle="modal" data-target="#change-password">
                            <i class="ti-settings mR-10"></i>
                            <span>Cambiar Clave</span>
                        </a>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti-power-off mR-10"></i>
                            <span>Salir</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
