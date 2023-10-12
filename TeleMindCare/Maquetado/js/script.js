const formIni = document.getElementById("principal");

if (formIni) {
  //Ejecutando funciones
  document
    .getElementById("btn__iniciar-sesion")
    .addEventListener("click", iniciarSesion);
  document
    .getElementById("btn__registrarse")
    .addEventListener("click", register);
  window.addEventListener("resize", anchoPage);

  //Declarando variables
  var formulario_login = document.querySelector(".formulario__login");
  var formulario_register = document.querySelector(".formulario__register");
  var contenedor_login_register = document.querySelector(
    ".contenedor__login-register"
  );
  var caja_trasera_login = document.querySelector(".caja__trasera-login");
  var caja_trasera_register = document.querySelector(".caja__trasera-register");

  //FUNCIONES

  function anchoPage() {
    if (window.innerWidth > 850) {
      caja_trasera_register.style.display = "block";
      caja_trasera_login.style.display = "block";
    } else {
      caja_trasera_register.style.display = "block";
      caja_trasera_register.style.opacity = "1";
      caja_trasera_login.style.display = "none";
      formulario_login.style.display = "block";
      contenedor_login_register.style.left = "0px";
      formulario_register.style.display = "none";
    }
  }

  anchoPage();

  function iniciarSesion() {
    if (window.innerWidth > 850) {
      formulario_login.style.display = "block";
      contenedor_login_register.style.left = "10px";
      formulario_register.style.display = "none";
      caja_trasera_register.style.opacity = "1";
      caja_trasera_login.style.opacity = "0";
    } else {
      formulario_login.style.display = "block";
      contenedor_login_register.style.left = "0px";
      formulario_register.style.display = "none";
      caja_trasera_register.style.display = "block";
      caja_trasera_login.style.display = "none";
    }
  }

  function register() {
    if (window.innerWidth > 850) {
      formulario_register.style.display = "block";
      contenedor_login_register.style.left = "410px";
      formulario_login.style.display = "none";
      caja_trasera_register.style.opacity = "0";
      caja_trasera_login.style.opacity = "1";
    } else {
      formulario_register.style.display = "block";
      contenedor_login_register.style.left = "0px";
      formulario_login.style.display = "none";
      caja_trasera_register.style.display = "none";
      caja_trasera_login.style.display = "block";
      caja_trasera_login.style.opacity = "1";
    }
  }
  function iniciarSesionNuevo(event) {
    event.preventDefault(); // Evita que se envíe el formulario predeterminado

    var correo = formulario_login.querySelector('input[type="email"]').value;
    var contrasena = formulario_login.querySelector(
      'input[type="password"]'
    ).value;

    if (correo.trim() === "" || contrasena.trim() === "") {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Por favor, completa todos los campos.",
      });
      return;
    }

    // Crear un objeto con los datos del cliente para enviar al servidor
    var datosCliente = {
      email: correo,
      password: contrasena,
    };

    // Realizar la solicitud POST al servidor para autenticar al cliente
    fetch("https://magdiel123345.pythonanywhere.com/buscar_usuario", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(datosCliente),
    })
      .then((response) => response.json())
      .then((data) => {
        // Verificar la respuesta del servidor
        if (data.error) {
          // Autenticación fallida, mostrar un mensaje de error
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Credenciales incorrectas. Por favor, verifica tu correo y contraseña.",
          });
        } else {
          // Autenticación exitosa, puedes redirigir al usuario a la página deseada
          // Realizar la solicitud POST para activar la sesión en PHP
          fetch("../controller/activar_sesion.php", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({ usuario: datosCliente.email }),
          })
            .then((response) => response.json())
            .then((data) => {
              // Aquí puedes manejar la respuesta del servidor de activación de sesión
              if (data.mensaje === "Sesión activada exitosamente") {
                window.location.href = "Evaluacion.php";
              } else {
                Swal.fire({
                  icon: "error",
                  title: "Error",
                  text: "Hubo un problema al activar la sesión. Por favor, intenta de nuevo más tarde.",
                });
              }
            })
            .catch((error) => {
              console.error("Error al activar la sesión:", error);
              Swal.fire({
                icon: "error",
                title: "Error",
                text: "Hubo un problema al activar la sesión. Por favor, intenta de nuevo más tarde.",
              });
            });
        }
      })
      .catch((error) => {
        // Manejar errores de la solicitud
        console.error("Error en la solicitud:", error);
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Hubo un problema al iniciar sesión. Por favor, intenta de nuevo más tarde.",
        });
      });
  }

  function registerNuevo(event) {
    event.preventDefault(); // Evita que se envíe el formulario predeterminado

    var nombre = formulario_register.querySelector(
      'input[placeholder="Nombre"]'
    ).value;
    var apellido = formulario_register.querySelector(
      'input[placeholder="Apellido"]'
    ).value;
    var telefono = formulario_register.querySelector(
      'input[placeholder="Numero Telefono"]'
    ).value;
    var correo = formulario_register.querySelector(
      'input[placeholder="Correo Electronico"]'
    ).value;
    var contrasena = formulario_register.querySelector(
      'input[type="password"]'
    ).value;

    if (
      nombre.trim() === "" ||
      apellido.trim() === "" ||
      telefono.trim() === "" ||
      correo.trim() === "" ||
      contrasena.trim() === ""
    ) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Por favor, completa todos los campos.",
      });
      return;
    }

    // Crear un objeto con los datos del cliente
    var datosCliente = {
      email: correo,
      password: contrasena,
      nombre: nombre,
      apellidos: apellido,
      numeroTelefono: telefono,
    };

    // Realizar la solicitud POST al servidor
    console.log(datosCliente);
    fetch("https://magdiel123345.pythonanywhere.com/registrar_cliente", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(datosCliente),
    })
      .then((response) => response.json())
      .then((data) => {
        // Aquí puedes manejar la respuesta del servidor
        if (data.mensaje) {
          Swal.fire({
            icon: "success",
            title: "Registro Exitoso",
            text: data.mensaje,
          }).then(() => {
            // Redirigir al usuario a Evaluacion.php
            // Después de registrar al usuario exitosamente

            // Recuperar los datos del cliente registrado
            const idcliente = data.idcliente;
            const correo = data.email;

            // Crear un objeto con los datos de sesión
            const datosSesion = {
              usuario: correo,
              idcliente: idcliente,
              // Puedes agregar más datos aquí si es necesario
            };

            // Realizar la solicitud para activar la sesión
            fetch("../controller/activar_sesion.php", {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
              body: JSON.stringify(datosSesion),
            })
              .then((response) => response.json())
              .then((data) => {
                // Aquí puedes manejar la respuesta del servidor, si es necesario
              })
              .catch((error) => {
                console.error("Error al activar la sesión:", error);
              });

            window.location.href = "evaluacion.php";
          });
        } else {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Hubo un error al registrar el cliente.",
          });
        }
      });
  }

  // Agregar el evento "submit" a los formularios
  formulario_login.addEventListener("submit", iniciarSesionNuevo);
  formulario_register.addEventListener("submit", registerNuevo);
}

// Obtener elementos del DOM
const idTest = document.getElementById("dassForm");
if(idTest){
  const btnEnviarText = document.getElementById("btnEnviarTest");
  const mostrarGraficasBtn = document.getElementById("mostrarGraficas");
  const idcliente=document.getElementById("idcliente").value;
  function calcularResultados() {
    // Crear un arreglo de objetos JSON que incluye cada pregunta y su respuesta
    const respuestas = [];
    for (let i = 1; i <= 21; i++) {
      const pregunta = document.querySelector(`input[name="p${i}"]:checked`);
      if (pregunta) {
        const respuesta = parseInt(pregunta.value);
        const preguntaObj = {
          pregunta: `${i}`, // Número de pregunta
          respuesta: respuesta,
          idcliente:idcliente
        };
        respuestas.push(preguntaObj);
      }
    }
  
    console.log(respuestas)
    // Realizar la solicitud POST al servidor con todas las respuestas
    fetch('https://magdiel123345.pythonanywhere.com/agregar_formulario', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(respuestas) // Envía el arreglo de objetos JSON
    })
      .then(response => {
        if (response.status === 201) {
          // El registro se agregó exitosamente
          return response.json();
        } else {
          // Manejar errores aquí
          return response.json().then(error => {
            throw new Error(error.error);
          });
        }
      })
      .then(data => {
        // Calcular los puntajes de depresión, ansiedad y estrés
        const puntajeDepresion = respuestas.slice(0, 7).reduce((a, b) => a + b.respuesta, 0);
        const puntajeAnsiedad = respuestas.slice(7, 14).reduce((a, b) => a + b.respuesta, 0);
        const puntajeEstres = respuestas.slice(14, 21).reduce((a, b) => a + b.respuesta, 0);
  
        // Determinar las categorías según los puntajes
        const categoriaDepresion = obtenerCategoria(puntajeDepresion, "Depresión");
        const categoriaAnsiedad = obtenerCategoria(puntajeAnsiedad, "Ansiedad");
        const categoriaEstres = obtenerCategoria(puntajeEstres, "Estrés");
  
        // Mostrar los resultados en formato de texto
        mostrarResultadosTexto(
          categoriaDepresion,
          categoriaAnsiedad,
          categoriaEstres
        );
  
        // Mostrar los resultados en una gráfica
        mostrarGrafica(puntajeDepresion, puntajeAnsiedad, puntajeEstres);
  
        // Manejar la respuesta exitosa aquí
        console.log(data.mensaje);
      })
      .catch(error => {
        // Manejar errores aquí
        console.error(error);
      });
  }
  
  // Función para obtener la categoría
  function obtenerCategoria(puntaje, tipo) {
    let categoria = "";
    if (tipo === "Depresión") {
      // Asigna las categorías para la depresión
      if (puntaje >= 0 && puntaje <= 6) categoria = "5-6 depresión leve";
      else if (puntaje >= 7 && puntaje <= 10)
        categoria = "7-10 depresión moderada";
      else if (puntaje >= 11 && puntaje <= 13)
        categoria = "11-13 depresión severa";
      else if (puntaje >= 14)
        categoria = "14 o más, depresión extremadamente severa";
    } else if (tipo === "Ansiedad") {
      // Asigna las categorías para la ansiedad
      if (puntaje >= 0 && puntaje <= 4) categoria = "4 ansiedad leve";
      else if (puntaje >= 5 && puntaje <= 7) categoria = "5-7 ansiedad moderada";
      else if (puntaje >= 8 && puntaje <= 9) categoria = "8-9 ansiedad severa";
      else if (puntaje >= 10)
        categoria = "10 o más, ansiedad extremadamente severa";
    } else if (tipo === "Estrés") {
      // Asigna las categorías para el estrés
      if (puntaje >= 0 && puntaje <= 8) categoria = "8-9 estrés leve";
      else if (puntaje >= 10 && puntaje <= 12)
        categoria = "10-12 estrés moderado";
      else if (puntaje >= 13 && puntaje <= 16) categoria = "13-16 estrés severo";
      else if (puntaje >= 17)
        categoria = "17 o más, estrés extremadamente severo";
    }
    return categoria;
  }
  
  // Función para mostrar los resultados en formato de texto
  function mostrarResultadosTexto(
    categoriaDepresion,
    categoriaAnsiedad,
    categoriaEstres
  ) {
    const resultadosDiv = document.getElementById("resultados");
    resultadosDiv.innerHTML = `
        <p>Depresión: ${categoriaDepresion}</p>
        <p>Ansiedad: ${categoriaAnsiedad}</p>
        <p>Estrés: ${categoriaEstres}</p>
    `;
    resultadosDiv.style.display = "block"; // Mostrar los resultados de texto
  }
  
  function mostrarGrafica(puntajeDepresion, puntajeAnsiedad, puntajeEstres) {
   
    const ctx = document.getElementById("grafica").getContext("2d");
  
    // Agregar un título a la gráfica
    
      new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Depresión", "Ansiedad", "Estrés"],
        datasets: [
          {
            label: "Porcentaje (%)",
            data: [puntajeDepresion, puntajeAnsiedad, puntajeEstres],
            backgroundColor: [
              "rgba(255, 99, 132, 0.5)",
              "rgba(54, 162, 235, 0.5)",
              "rgba(255, 206, 86, 0.5)",
            ],
            borderWidth: 1,
          },
        ],
      },
      options: {
        scales: {
          y: {
            beginAtZero: true,
            max: 100,
            
          },
        },
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false, // Ocultar la leyenda
          },
        },
      },
    });
    
  }
  
  
  // Agregar el evento click al botón "Mostrar Gráficas"
  if (mostrarGraficasBtn) {
    mostrarGraficasBtn.addEventListener("click", function () {
      // Ocultar el formulario y mostrar las gráficas y resultados
      document.getElementById("dassForm").style.display = "none";
      document.getElementById("resultados").style.display = "block";
  
      // Calcular los resultados y mostrarlos
      calcularResultados();
    });
  }
  
}

const videoIA = document.getElementById("videoIA");
if (videoIA) {
  const btnEnviar = document.getElementById("enviar");
  const inputFile = document.getElementById("video");
  const spinnerContainer = document.querySelector(".spinner-container"); // Selecciona el contenedor del spinner

  const cliente_id = document.getElementById("clienteId").value;

  btnEnviar.addEventListener("click", function (e) {
    e.preventDefault();

    if (validarFormulario()) {
      const formData = new FormData();
      formData.append("video", inputFile.files[0]);
      spinnerContainer.classList.add("spinner");

      // Primera solicitud HTTP para cargar el video
      fetch("http://127.0.0.1:5000/cargar_video", {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          if (response.ok) {
            // Segunda solicitud HTTP para analizar emociones
            return fetch("http://127.0.0.1:5000/analizar_emociones", {
              method: "POST",
              headers: {
                "Content-Type": "application/json",
              },
              body: JSON.stringify({ client_id: cliente_id }),
            });
          } else {
            throw new Error("Error al cargar el video.");
          }
        })
        .then((response) => {
          if (response.ok) {
            return response.json();
          } else {
            throw new Error("Error al analizar emociones.");
          }
        })
        .then((data) => {
         
          // Datos que quieres enviar en el JSON
          var dataToSend = {
            registros: [
              {
                porcentaje: data["Feliz"],
                idemociones: 1,
                idcliente: cliente_id,
              },
              {
                porcentaje: data["Enojado"],
                idemociones: 2,
                idcliente: cliente_id,
              },
              {
                porcentaje: data["Sorprendido"],
                idemociones: 3,
                idcliente: cliente_id,
              },
              {
                porcentaje: data["Neutral"],
                idemociones: 4,
                idcliente: cliente_id,
              },
              {
                porcentaje: data["Triste"],
                idemociones: 5,
                idcliente: cliente_id,
              },
            ],
          };

          // Realizar la solicitud HTTP POST al servidor
          fetch("https://magdiel123345.pythonanywhere.com/registrar_datos_ia", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify(dataToSend),
          })
            .then(function (response) {
              if (response.ok) {
                return response.json();
              } else {
                throw new Error("Error al enviar los datos.");
              }
            })
            .then(function (data) {
              console.log(data); // Manejar la respuesta del servidor (por ejemplo, mostrar un mensaje de éxito)
            })
            .catch(function (error) {
              console.error("Error:", error);
            });

          spinnerContainer.classList.remove("spinner");
          console.log(data); // Imprime la respuesta JSON en la consola
          
          
          // Obtener las emociones y los valores correspondientes
          var emotions = Object.keys(data);
          var values = Object.values(data);
          var colors = [
            "rgba(255, 6, 28, 0.6)", // Rojo para "Enojado"
            "rgba(29, 212, 0, 0.6)", // Verde para "Feliz"
            "rgba(128, 128, 128, 0.6)", // Gris para "Neutral"
            "rgba(255, 255, 0, 0.6)", // Amarillo para "Sorprendido"
            "rgba(11, 71, 156, 0.6)", // Azul para "Triste"
          ];

          
          // Configurar el contexto del lienzo (canvas)
          var ctx = document.getElementById("grafica").getContext("2d");
          const contenedor = document.getElementById("contenedor-ia")
          contenedor.style.opacity = "1";
          // Crear el gráfico de barras
          var chart = new Chart(ctx, {
            type: "bar",
            data: {
              labels: emotions,
              datasets: [
                {
                  label: "Porcentaje (%)",
                  data: values,
                  backgroundColor: colors, // Usar colores personalizados
                  borderWidth: 1,
                },
              ],
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true,
                  max: 100,
                },
              },
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                legend: {
                  display: false, // Ocultar la leyenda
                },
              },
            },
          });
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    }
  });

  function validarFormulario() {
    // Verificar si se ha seleccionado un archivo
    if (inputFile.files.length === 0) {
      alert("Por favor, seleccione un archivo de video.");
      return false;
    }

    // Obtener la extensión del archivo seleccionado
    var fileName = inputFile.files[0].name;
    var fileExtension = fileName.split(".").pop().toLowerCase();

    // Verificar si la extensión es compatible con video
    if (
      fileExtension !== "mp4" &&
      fileExtension !== "avi" &&
      fileExtension !== "mov" &&
      fileExtension !== "mkv" &&
      fileExtension !== "wmv"
    ) {
      alert(
        "Por favor, seleccione un archivo de video válido (MP4, AVI, MOV, MKV, WMV)."
      );
      return false;
    }

    return true;
  }
}

const graficos = document.getElementById("graficos").value;
if (graficos) {
  function obtenerDatosIA(id) {
      // Realizar la solicitud GET al servidor para obtener datos de IA
      fetch(`https://magdiel123345.pythonanywhere.com/obtener_datos_ia/${id}`, {
          method: 'GET',
          headers: {
              'Content-Type': 'application/json'
          }
      })
      .then(response => {
          if (response.status === 200) {
              // Datos obtenidos exitosamente
              return response.json();
          } else if (response.status === 404) {
              // No se encontraron datos
              return {
                  mensaje: "No se encontraron datos para el cliente especificado"
              };
          } else {
              // Manejar otros códigos de estado de error aquí
              throw new Error(`Error en la solicitud: ${response.status}`);
          }
      })
      .then(data => {
          if (data.registros) {
              // Manejar los datos obtenidos aquí
              console.log(data.registros);
              const contenedor = document.getElementById("contenedor-final");

              // Itera sobre los datos de 4 en 4
              for (let i = 0; i < data.length; i += 4) {
                  // Crea un div para agrupar los elementos
                  const divGrupo = document.createElement("div");
                  divGrupo.classList.add("grupo"); // Puedes agregar clases CSS si es necesario

                  // Crea y agrega un título
                  const titulo = document.createElement("h2");
                  titulo.textContent = `Video No. ${i / 4 + 1}`;
                  divGrupo.appendChild(titulo);

                  // Agrega la imagen "graficas.png" a cada grupo
                  const imagen = document.createElement("img");
                  imagen.src = "../images/graficas.png"; // Reemplaza con el nombre y ubicación correctos de la imagen
                  divGrupo.appendChild(imagen);

                  // Crea divs con enlaces a videos para cada conjunto de 4 datos
                  for (let j = i; j < i + 4 && j < datos.length; j++) {
                      const dato = datos[j];
                      const divVideo = document.createElement("div");
                      const enlace = document.createElement("a");
                      enlace.href = `#`; // Reemplaza con el enlace correcto
                      enlace.textContent = `Video ${dato.idia}`;
                      divVideo.appendChild(enlace);
                      divGrupo.appendChild(divVideo);
                  }

                  // Agrega el grupo al contenedor principal
                  contenedor.appendChild(divGrupo);
              }
          } else {
              // Manejar el mensaje de error aquí
              console.log(data.mensaje);
          }
      })
      .catch(error => {
          // Manejar errores de red o de la solicitud aquí
          console.error(error);
      });
  }

  document.addEventListener('DOMContentLoaded', function () {
    obtenerDatosIA(graficos);
});

}
