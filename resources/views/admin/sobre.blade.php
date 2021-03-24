@extends('layouts.app')

@section('content')

<div class="container" style="margin-top: 2rem;">
    <!-- Outros destaques-->
    <div class="row">
        <div class="container_outros_destaques">
            <div class="form-row">
                <div class="col-md-12" style="margin-bottom: 13px;font-size: 24px; font-weight: 700; margin-left: 10px;">SOBRE</div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    @if ($message = Session::get('sucesso'))
        <div class="alert alert-success alert-block fade show" style="position: fixed; z-index: 1000; left: 1rem; bottom: 1rem;">
            <!--<button type="button" class="close" data-dismiss="alert">×</button>-->
            <strong>{{$message}}</strong>
        </div>
    @elseif($message = Session::get('erro'))
        <div class="alert alert-success alert-block fade show" style="position: fixed; z-index: 1000; left: 1rem; bottom: 1rem;">
            <!--<button type="button" class="close" data-dismiss="alert">×</button>-->
            <strong>{{$message}}</strong>
        </div>
    @endif
    <form id="id_form_sobre" method="post" enctype="multipart/form-data" action="{{ route('sobre.admin.update') }}">
        @csrf
        <div class="row justify-content-left" style="background-color:#F9F9F9; padding-top:15px; border-radius:12px">
            <div class="col-md-12" >
                <textarea class="form-control" id="summary-ckeditor" name="texto">{{$texto}}</textarea>
            </div>
            <div class="col-md-12" style="text-align: right">
            </div>
            
            <div class="col-md-12" style="margin-top: 1rem; margin-bottom:1rem; text-align:right;">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-success" style="width: 100%" id="myBtn">Atualizar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- mensagem -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Atualizar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Deseja atualizar a seção Sobre?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Não</button>
            <button type="button" class="btn btn-success" onclick="submit_sobre()">Sim</button>
          </div>
        </div>
      </div>
  </div>



<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>


@endsection
