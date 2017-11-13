    
<div class="col-md-6">
    <div class="form-group label-floating ">
        {!! Form::label('nome', 'Nome', array('class'=>'control-label')) !!}
        {!! Form::text('nome', null, array('class'=>'form-control')) !!}
    </div>
</div> 

<div class="col-md-6">
    <div class="form-group ">
        {!! Form::label('cidade', 'Cidade', array('class'=>'control-label')) !!}
        {!! Form::text('cidade', null, array('class'=>'form-control')) !!}
    </div>
</div>    

<div class="col-md-6">
    <div class="form-group ">
        {!! Form::label('estado', 'Estado', array('class'=>'control-label')) !!}
        {!! Form::select('estado', $customersForSelect, null, ['class'=>'form-control']); !!}
    </div>
</div>        

<div class="col-md-6">
    <div class="form-group ">
        {!! Form::label('nascimento', 'Nascimento', array('class'=>'control-label')) !!}
        {!! Form::text('nascimento', null, array('class'=>'form-control')) !!}
    </div>
</div> 

<div class="col-md-12">
   <div class="form-group">
        {!! Form::label('cliente_especial', 'Cliente Especial?', ['class'=>'control-label']) !!}
        {!! Form::checkbox('cliente_especial', null ) !!}
   </div> 
 </div>       