<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Handlers\ClassroomHandler;
use App\Http\Controllers\Handlers\DataBaseHandler;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function __construct()
    {
        $this->db = new Classroom();
        date_default_timezone_set('America/Sao_Paulo');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_menu_header = 'salas';
        $classrooms = DataBaseHandler::pagination($this->db);
        $rooms = [];

        foreach ($classrooms as $key => $classroom) {
            $teacher = ClassroomHandler::getRepresentativeById(
                $classroom->representative_teacher_id,
                'teacher',
                ['name'],
            );

            $student = ClassroomHandler::getRepresentativeById(
                $classroom->representative_student_id,
                'student',
                ['name'],
            );

            $rooms[$key] = [
                'id' => $classroom->id,
                'serie' => $classroom->serie,
                'letter' => $classroom->letter,
                'period' => $classroom->period,
                'representative_teacher' => $teacher ? $teacher->name : 'Nenhum representante',
                'representative_student' => $student ? $student->name : 'Nenhum representante',
            ];
        }

        $dataFilter = [];
        return view('Classrooms.ListBuilder.ClassroomListBuilder', compact(
            'active_menu_header',
            'rooms',
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
        $active_menu_header = 'salas';
        $action = 'Adicionar Sala';
        $name_subject = '';
        $route_form = true;
        return view('Classrooms.Forms.ClassroomForm', compact(
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
        if (!$request->serie || !$request->letter || !$request->period) {
            return redirect()->back()->with('danger', 'Não foi possivel criar a sala!');
        }

        $data = [
            'serie' => $request->serie,
            'letter' => $request->letter,
            'period' => $request->period,
        ];
        DataBaseHandler::insert($this->db, $data);

        return redirect(route('list.classroom'))->with('success', 'Sala criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function show(Request $request)
    // {
    //     if ($request->name) {
    //         $data = [
    //             'name' => $request->name,
    //         ];

    //         $subjects = DataBaseHandler::get($this->db, $data);
    //         if (count($subjects) > 0) {
    //             $active_menu_header = 'materias';
    //             $subjects = $subjects;
    //             $dataFilter = $request->except('_token');
    //             return view('Subjects.ListBuilder.SubjectListBuilder', compact(
    //                 'active_menu_header',
    //                 'subjects',
    //                 'dataFilter',
    //             ));
    //         }
    //     }

    //     $alert = $request->name ?
    //         'Não foi possivel localizar a matéria: ' . $request->name :
    //         'Nome da matéria está vazio';

    //     return redirect()->back()->with('danger', $alert);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active_menu_header = 'salas';
        $route_form = false;
        $classroom = DataBaseHandler::getById($this->db, $id);
        $action = "Editar Sala - 8ºA Tarde";
        $room = [
            'serie' => $classroom->serie,
            'letter' => $classroom->letter,
            'period' => $classroom->period,
        ];


        return view('Classrooms.Forms.ClassroomForm', compact(
            'id',
            'active_menu_header',
            'action',
            'route_form',
            'room',
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
        if (!$request->serie || !$request->letter || !$request->period) {
            return redirect()->back()->with('danger', 'Não foi possivel editar a sala!');
        }

        $data = [
            'serie' => $request->serie,
            'letter' => $request->letter,
            'period' => $request->period,
        ];
        DataBaseHandler::update($this->db, $id, $data);
        return redirect(route('list.classroom'))->with('success', 'Sala editada com sucesso!');
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
        return redirect(route('list.classroom'))->with('success', 'Sala excluida com sucesso!');
    }
}
