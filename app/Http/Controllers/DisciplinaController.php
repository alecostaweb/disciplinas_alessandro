<?php

namespace App\Http\Controllers;

use App\Disciplina;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{

	public function __construct()
	{
    	$this->middleware('auth')->except(['index','show']);
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $disciplinas = Disciplina::all();
	    return view('disciplinas.index', ['disciplinas' => $disciplinas] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disciplinas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $disciplina = new Disciplina;
	    $disciplina->titulo = $request->titulo;
	    $disciplina->ementa = $request->ementa;
	    $disciplina->save();
	    return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function show(Disciplina $disciplina)
    {
        return view('disciplinas.show', compact('disciplina'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function edit(Disciplina $disciplina)
    {
        return view('disciplinas.edit', compact('disciplina'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disciplina $disciplina)
    {
        # dd($diciplina); # Dump ou no $request
        
        $disciplina->titulo = $request->titulo;
        $disciplina->ementa = $request->ementa;
        $disciplina->save();
        return redirect("/disciplinas/$disciplina->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disciplina $disciplina)
    {
        $disciplina->delete();
        return redirect('/');
    }

    public function createTurma($disciplina_id)
    {
        $disciplina = Disciplina::find($disciplina_id);
        return view('disciplinas.turmas.create', compact('disciplina'));

        # return view('disciplinas.turmas.create', compact('disciplina_id'));
    }

    public function storeTurma(Request $request, $disciplina_id)
    {
        $turma = new \App\Turma;
        $turma->ministrante = $request->ministrante;
        $turma->inicio = Carbon::createFromFormat('d/m/Y', $request->inicio);
        $turma->fim = Carbon::createFromFormat('d/m/Y', $request->fim); 
        $turma->bibliografia = $request->bibliografia;
        $turma->disciplina_id = $request->disciplina_id;
        # $turma->save();
        $salvaTurma = Disciplina::find($disciplina_id)->turmas()->save($turma); 
        return redirect("/disciplinas/$disciplina_id");
    }
}
