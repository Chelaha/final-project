
function addDarkmodeWidget() {
    new Darkmode().showWidget();
  }
  window.addEventListener('load', addDarkmodeWidget);
  
  function save(){
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'You are has been registered now!',
      showConfirmButton: false,
      timer: 1500
    })
  }