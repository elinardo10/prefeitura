@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Nova Publicação</div>

            <div class="panel-body">

               <a href="{{ route('admin.listar') }}"  class="btn btn-primary pull-right btn-tooltip" data-toggle="tooltip" data-placement="top" title="" data-container="body" data-original-title="Voltar"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
<br />
<br />

<div class="col-md-6 col-sm-6 col-xs-12">

        @include('partials._messages')
 
            <form  action="{{route('admin.store')}}" method="post">

            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />

            <div class="form-group ">
            <label>Nome</label>
            <input class="form-control" name="nome" >
            </div>

            <div class="form-group">
            <label>Cidade</label>
            <input type="text" class="form-control" name="nascimento" >
            </div>

            <div class="form-group">
            <label>Estado</label>
            <input class="form-control" name="valor" >
            </div>

            <div class="form-group">
            <label>Nascimento</label>
            <input class="form-control" name="quantidade" >
            </div> 

            <div class="form-group">
                <label>Cliente especial?</label>
                  <input type="checkbox" name="cliente_especial" value="">
              
            </div>   

            <button type="submit" class="btn btn-raised btn-primary">cadastrar</button>


            </form>
            </div>
        </div>
    </div>
</div>

@endsection
