// Toggle click in screen login.
const nsa_info = document.querySelector('.nsa-info');
const info = document.querySelector('.info');
if(nsa_info && info){
  toggleClick(nsa_info, info);
}

// Toggle click in header avatar.
const avatar = document.querySelector('.avatar');
const menu_avatar = document.querySelector('.menu-avatar');
if(avatar && menu_avatar){
  toggleClick(avatar, menu_avatar);
}

// Toggle click in screen login.
const info_icon = document.querySelector('.info-icon');
const file_info = document.querySelector('.file-info');
if(info_icon && file_info){
  toggleClick(info_icon, file_info);
}


// Toggle click in filters.
const btn_filter = document.querySelector('.btn-filter');
const filter_area = document.querySelector('.filter-area');
if(btn_filter && filter_area){
  btn_filter.addEventListener('click', function() {
    let screen_width = window.screen.width;

    if(filter_area.classList.contains("d-none")) {
      // Show and then increase the size.
      filter_area.classList.remove("d-none");
      setTimeout(function(){
        (screen_width >= 768) ?
        filter_area.style.width = 'calc(100% / 12 * 4)' :
        filter_area.style.width = '100%';
      }, 50);
    }
    else {
      // Hide filters area.
      filter_area.style.width = 'calc(100% / 12 * 1.5)';
      filter_area.classList.add("d-none");
    }
  });
}

// Toggle click in work cards.
let arra_btn_card_flip = document.querySelectorAll('.btn-card-flip');
if(arra_btn_card_flip) {
  arra_btn_card_flip.forEach(function(btn_card_flip) {
    // Add click event.
    btn_card_flip.addEventListener('click', function() {
      let card = document.querySelector('.card');
      let back = document.querySelector('.back');

      // Rotation effect.
      card.classList.toggle('flip');
      back.classList.toggle('d-none');

      // Show or Hide btn-card-flip.
      if(back.classList.contains('d-none')) {
        document.querySelector('.btn-card-flip.cancel').classList.add('d-none');
        document.querySelector('.btn-card-flip').classList.remove('d-none');
      }
      else {
        document.querySelector('.btn-card-flip.cancel').classList.remove('d-none');
        document.querySelector('.btn-card-flip').classList.add('d-none');
      }

      // Clear inputs.
      if (document.querySelector('form textarea')) {
        document.querySelector('form textarea').value = "";
      }
      if(      document.querySelector('form input')) {
        document.querySelector('form input').value = "";
      }
      if(document.querySelector('.file-name')) {
        document.querySelector('.file-name').innerHTML = "";
      }
    })
  })

}

/**
 * Function toggleClick() show or hide a certain element.
 *
 * @param { class that will be clicked } clicked
 * @param { class that will be shown or hidden } showAndHide
 */
function toggleClick(clicked, showAndHide) {
  clicked.addEventListener('click', function() {
    showAndHide.classList.toggle("d-none");
});
}
