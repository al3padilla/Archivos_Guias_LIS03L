function validarFecha() {
    const fechaInput = document.getElementById("fecha_nacimiento").value;
    const fechaNac = new Date(fechaInput);
    const hoy = new Date();

    if (fechaNac >= hoy) {
        alert("La fecha de nacimiento debe ser anterior a la fecha actual.");
        return false;
    }
    return true;
}
