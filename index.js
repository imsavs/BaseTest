/*
const nombres = document.getElementById("nombres");
const apellidos = document.getElementById("apellidos");
const id_empleado = document.getElementById("id_empleado");
const username = document.getElementById("username");
const form = document.getElementById("formuinsert");
const parrafo = document.getElementById("warnings");

form.addEventListener("submit", e=>{
  e.preventDefault()
  const warnings = ""
  if(nombres.value.length <3){
    warning += `El nombre no es válido <br>`
  }else{

  }
}
)

/*
const form = document.querySelector('forminsert');

// función para validar el nombre
function validarNombre(nombres) {
  const regexNombre = /^[a-zA-Záéíóúñ ]+$/;
  return regexNombre.test(nombres);
}

// función para validar el apellido
function validarApellido(apellidos) {
  const regexApellido = /^[a-zA-Záéíóúñ ]+$/;
  return regexApellido.test(apellidos);
}

// función para validar el ID del empleado
function validarIdEmpleado(id_empleado) {
  const regexId = /^\d{8}$/;
  return regexId.test(id);
}

// función para validar el nombre de usuario
function validarUsername(username) {
  const regexUsername = /^[a-zA-Z0-9]+$/;
  return regexUsername.test(username);
}

// función para validar el formulario antes de enviarlo
form.addEventListener('submit', (event) => {
  event.preventDefault();

  const nombre = form.querySelector('#nombres').value;
  const apellido = form.querySelector('#apellidos').value;
  const idEmpleado = form.querySelector('#id_empleado').value;
  const username = form.querySelector('#username').value;

  // validar cada campo
  const nombreValido = validarNombre(nombres);
  const apellidoValido = validarApellido(apellidos);
  const idEmpleadoValido = validarIdEmpleado(id_empleado);
  const usernameValido = validarUsername(username);

  // mstrar mensajes de error si hay campos inválidos
  if (!nombreValido) {
    const errorNombre = document.querySelector('#error-nombre');
    errorNombre.classList.remove('hidden');
  } else {
    const errorNombre = document.querySelector('#error-nombre');
    errorNombre.classList.add('hidden');
  }

  if (!apellidoValido) {
    const errorApellido = document.querySelector('#error-apellido');
    errorApellido.classList.remove('hidden');
  } else {
    const errorApellido = document.querySelector('#error-apellido');
    errorApellido.classList.add('hidden');
  }

  if (!idEmpleadoValido) {
    const errorIdEmpleado = document.querySelector('#error-id-empleado');
    errorIdEmpleado.classList.remove('hidden');
  } else {
    const errorIdEmpleado = document.querySelector('#error-id-empleado');
    errorIdEmpleado.classList.add('hidden');
  }

  if (!usernameValido) {
    const errorUsername = document.querySelector('#error-username');
    errorUsername.classList.remove('hidden');
  } else {
    const errorUsername = document.querySelector('#error-username');
    errorUsername.classList.add('hidden');
  }

  // campos validos = ok enviar
  if (nombreValido && apellidoValido && idEmpleadoValido && usernameValido) {
    form.submit();
  }
});

*/