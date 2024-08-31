document.getElementById("login-link").addEventListener("click", function() {
    document.getElementById("login-popup").style.display = "flex";
});

document.getElementById("login-close").addEventListener("click", function() {
    document.getElementById("login-popup").style.display = "none";
});

document.getElementById("register-link").addEventListener("click", function() {
    document.getElementById("register-popup").style.display = "flex";
});

document.getElementById("register-close").addEventListener("click", function() {
    document.getElementById("register-popup").style.display = "none";
});

window.addEventListener("click", function(event) {
    if (event.target === document.getElementById("login-popup")) {
        document.getElementById("login-popup").style.display = "none";
    } else if (event.target === document.getElementById("register-popup")) {
        document.getElementById("register-popup").style.display = "none";
    }
});
