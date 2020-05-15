<nav class="navbar navbar-expand-md navbar-secondary fixed-top bg-secondary">
  <a class="navbar-brand" href="#">UPB-Developpeur</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('path_home')}}">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('path_about')}}">A propos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Nos Developpeurs</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contactez-nous</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Les technos</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Python</a>
          <a class="dropdown-item" href="#">Php</a>
          <a class="dropdown-item" href="#">JQuery</a>
          <a class="dropdown-item" href="#">Javascript</a>
          <a class="dropdown-item" href="#">VueJs</a>
          <a class="dropdown-item" href="#">Angularjs</a>
        </div>
      </li>
    </ul>
  <ul class="nav navbar-nav navbar-rigth">
    <li class="nav-item"><a class="nav-link" href="#">Se connecter</a></li>
    <li class="nav-item"><a class="nav-link" href="#">S'inscrire</a></li>
  </ul>
  </div>
</nav>