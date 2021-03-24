@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 2rem;">
    <!-- Outros destaques-->
    <div class="row">
        <div class="container_outros_destaques">
            <div class="form-row">
                <div class="col-md-12" style="margin-bottom: 13px;font-size: 24px; font-weight: 700; margin-left: 10px;">SOBRE</div>
                
                <div class="row" style="width: 100%">
                    <div class="col-md-12" style="margin-bottom: 10px; width:100%">{!! $texto !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
