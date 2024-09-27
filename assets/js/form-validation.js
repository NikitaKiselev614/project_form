// document.getElementById('loginForm').addEventListener('submit', function(event) {
//     let email = document.getElementById('email').value;
//     let password = document.getElementById('password').value;
//     let phone = document.getElementById('phone').value;

//     let isValid = true;
//     let errorMessage = '';


//     if (!validateEmail(email)) {
//         errorMessage += 'Некорректный email.\n';
//         isValid = false;
//     }


//     if (!validatePassword(password)) {
//         errorMessage += 'Пароль должен содержать минимум 8 символов, хотя бы одну заглавную букву, одну строчную букву и одну цифру.\n';
//         isValid = false;
//     }


//     if (!validatePhone(phone)) {
//         errorMessage += 'Номер телефона должен быть в формате +375 XX YYY-YY-YY.\n';
//         isValid = false;
//     }

//     if (!isValid) {
//         alert(errorMessage);
//         event.preventDefault();
//     }
// });

// function validateEmail(email) {
//     let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     return regex.test(email);
// }

// function validatePassword(password) {
//     let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
//     return regex.test(password);
// }

// function validatePhone(phone) {
//     let regex = /^\+375 \d{2} \d{3}-\d{2}-\d{2}$/;
//     return regex.test(phone);
// }
