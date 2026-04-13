// Presmerovanie na thankyou stranku a osetrena validacia
function validateForm() {
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let message = document.getElementById("message").value.trim();
    let gdpr = document.getElementById("gdpr").checked;

    if (name === "" || email === "" || message === ""){
        alert("Vyplnte všetky polia");
        return false;
    }

    if (!gdpr){
        alert("Zaškrtnite pole s súhlasom s spracovaním osobných údajov");
        return false;
    }

    
    return false;

}

// Cookies lišta
function acceptCookies() {
    localStorage.setItem("cookiesAccepted", "yes");
    document.getElementById("cookiesBox").style.display = "none";
}
window.onload = function () {
    if (true) {
        document.getElementById("cookiesBox").style.display = "block";
    }
};