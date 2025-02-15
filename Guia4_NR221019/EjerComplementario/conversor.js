document.getElementById("conversionForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let cantidad = document.getElementById("cantidad").value;
    let unidadOrigen = document.getElementById("unidadOrigen").value;
    let unidadDestino = document.getElementById("unidadDestino").value;

    fetch("converuni.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `cantidad=${cantidad}&unidadOrigen=${unidadOrigen}&unidadDestino=${unidadDestino}`
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById("resultado").innerText = `${cantidad} ${unidadOrigen} = ${data.resultado} ${unidadDestino}`;
    })
    .catch(error => console.error("Error:", error));
});
