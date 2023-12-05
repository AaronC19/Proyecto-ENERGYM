document.addEventListener("DOMContentLoaded", function () {
  const togglePasswordButton = document.getElementById("togglePassword");
  const passwordInput = document.getElementById("contrasena");

  const toggleConfirmPasswordButton = document.getElementById(
    "toggleConfirmPassword"
  );
  const confirmPasswordInput = document.getElementById("confirmar");

  togglePasswordButton.addEventListener("click", function () {
    togglePasswordVisibility(passwordInput, togglePasswordButton);
  });

  toggleConfirmPasswordButton.addEventListener("click", function () {
    togglePasswordVisibility(confirmPasswordInput, toggleConfirmPasswordButton);
  });

  function togglePasswordVisibility(inputField, toggleButton) {
    if (inputField.type === "password") {
      inputField.type = "text";
      toggleButton.textContent = "Ocultar";
    } else {
      inputField.type = "password";
      toggleButton.textContent = "Mostrar";
    }
  }
});
