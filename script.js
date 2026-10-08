function login(event) {
    event.preventDefault();

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    if (email !== "" && password !== "") {
        document.getElementById("message").innerText =
            "Login Successful!";

        setTimeout(function () {
            window.location.href = "dashboard.html";
        }, 1000);
    } else {
        document.getElementById("message").innerText =
            "Please enter email and password.";
    }
}
