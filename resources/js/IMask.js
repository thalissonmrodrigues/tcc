import IMask from 'imask';

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

if (document.getElementById('inputRGM')){
  IMask(
    document.getElementById('inputRGM'),
    {
      mask: '0000000-0',
    }
  );
}
