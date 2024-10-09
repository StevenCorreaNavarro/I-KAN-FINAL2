
// const Open2Btn = document.querySelector("#form-open2"),
//     conta = document.querySelector(".homes"),
//     contactos = document.querySelector(".contactosboton"),
//     Close2Btn = document.querySelector(".form_closed"),
//     pwShowHide2 = document.querySelectorAll(".pw_hide");

//     Open2Btn.addEventListener("click", () => conta.classList.add("show"));      
//     Close2Btn.addEventListener("click", () => conta.classList.remove("show"));  

//     pwShowHide2.forEach((icon) => {
//         icon.addEventListener("click", () => {
//             let getPwinput = icon.parentElement.querySelector("input");
    
//             if (getPwinput.type === "password") {
//                 getPwinput.type = "text";
//                 icon.classList.replace("uil-eye-slash", "uil-eye");
//             } else {
//                 getPwinput.type = "password";
//                 icon.classList.replace("uil-eye", "uil-eye-slash")
//             }
//         });
//     });
// const formOpenBtn = document.querySelector("#form-open"),
//     home = document.querySelector(".home"),             
//     formContainer = document.querySelector(".form_container"),
//     formCloseBtn = document.querySelector(".form_close"),
//     signupBtn = document.querySelector("#signup"),
//     pwShowHide = document.querySelectorAll(".pw_hide");

// formOpenBtn.addEventListener("click", () => home.classList.add("show"));
// formCloseBtn.addEventListener("click", () => home.classList.remove("show"));


// pwShowHide.forEach((icon) => {
//     icon.addEventListener("click", () => {
//         let getPwinput = icon.parentElement.querySelector("input");

//         if (getPwinput.type === "password") {
//             getPwinput.type = "text";
//             icon.classList.replace("uil-eye-slash", "uil-eye");
//         } else {
//             getPwinput.type = "password";
//             icon.classList.replace("uil-eye", "uil-eye-slash")
//         }
//     });
// });


// signupBtn.addEventListener("click", (e) => {
//     e.preventDefault();
//     formContainer.classList.add("active");
// });


// loginBtn.addEventListener("click", (e) => {
//     e.preventDefault();
//     formContainer.classList.remove("active");
// });













// // Obtener el botón de inicio de sesión por su ID
// const iniciarSesionBtn = document.getElementById("iniciar-sesion");

// // Agregar un event listener para escuchar el clic en el botón
// iniciarSesionBtn.addEventListener("click", function () {
//     // Redirigir al usuario a la página deseada
//     window.location.href = "2.Ikan_ocasion.html";
// });








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


const formOpenBtn = document.querySelector("#form-open"),
    home = document.querySelector(".home"),
    formContainer = document.querySelector(".form_container"),
    formCloseBtn = document.querySelector(".form_close"),
    signupBtn = document.querySelector("#signup"),
    loginBtn = document.querySelector("#login"),
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

signupBtn.addEventListener("click", (e)=>{
    e.preventDefault();
    formContainer.classList.add("active");
});

loginBtn.addEventListener("click", (e)=>{
    e.preventDefault();
    formContainer.classList.remove("active")
});

// Obtener el botón de inicio de sesión por su ID
const iniciarSesionBtn = document.getElementById("iniciar-sesion");

// Agregar un event listener para escuchar el clic en el botón
iniciarSesionBtn.addEventListener("click", function() {
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

