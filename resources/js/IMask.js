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
