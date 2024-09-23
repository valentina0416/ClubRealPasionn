// Obtener el modal y el botón de cerrar
const modal = document.getElementById('myModal');
const closeBtn = document.getElementsByClassName('close')[0];

// Mostrar el modal automáticamente cuando la página carga
window.onload = function() {
  modal.style.display = 'block';
};

// Cerrar el modal cuando el usuario haga clic en la "X"
closeBtn.onclick = function() {
  modal.style.display = 'none';
};

// Cerrar el modal si el usuario hace clic fuera del contenido del modal
window.onclick = function(event) {
  if (event.target === modal) {
    modal.style.display = 'none';
  }
};
