// variaveis para validação
let input_name_subject = document.querySelector('#subjectName');
let input_name_student = document.querySelector('#studentName');
let input_surname_student = document.querySelector('#studentSurname');
let input_name_teacher = document.querySelector('#nameTeacher');
let input_surname_teacher = document.querySelector('#surnameTeacher');
let input_name_config= document.querySelector('#configName');
let input_surname_config= document.querySelector('#configSurname');

// valida nome materia, nome e sobrenome aluno, nome e sobrenome professor
if (input_name_subject) {
    validationText(input_name_subject);
} 

if (input_name_student) {
    validationText(input_name_student);
} 

if (input_surname_student) { 
    validationText(input_surname_student);
}

if (input_name_teacher) {
    validationText(input_name_teacher);
}

if (input_surname_teacher) {
    validationText(input_surname_teacher);
}

if (input_name_config) {
    validationText(input_name_config);
}

if (input_surname_config) {
    validationText(input_surname_config);
}

// funções genéricas para validação

// validar texto 
function validationText(input_text) {
    if (input_text) {
        input_text.addEventListener('keydown', function(e){
    
            let arrayNumber = [0,1,2,3,4,5,6,7,8,9];
    
            arrayNumber.forEach( function(item){
                if (parseInt(e.key) == item) {  
                    e.preventDefault();
                }
            })
        });
    }
}