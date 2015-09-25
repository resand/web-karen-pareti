<header>

    <div class="register-menu">
        {{--<ul class="navbar-list hide">
            <li class="navbar-item">Register</li>
            <li class="navbar-item">Login</li>
            <li class="navbar-item">Español</li>
        </ul>--}}
    </div>

    <div class="navbar yamm navbar-default">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand hide">Karen Pareti</a>
            </div>
            <div id="navbar-collapse-1" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ @$activeHome }}">
                        <a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="dropdown {{ @$activeShop }}">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            Tienda<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <ul class="col-sm-2 list-unstyled border-right">
                                            <li class="title-submenu">
                                                <a href="{{ route('catalog') }}">Mujeres</a>
                                            </li>
                                            <li><a href="{{ route('catalog.lusso') }}"> Lusso </a></li>
                                            <li><a href="{{ route('catalog.fiori') }}"> Fiori Colori </a></li>
                                            {{--<li><a href="#"> Ricamie </a></li>
                                            <li><a href="#"> Transparen </a></li>--}}
                                        </ul>
                                        <ul class="col-sm-2 list-unstyled border-right">
                                            <li class="title-submenu">
                                                <a href="#">Hombres</a>
                                            </li>
                                            <li><a href="#"> Próximamente</a></li>
                                        </ul>
                                        <ul class="col-sm-2 list-unstyled">
                                            <li class="title-submenu">
                                                <a href="#">Niños</a>
                                            </li>
                                            <li><a href="#"> Próximamente</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#modalContact">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>

</header>


