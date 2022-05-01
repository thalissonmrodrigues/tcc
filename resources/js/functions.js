// Open file input for work file send.
let btn_upload = document.querySelector('.btn-upload');
if(btn_upload) {
  let input_file = document.querySelector('.input-file');
  btn_upload.addEventListener('click', function() {
    // Add file name.
    input_file.addEventListener('change', function() {
      let file_name = document.querySelector('.file-name');
      let files_length = input_file.files.length-1;
      file_name.innerHTML = input_file.files[0].name + ' e mais ' + files_length + ' arquivos';
    })

    input_file.click();
  })
}
