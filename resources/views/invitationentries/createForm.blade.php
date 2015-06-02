@extends('layout')

@section('Content')
    {!! Form::open(['method'=>'POST','url'=>route('InvitationEntry.store')]) !!}
    {!! Form::setModel('InvitationEntry',route('InvitationEntry.store')) !!}
    <div class="form-group">
        {!! Form::label('NomPrincipal','Nom :',['class'=>'form-label']) !!}
        {!! Form::text('NomPrincipal',NULL,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('plusOne','Qui est votre +1 (si applicable) :',['class'=>'form-label']) !!}<br>
        {!! Form::text('plusOne',NULL,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('typeNourriture','Type de nourriture :',['class'=>'form-label']) !!}<br>
        {!! Form::select('typeNourriture',$typeNourriture,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nourriture','Nourriture que vous apportez :',['class'=>'form-label']) !!}<br>
        {!! Form::text('nourriture',NULL,['class'=>'form-control']) !!}
    </div>

    @if(!$cafe)
    <div class="form-group">
        {!! Form::label('cafe','Je souhaite être le responsable de la cafétière 12 tasses et + pour le lendemain',['class'=>'form-label']) !!}<br>
        {!! Form::checkbox('cafe',1,0) !!}
    </div>
    @endif

    @if(!$sauce)
    <div class="form-group">
        {!! Form::label('sauce','J\'ai aucune idée de quoi apporter, je vais apporter la sauce brune pour les 40 personnes....',['class'=>'form-label']) !!}<br>
        {!! Form::checkbox('sauce',1,0) !!}
    </div>
    @endif

    <div class="form-group">
        {!! Form::label('notes','Notes pour les organisateurs',['class'=>'form-label']) !!}<br>
        {!! Form::textarea('notes',null,['class'=>'form-control'] ) !!}
    </div>

    <a class="btn btn-primary" href="\" >
        Retour à la page princpale
    </a>
    {!! Form::submit('Je réserve ma place',['class'=>'btn btn-primary']) !!}




@endsection
