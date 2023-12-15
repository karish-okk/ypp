function showLoginForm() {
    document.getElementById("loginForm").style.display = "block";
    document.getElementById("registrationForm").style.display = "none";
  }

  function showRegistrationForm() {
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("registrationForm").style.display = "block";
  }

  // Показываем всплывающее окно при загрузке страницы
  document.getElementById("popup1").style.display = "block";