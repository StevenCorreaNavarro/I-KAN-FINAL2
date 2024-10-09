
const Open2Btn = document.querySelector("form-open2"),
    conta = document.querySelector(".conta"),
    contactos = document.querySelector(".contactosboton"),
    Close2Btn = document.querySelector(".form_close");
Open2Btn.addEventListener("click", () => conta.classList.add("show"));      /**/
Close2Btn.addEventListener("click", () => home.classList.remove("show"));     /**/


const
    formContainer = document.querySelector(".form_container"),
    signupBtn = document.querySelector("#signup"),
    pwShowHide = document.querySelectorAll(".pw_hide");
formOpenBtn.addEventListener("click", () => home.classList.add("show"));
formCloseBtn.addEventListener("click", () => home.classList.remove("show"));


pwShowHide.forEach((icon) => {
    icon.addEventListener("click", () => {
        let getPwinput = icon.parentElement.querySelector("input");

        if (getPwinput.type === "password") {
            getPwinput.type = "text";
            icon.classList.replace("uil-eye-slash", "uil-eye");
        } else {
            getPwinput.type = "password";
            icon.classList.replace("uil-eye", "uil-eye-slash")
        }
    });
});


signupBtn.addEventListener("click", (e) => {
    e.preventDefault();
    formContainer.classList.add("active");
});

loginBtn.addEventListener("click", (e) => {
    e.preventDefault();
    formContainer.classList.remove("active")
});





// Obtener el botón de inicio de sesión por su ID
const iniciarSesionBtn = document.getElementById("iniciar-sesion");

// Agregar un event listener para escuchar el clic en el botón
iniciarSesionBtn.addEventListener("click", function () {
    // Redirigir al usuario a la página deseada
    window.location.href = "2.Ikan_ocasion.html";
});








// // Obtener el botón de inicio de sesión por su ID
// const iniciarSesionBtn = document.getElementById("iniciar-sesion");
// // Obtener los campos de correo electrónico y contraseña por sus ID
// const emailInput = document.getElementById("email");
// const passwordInput = document.getElementById("password");

// // Agregar un event listener para escuchar el clic en el botón
// iniciarSesionBtn.addEventListener("click", function() {
//     // Verificar si los campos de correo electrónico y contraseña están vacíos
//     if (emailInput.value === '' || passwordInput.value === '') {
//         alert("Por favor, complete todos los campos antes de iniciar sesión.");
//     } else {
//         // Redirigir al usuario a la página deseada si los campos están completos
//         window.location.href = "2.Ikan_ocasion.html"; // Ruta relativa

//         }
// });


