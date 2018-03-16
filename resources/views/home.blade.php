@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <img src="img/bto.png" style="width:70px; height:70px"/>
     <a class="navbar-brand" href="/home">SAPC</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/registro">Registro <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Relatórios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Vistoria</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alvará</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Anual</a>
              <a class="dropdown-item" href="#">Mensal</a>
              <a class="dropdown-item" href="#">Diário</a>
              <a class="dropdown-item" href="#">Por evento</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit"><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                    </a></button>
        </form>
      </div>
    </nav>
    </div>
</div>
@endsection
