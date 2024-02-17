<!-- Header -->
<header id="home">
    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
        <div class="container-full">
            <div class="attr-nav button fixed-nav nav-buttons">
                <ul>
                    <li>
                        <a href="#">Entrar</a>
                    </li>
                    <li>
                        <a href="#">Cadastrar</a>
                    </li>
                </ul>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{route('site.home')}}">
                    <h3 class="logo-h1 logo logo-display" >Autentic Personal</h3>
                    <h3 class="logo-fixed logo logo-scrolled">Autentic Personal</h3>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="#" data-out="#">
                    <li>
                        <a class="smooth-menu" href="{{route('site.home')}}">Página Inicial</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="{{route('site.home')}}">Sobre NÓS</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="{{route('site.home')}}">Serviços</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="{{route('site.home')}}">Planos</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="{{route('site.contact')}}">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
