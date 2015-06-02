@extends('layout')

@section('Content')
<h2> Liste des personnes qui viennent</h2>
<table class="table">
    @foreach($Entries as $Entry)
    <tr>
        <td width="250" class="h5">{{$Entry->nomPrincipal}}
            @if( $Entry->plusOne<>"" )
                <br> +  {{ $Entry->plusOne }}
            @endif
        </td>

        @if($Entry->cafe<>0)
            <td colspan=2 width="500" class="h5 text-danger">Responsable du café

            </td>

        @elseif($Entry->sauce<>0)

            <td colspan=2 width="500" class="h5 text-danger">sauce boss
            </td>

        @else

        <td width="250" class="h5">
            @if( $Entry->typeNourriture=="Desert" )
                <span class="text-danger">
            @elseif($Entry->typeNourriture=="Accompagnement" )
                        <span class="text-warning">
            @endif
                            {{ $Entry->typeNourriture }}</span>
        </td>

        <td width="250" class="h5">
            @if( $Entry->typeNourriture=="Desert" )
                <span class="text-danger">
            @elseif($Entry->typeNourriture=="Accompagnement" )
                <span class="text-warning">
            @endif
                    {{ $Entry->nourriture }}</span>
        </td>

        @endif

    </tr>
    @endforeach
</table>
<br>
<a class="btn btn-primary" href="\" >
    Retour à la page princpale
</a>
    @endsection