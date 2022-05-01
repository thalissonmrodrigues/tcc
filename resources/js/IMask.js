
if(document.getElementById('input-delivery-date')) {
  IMask(
    document.getElementById('input-delivery-date'),
    {
      mask:'00/00/0000'
    }
  );
}

if(document.getElementById('nota')) {
  IMask(
    document.getElementById('nota'),
    {
      mask:'0.00',
    }
  );
}

if (document.getElementById('validaRGM')){
  IMask(
    document.getElementById('validaRGM'),
    {
      mask: '00000000-0',
    }
  );
}
