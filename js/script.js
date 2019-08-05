
function validarCampos() {
    let name = $('input[name="Name"]').val();
    var lastName = $('input[name="LastName"]').val();
    let identification = $('input[name="Identification"]').val();

    //Validación de campos
    if (name.trim() == "") {
        alertify.alert(`<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading"><center>Error en los campos</center></h4>
        <p><center>Debe escribir un nombre válido</center></p>
        </div>`).set('basic', true);
        return false;
    }
    if (lastName.trim() == "") {
        alertify.alert(`<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading"><center>Error en los campos</center></h4>
        <p><center>Debe escribir un apellido válido</center></p>
        </div>`).set('basic', true);
        return false;
    }

    if (identification.trim() == "") {
        alertify.alert(`<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading"><center>Error en los campos</center></h4>
        <p><center>Debe escribir un documento válido</center></p>
        </div>`).set('basic', true);
        return false;
    }
}

/* Get datos */
async function getDatos() {
    const data = await fetch("http://localhost/Prueba/index.php/Chart/getDatos")
        .then((resp) => resp.json())
        .then(function (data) {
            return data;
        })
    return data;
}

async function getPieDatos() {
    const data = await fetch("http://localhost/Prueba/index.php/Chart/pieDatos")
        .then((resp) => resp.json())
        .then(function (data) {
            return data;
        })
    return data;
}

async function getUser(id) {
    const data = await fetch(`http://localhost/Prueba/index.php/Home/getUser/${id}`)
        .then((resp) => resp.json())
        .then(function (data) {
            return data;
        })
    return data;
}

/* Show modal update user */
function showModal(id) {
    getUser(id).then(val => {
        $('#updateForm').attr('action', `http://localhost/Prueba/index.php/Home/updateUser/${id}`);
        $('input[name="Name"]').val(val[0].Name);
        $('input[name="LastName"]').val(val[0].LastName);
        $('input[name="Identification"]').val(val[0].Identification);
        $('input[name="Email"]').val(val[0].Email);
        $('input[name="Birthdate"]').val(val[0].Birthdate);
        $('#select-gender').val(val[0].Gender);
        $('#updateUser').modal('show');
    })

}

/* Render graphs */
if ($('#chartContainer').length) {
    getDatos().then(val => {
        dataPoints = [];
        val.map(value => {
            dataPoints.push({ label: value.Gender, y: parseFloat(value.total) })
        })
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title: {
                text: "Cantidad de clientes por género"
            },
            axisY: {
                title: "Cantidad",
                suffix: "",
                includeZero: true
            },
            axisX: {
                title: "Género"
            },
            data: [{
                type: "column",
                yValueFormatString: "",
                dataPoints
            }]
        });
        chart.render();
    });

    getPieDatos().then(val => {
        dataPoints = [];
        val.map(value => {
            dataPoints.push({ y: parseFloat(value.total), label: value.Gender });
        })

        var chart = new CanvasJS.Chart("pieContainer", {
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: "Porcentaje de usuarios según el género"
            },
            data: [{
                type: "pie",
                startAngle: 25,
                toolTipContent: "<b>{label}</b>: {y}%",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - {y}%",
                dataPoints
            }]
        });
        chart.render();

    });
}