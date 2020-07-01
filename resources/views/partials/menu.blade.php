
  <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('homepage') }}">
        <img id="logo" src="{{ asset('images/logo.png') }}" alt="Boolean logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('homepage') }}">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="">Contatti</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="">Domande frequenti</a>
        </li>
      </ul>
    </div>
  </nav>
