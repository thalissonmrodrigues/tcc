<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Handlers\DataBaseHandler;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function __construct()
    {
        $this->db = new Subject();
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
        $subjects = DataBaseHandler::pagination($this->db);
        $dataFilter = [];
        return view('Subjects.ListBuilder.SubjectListBuilder', compact(
            'active_menu_header',
            'subjects',
            'dataFilter',
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
        $route_form = true;
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
            return redirect()->back()->with('danger', 'Não foi possivel criar a matéria!');
        }

        $data = [
            'name' => $request->name,
        ];
        DataBaseHandler::insert($this->db, $data);
        return redirect(route('list.subject'))->with('success', 'Matéria criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if ($request->name) {
            $data = [
                'name' => $request->name,
            ];

            $subjects = DataBaseHandler::get($this->db, $data);
            if (count($subjects) > 0) {
                $active_menu_header = 'materias';
                $subjects = $subjects;
                $dataFilter = $request->except('_token');
                return view('Subjects.ListBuilder.SubjectListBuilder', compact(
                    'active_menu_header',
                    'subjects',
                    'dataFilter',
                ));
            }
        }

        $alert = $request->name ?
            'Não foi possivel localizar a matéria: ' . $request->name :
            'Nome da matéria está vazio';

        return redirect()->back()->with('danger', $alert);
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
        $route_form = false;
        $subject = DataBaseHandler::getById($this->db, $id);
        $name_subject = $subject->name;
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
            return redirect()->back()->with('danger', 'Não foi possivel editar a matéria!');
        }

        $data = [
            'name' => $request->name,
        ];
        DataBaseHandler::update($this->db, $id, $data);
        return redirect(route('list.subject'))->with('success', 'Matéria editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DataBaseHandler::delete($this->db, $id);
        return redirect(route('list.subject'))->with('success', 'Matéria excluida com sucesso!');
    }
}
