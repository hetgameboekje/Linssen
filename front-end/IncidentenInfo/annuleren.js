function AnnulerenConfirm() {
    let annuleer_countdown = 3;
    const annulerenBtn = document.getElementById("AnnulerenBtn");

    if (annuleer_countdown > 0) {
        annulerenBtn.textContent = "Confirm binnen " + annuleer_countdown;

        const countdownInterval = setInterval(function () {
            annuleer_countdown--;

            if (annuleer_countdown > 0) {
                annulerenBtn.textContent = "Confirm binnen " + annuleer_countdown;
            } else {
                clearInterval(countdownInterval);
                annulerenBtn.textContent = "ANNULEREN";
            }
        }, 1000);
    }
}

// create a function when pressed it adds to a variable
// when button_press > 1 run function script

function VerzendenConfrim() {
    document.getElementById("VerzendenBtn").textContent = "VERZONDEN"
}
