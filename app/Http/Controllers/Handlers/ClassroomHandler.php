<?php

namespace App\Http\Controllers\Handlers;

use App\Models\Student;
use App\Models\Teacher;

class ClassroomHandler
{
    /**
     * Get teacher and student representative by id.
     */
    public static function getRepresentativeById($representative_id, string $type)
    {
        if(empty($representative_id) || empty($type) || empty($data)) {
            return NULL;
        }

        $output = [];
        if ($type == 'student') {
            $student_db = new Student();
            $representative = DataBaseHandler::getById($student_db, $representative_id);
            return $representative;
        }

        if ($type == 'teacher') {
            $teacher_db = new Teacher();
            $representative = DataBaseHandler::getById($teacher_db, $representative_id);
            return $representative;
        }
    }
}
