@extends('layout')

@section('Content')

    <h2>Qu'est-ce qu'un méchoui?</h2>
    @include('partials.carousel')

    <a class="btn btn-primary" href={!! route("WhereIsTheChalet") !!} >
    Comment s'y rendre
    </a>


    <h2> Avez vous réservé votre place?</h2>
    <h4> {!! link_to_route('InvitationEntry.create',"Non - je veux réserver ma place et manger du cochon entre amis") !!}</h4>
    <h4> {!! link_to_route('InvitationEntry.index',"Oui - j'ai juste le goût de checker qui qui viens") !!}</h4>





    @endsection