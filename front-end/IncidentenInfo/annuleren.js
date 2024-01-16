function AnnulerenConfirm() {
    let annuleer_button = 3;
    const annulerenBtn = document.getElementById("AnnulerenBtn");

    if (annuleer_button > 0) {
        annulerenBtn.textContent = "Confirm binnen " + annuleer_button;

        const countdownInterval = setInterval(function () {
            annuleer_button--;

            if (annuleer_button > 0) {
                annulerenBtn.textContent = "Confirm binnen " + annuleer_button;
            } else {
                clearInterval(countdownInterval);
                annulerenBtn.textContent = "Melding verstuurd!";
            }
        }, 1000);
    }
}
