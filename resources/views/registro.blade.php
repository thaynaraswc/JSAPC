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
            <a class="nav-link" href="#">Registro <span class="sr-only">(current)</span></a>
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
    <nav style="margin-top: 5%" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Início</a></li>
            <li class="breadcrumb-item"><a href="#">Registro de empresa</a></li>
            
        </ol>
    </nav>
    <div style="margin-top: 5%" class="container">
        <div class="card">
            <h5 class="card-header text-center">Registro da empresa</h5>
            <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="tipoEstabelecimento">Tipo de estabelecimento / evento</label>
                    <select class="form-control" id="tipoEstabelecimento">
                    <option>Fábrica de cimento</option>
                    <option>Pedreira</option>
                    <option>Caieira</option>
                    <option>Fornecedora, locadora e ou instaladora de sistema de alarme e monitoramento</option>
                    <option>Industrializaçao e/ou comercialização de explosivo e outros produtos controlados</option>
                    <option>Industrialização e/ou comercialização de fogos de artifício ou pirotécnicos</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nomeFantasia">Nome Fantasia</label>
                            <input type="text" class="form-control" id="nomeFantasia" placeholder="Nome fantasia">
                        </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" class="form-control" id="cpnj" placeholder="CNPJ">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="razaoSocial">Razão Social</label>
                            <input type="text" class="form-control" id="razaoSocial" placeholder="Razão Social">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="inscricaoEstadual">Inscrição Estadual</label>
                            <input type="text" class="form-control" id="inscricaoEstadual" placeholder="Inscrição Estadual">
                        </div>
                    </div>
                </div>
                <div style="border-top: 3px solid #1b88fd">
                <div class="row" style="margin-top: 3%">
                    <div class="col">
                        <div class="form-group">
                        <label for="tipoEndereco">Tipo de endereço</label>
                        <select class="form-control" id="tipoEndereco">
                        <option>Comercial</option>
                        <option>Residencial</option>
                        </select>
                    </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                            <label for="cepEndereco">CEP</label>
                            <input type="text" class="form-control" id="cepEndereco" placeholder="CEP">
                        </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                            <label for="bairoEndereco">Bairro</label>
                            <input type="text" class="form-control" id="bairroEndereco" placeholder="Bairro">
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" id="endereco" placeholder="endereco">
                </div>

                <div class="row" >
                <div class="col">
                    <div class="form-group">
                        <label for="numeroEndereco">Número</label>
                        <input type="text" class="form-control" id="numeroEndereco" placeholder="Número">
                    </div>
                    </div>
                
                    <div class="col">
                        <div class="form-group">
                            <label for="complementoEndereco">Complemento</label>
                            <input type="text" class="form-control" id="complementoEndereco" placeholder="Complemento">
                        </div>
                    </div>
                    <div class="col">
                    <div class="form-group">
                            <label for="municipioEndereco">Município</label>
                            <input type="text" class="form-control" id="municipioEndereco" placeholder="Município">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="referenciaEndereco">Referência</label>
                    <textarea class="form-control" id="referenciaEndereco" rows="2"></textarea>
                </div>

                <div style="border-top: 3px solid #1b88fd">
                
                    <div class="card">
                        <h5 class="card-header">Dados pessoais</h5>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="nomeResponsavelEmp">Nome do responsável</label>
                                    <input type="text" class="form-control" id="nomeResponsavelEmp" placeholder="Nome do responsável">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nomeMaeResponsavelEmp">Nome da mãe</label>
                                            <input type="text" class="form-control" id="nomeMaeResponsavelEmp" placeholder="Nome da mãe">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="nomePaiResponsavelEmp">Nome do pai</label>
                                            <input type="text" class="form-control" id="nomePaiResponsavelEmp" placeholder="Nome do pai">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
                </div>




                <a href="#" style="margin-top:3%; float:right" class="btn btn-primary">Próximo</a>
            </form>
               
            </div>
        </div>
    </div>
</div>



@endsection