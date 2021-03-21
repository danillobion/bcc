@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 2rem;">
    <!-- Outros destaques-->
    <div class="row">
        <div class="container_outros_destaques">
            <div class="form-row">
                <div class="col-md-12" style="margin-bottom: 13px;font-size: 24px; font-weight: 700; margin-left: 10px;">GRUPOS DE PESQUISA</div>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-9" style="margin:10px">
            <div class="card">
                <div class="card-header">Todos os grupos de pesquisa</div>
                <div class="container">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col" style="width: 100%">Nome</th>
                            <th scope="col">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Exemplo 1 </td>
                            <td>Botões</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Exemplo 2 </td>
                            <td>Botões</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Exemplo 3 </td>
                            <td>Botões</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Exemplo 4 </td>
                            <td>Botões</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Exemplo 5 </td>
                            <td>Botões</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection