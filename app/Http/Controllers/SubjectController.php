<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('America/Sao_Paulo');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_menu_header = 'materias';

        $subjects = Subject::all();

        return view('Subjects.ListBuilder.SubjectListBuilder', compact(
           'active_menu_header',
           'subjects',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active_menu_header = 'materias';
        $action = 'Adicionar Materia';
        $name_subject = '';
        $route_form = TRUE;

        return view('Subjects.Forms.SubjectForm', compact(
           'active_menu_header',
           'action',
           'name_subject',
           'route_form',
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->name) {
            return redirect()->back()->with('danger','Não foi possivel criar a matéria!');
        }

        $subject = new Subject();

        $subject->name = $request->name;

        $subject->save();

        return redirect(route('list.subject'))->with('success','Matéria criada com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active_menu_header = 'materias';
        $action = "Editar Matéria";
        $route_form = FALSE;

        $entity = Subject::where('id', $id)->first();

        $name_subject = $entity->name;


        return view('Subjects.Forms.SubjectForm', compact(
            'id',
            'active_menu_header',
            'action',
            'name_subject',
            'route_form',
        ));
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
        if (!$id || !$request->name) {
            return redirect()->back()->with('danger','Não foi possivel editar a matéria!');
        }

        $entity = Subject::where('id', $id)->first();

        $entity->name = $request->name;

        $entity->save();

        return redirect(route('list.subject'))->with('success','Matéria editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subject::destroy($id);
        return redirect(route('list.subject'))->with('success','Matéria excluida com sucesso!');;
    }
}
