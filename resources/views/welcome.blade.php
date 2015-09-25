@extends ('layouts.master')

@section ('page-header')
    <h1>
        Título
        <small>Descrição opcional</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Título</li>
    </ol>
@endsection

@section ('content')
    <p>Página de teste!</p>
@endsection