@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">¿Qué cocino hoy?</div>

                <div class="panel-body">
                    <input type="text" name="buscador" id="buscador"/>
                    <button type="button" class="btn btn-primary">Buscar</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
