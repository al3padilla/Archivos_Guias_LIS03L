document.addEventListener("DOMContentLoaded", function () {
    const checkbox = document.getElementById("hextrasi");
    const numHoras = document.getElementById("numhorasex");
    const pagoHora = document.getElementById("pagohextra");

    checkbox.addEventListener("change", function () {
        if (this.checked) {
            numHoras.disabled = false;
            pagoHora.disabled = false;
        } else {
            numHoras.disabled = true;
            pagoHora.disabled = true;
            numHoras.value = "";
            pagoHora.value = "";
        }
    });
});
