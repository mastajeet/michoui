@extends('layout')

@section('Content')

    <h2>Qu'est-ce qu'un méchoui?</h2>
    @include('partials.carousel')
<br>
    <a class="btn btn-primary" href={!! route("WhereIsTheChalet") !!} >
    Comment s'y rendre
    </a>

    <a class="btn btn-primary" href={!! route("Baluchon") !!} >
   A ne pas oublier dans votre baluchon
    </a>


    <h2> Avez vous réservé votre place?</h2>
    <h4> {!! link_to_route('InvitationEntry.create',"Non - je veux réserver ma place et manger du cochon entre amis",null,['class'=>"btn btn-primary"]) !!}</h4>
    <h4> {!! link_to_route('InvitationEntry.index',"Oui - j'ai juste le goût de checker qui qui viens",null,['class'=>"btn btn-primary"]) !!}</h4>





    @endsection