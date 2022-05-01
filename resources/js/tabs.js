// Tabs rooms.
createTabs(['alunos', 'professores']);

// Tabs send work.
createTabs(['recebidos', 'corrigidos', 'enviado']);

/**
 * Function toggleClick() create tabs dynamically.
 *
 * @param { array of all tabs to create } arrayTabs
 */
function createTabs(arrayTabs) {
  let tabs = document.querySelectorAll('.nav-tabs .nav-link');
  if(tabs) {
    tabs.forEach(function(tab){
      // Add click event to tabs
      tab.addEventListener('click', function() {
        //Select tab clicked and tables.
        let tab_active = tab;
        let tables = document.querySelectorAll('table');

        if(tab_active && tables){
          for(let i = 0; i < arrayTabs.length; i++) {
            if(tab_active.getAttribute('data-page') === arrayTabs[i]) {
              // hide all table..
              tables.forEach(function(table) {
                table.classList.add('d-none');
              })
              // Remove all active.
              tabs.forEach(function(tabActive) {
                tabActive.classList.remove('active');
              })

              // Show table and tab active clicked.
              tables[i].classList.remove('d-none');
              tab.classList.add('active');
            }
          }
        }
      });
    });
  }
}
