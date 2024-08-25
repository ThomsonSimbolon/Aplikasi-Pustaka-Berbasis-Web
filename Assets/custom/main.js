const password = document.getElementById("exampleInputPassword");
const showPassword = document.getElementById("customCheck");

showPassword.addEventListener("change", function () {
  if (showPassword.checked) {
    password.type = "text";
  } else {
    password.type = "password";
  }
});
