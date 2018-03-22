@extends('shared.base')
@section('content')
<div class="panel panel-default">    
    <div class="panel-heading">Lista de Imóveis</div>

    <div class="row">
        <div class="container">
            <table class="table table-borbered">
                <thead>
                    <tr>
                        <th>Decrição</th>
                        <th>Endereço</th>
                        <th>Preço</th>
                        <th>Finalidade</th>
                        <th>Tipo</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($imoveis as $imovel)
                    <tr>
                        <td>{{$imovel->descricao}}</td>
                        <td>{{$imovel->logradouroEndereco}}</td>
                        <td>{{$imovel->preco}}</td>
                        <td>{{$imovel->finalidade}}</td>
                        <td>{{$imovel->tipo}}</td>
                        <td>
                            <a href="#"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                            <a href="{{route('imoveis.show', $imovel->id)}}"><i class="glyphicon glyphicon-zoom-in"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<a href="{{route('imoveis.create')}}"><button class="btn btn-primary">Adicionar imóvel</button></a>
@endsection