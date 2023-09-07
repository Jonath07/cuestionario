document.getElementById('cuestionario_Web').addEventListener('submit', function (e) {
    e.preventDefault();

    var p1Respuesta = document.querySelector('input[name="p1"]:checked');
    var p2Respuesta = document.querySelector('input[name="p2"]:checked');
    var p3Respuesta = document.querySelector('input[name="p2"]:checked');
    var p4Respuesta = document.querySelector('input[name="p2"]:checked');
    var p5Respuesta = document.querySelector('input[name="p2"]:checked');

    if (!p1Respuesta || !p2Respuesta || !p3Respuesta || !p4Respuesta || !p5Respuesta) {
        alert('Por favor, responde todas las preguntas.');
        return;
    }

    this.submit();
});
