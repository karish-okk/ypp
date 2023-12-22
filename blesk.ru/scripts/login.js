function showLoginForm() {
    document.getElementById("loginForm").style.display = "block";
    document.getElementById("registrationForm").style.display = "none";
    document.querySelector("form-title_btn").classList.remove("top");
  }

  function showRegistrationForm() {
    document.getElementById("loginForm").style.display = "none";
    document.getElementById("registrationForm").style.display = "block";
    document.querySelector("form-title_btn").classList.add("top");
  }

  // Показываем всплывающее окно при загрузке страницы
  document.getElementById("popup1").style.display = "block";