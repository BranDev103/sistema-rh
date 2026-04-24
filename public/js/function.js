        document.getElementById("fecha_nacimiento").addEventListener("change", function() {
            let fecha = new Date(this.value);
            let hoy = new Date();
            let edad = hoy.getFullYear() - fecha.getFullYear();
            let m = hoy.getMonth() - fecha.getMonth();

            if (m < 0 || (m === 0 && hoy.getDate() < fecha.getDate())) {
                edad--;
            }

            document.getElementById("edad").value = edad;

            if (edad < 18) {
                alert("No es posbile registrar a menores de edad");
            }
        });


        document.getElementById("formulario").addEventListener("submit", function(e) {
            let curp = document.getElementById("curp").value.toUpperCase();
            let regexCURP = /^[A-Z][AEIOU][A-Z]{2}[0-9]{6}[HM][A-Z]{2}[BCDFGHJKLMNPQRSTVWXYZ]{3}[A-Z0-9][0-9]$/;

            if (!regexCURP.test(curp)) {
                alert("CURP inválida");
                e.preventDefault();
            }

            let nss = document.getElementById("nss").value;
            if (nss.length !== 11) {
                alert("NSS inválido");
                e.preventDefault();
            }

            let clabe = document.getElementById("clabe").value;
            if (clabe.length !== 18) {
                alert("CLABE inválida");
                e.preventDefault();
            }
        });