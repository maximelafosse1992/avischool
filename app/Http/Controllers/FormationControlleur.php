<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Illuminate\support\Facades\Input;
use App\formation;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //affichage de la liste 
    public function index()
    {
        $formation = formation::All();
        return view('formation.index')->with('formation', $formation);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        $regles=array('intitule'=>'required',
                      'prix'=>'numeric',
                      'note'=>'numeric',
                      'idDomaine'=>'required',
                      'idFiliere'=>'required',
                      'idOrganisme'=>'required',
                      'idNiveauxEntree'=>'required',
                      'idNiveauxSortie'=>'required'
                    );
        $validator = Validator::make(Input::all(), $regles);
        if($validator->fails()){
             return Redirect::to('formation/create')
                ->withErrors($validator)
                ->withInput(Input::all());
        } else { 

        $formation = new formation;
        $formation->intitule = Input::get('intitule');
        $formation->duree = Input::get('duree');
        $formation->prix = Input::get('prix');
        $formation->note = Input::get('note');
        $formation->description = Input::get('description');
        $formation->idDomaine = Input::get('idDomaine');
        $formation->idFiliere = Input::get('idFiliere');
        $formation->idOrganisme = Input::get('idOrganisme');
        $formation->idNiveauxEntree = Input::get('idNiveauxEntree');
        $formation->idNiveauxSortie = Input::get('idNiveauxSortie');

        $formation->save();

        return Redirect::to('formation');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formation = formation::find($id);
        return view('formation.show')->with('formation', $formation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formation = formation::find($id);
        return view('formation.edit')->with('formation',$formation); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validation
        $regles=array('intitule'=>'required',
                    'idDomaine'=>'required',
                    'idFiliere'=>'required',
                    'idOrganisme'=>'required',
                    'idNiveauxEntree'=>'required',
                    'idNiveauxSortie'=>'required'
                        );
            $validator = Validator::make(Input::all(),$regles);
            if($validator->fails()){
                return Redirect::to('formation/'. $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::all());
                } 
                else { 

                $formation = formation::find($id);
                $formation->intitule = Input::get('intitule');
                $formation->description = Input::get('description');
                $formation->duree = Input::get('duree');
                $formation->prix = Input::get('prix');
                $formation->idDomaine= 1;
                $formation->idFiliere= 1;
                $formation->idOrganisme= 1;
                $formation->idNiveauxEntree= 1;
                $formation->idNiveauxSortie= 1;
                $formation->save();

                return Redirect::to('formation');
                }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $formation= formation::find($id);
        $formation->delete();
        return Redirect::to('formation');
    }
}
