@extends('layouts.main')

@section('title', 'Clientes')

@section('content')

            <!--content começo-->

            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row ">
                                <div class="col-sm-8">
                                    <button type="button" class="btn btn-primary">Incluir</button>
                                    <button type="button" class="btn btn-primary">Imprmir</button>
                                </div>
                                <div class="col-sm-4">

                                    <div class="butao-config">
                                        <button type="button" class="btn btn-primary"><ion-icon name="settings-outline"></ion-icon></button>
                                    </div>

                                    <div class="search-box">
                                        <i class="material-icons"></i>
                                        <input type="text" class="form-control form-control-sm" placeholder="Pesquisar">
                                    </div>


                                    <div class="filtro-pesquisa">
                                        <select id="inputEstado" class="form-control form-control-sm">
                                            <option selected>Nome</option>
                                            <option>Telefone</option>
                                            <option>E-mail</option>
                                          </select>
                                    </div>

                                </div>
                            </div>

                            <div class="row filtro">
                                <div class="col-sm-12">
                                    <span>> Filtros:</span><span class="filtro-selected">Nenhum</span>
                                </div>
                            </div>

                        </div>

                        <!-- Alerta de cadastro de cliente -->
                        @if (session('msg'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('msg') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nome <i class="fa fa-sort"></i></th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                <tr>
                                    
                                    <td>
                                        <a href="/clientes/{{ $cliente->id }}" class="view" title="View" data-toggle="tooltip">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="edit" title="Edit" data-toggle="tooltip">
                                            <ion-icon name="create-outline"></ion-icon>
                                        </a>
                                        <a href="#" class="delete" title="Delete" data-toggle="tooltip">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </a>
                                    </td>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->telefone }}</td>
                                    <td>{{ $cliente->email }}</td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                        <div class="clearfix">
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
            <!--content final-->
@endsection
        