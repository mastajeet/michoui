<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\InvitationEntry;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\View;

class InvitationEntryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('invitationentries.index')->with(['Entries'=>InvitationEntry::all()]);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        $Sauce = InvitationEntry::where('sauce','=',1)->get()->count();
        $cafe = InvitationEntry::where('cafe','=',1)->get()->count();
        $Dessert = InvitationEntry::where('typeNourriture','=','Dessert')->get()->count();
        $Accompagnement = InvitationEntry::where('typeNourriture','=','Accompagnement')->get()->count();

        if($Dessert>$Accompagnement && ($Dessert-$Accompagnement)>=5){
            $typeNourriture = [''=>'','Accompagnement'=>'Accompagnement'];
        }elseif($Accompagnement>$Dessert && ($Accompagnement-$Dessert)>=5){
            $typeNourriture = [''=>'','Dessert'=>'Dessert'];
        }else{
            $typeNourriture = [''=>'','Accompagnement'=>'Accompagnement','Dessert'=>'Dessert'];
        }


        return view('invitationentries.createForm')->with(['cafe'=>$cafe,'sauce'=>$Sauce,'typeNourriture'=>$typeNourriture]);


	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

    public function store(InvitationEntry $Entry, Request $request){
        $Entry->fill($request->all());
        $Entry->save();
        return redirect(route('InvitationEntry.index'));
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
