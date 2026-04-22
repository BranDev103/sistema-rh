document.getElementById("filtroCompania").addEventListener("click", function() {
            let filtro = this.value;
            let filas = document.querySelectorAll("table tbody tr");
            filas.forEach((fila) => {
                let texto = fila.cells[1].textContent;
                fila.style.display = texto.includes(filtro) ? "" : "none";
            });
        });