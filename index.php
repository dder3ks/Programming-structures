<!DOCTYPE html>
<html>
    <head>
        <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #333; 
}
.container {
    width: 80%;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}
h1 {
    color: #333;
    text-align: center;
    padding: 20px 0;
}
h2 {
    color: #666;
    border-bottom: 1px solid #ccc;
    padding: 10px 0;
    cursor: pointer;
}
h2::before {
    content: "▶ ";
    transition: transform 0.3s ease-in-out;
}
h2.active::before {
    content: "▼ ";
    transform: rotate(90deg);
}
p, .code-block {
    color: #999;
    line-height: 1.6;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease-in-out, padding 0.5s step-end, opacity 0.5s;
    padding: 0;
    opacity: 0;
}
.code-block {
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 20px;
    font-family: monospace;
}
        </style>
<script>
window.onload = function() {
    var h2s = document.getElementsByTagName('h2');
    for (var i=0; i<h2s.length; i++) {
        h2s[i].addEventListener('click', function() {
            var next = this.nextElementSibling;
            while (next && (next.tagName == 'P' || next.className == 'code-block')) {
                if (next.style.maxHeight === '0px') {
                    next.style.maxHeight = '500px';
                    next.style.padding = '10px 0';
                    next.style.opacity = '1';
                    this.classList.add('active');
                } else {
                    next.style.maxHeight = '0px';
                    next.style.padding = '0';
                    next.style.opacity = '0';
                    this.classList.remove('active');
                }
                next = next.nextElementSibling;
            }
        });
    }
};
</script>
    </head>
    <body>

        <div class="container">
        <h1>Estructuras de PHP explicadas por Derek </h1>

        <h2>Sentencia If</h2>
        <p>La sentencia If se utiliza para ejecutar un bloque de código si una condición específica es verdadera.</p>
        <p>Sintaxis: <br> if (condicion)  <br> { <br> codigo a ejecutar si la condicion es verdadera <br> }</p>
        <p>Ejemplo:</p>
            <div class="code-block">
                <?php
                $numero = 5;
                if ($numero > 0) {
                    echo "El número es positivo.";
                }
                ?>
            </div>

        <h2>Sentencia Switch</h2>
        <p>La sentencia Switch se utiliza para seleccionar uno de muchos bloques de código que se ejecutarán.</p>
        <p>Sintaxis: <br> switch (expresion) <br> { <br> case 1: codigo a ejecutar; <br> break; <br> default: codigo a ejecutar si no se cumplen los cases, anteriores; <br> }</p>
        <p>Ejemplo:</p>
            <div class="code-block">
                <?php
                $color = "rojo";
                switch ($color) {
                    case "rojo":
                        echo "El color es rojo.";
                        break;
                    case "azul":
                        echo "El color es azul.";
                        break;
                    default:
                        echo "El color no es ni rojo ni azul.";
                        break;
                }
                ?>
            </div>

        <h2>Sentencia While</h2>
        <p>La sentencia While se utiliza para ejecutar un bloque de código mientras una condición que hayas definido sea verdadera.</p>
        <p>Sintaxis: <br> while (condicion) <br> { <br> codigo a ejecutar <br> }</p>
        <p>Ejemplo:</p>
            <div class="code-block">
                <?php
                $i = 1;
                while ($i <= 5) {
                    echo "El número es " , $i , "<br>";
                    $i++;
                }
                ?>
            </div>

        <h2>Sentencia For</h2>
        <p>La sentencia For se utiliza para ejecutar un bloque de código la cantidad de veces que lo desees.</p>
        <p>Sintaxis: <br> for (expr_inicial; expr_final; expr_paso;) <br> { <br> codigo a ejecutar <br> }</p>
        <p>Ejemplo:</p>
            <div class="code-block">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "El número es " , $i ,"<br>";
                }
                ?>
            </div>

        <h2>Sentencia For Each</h2>
        <p>La sentencia For Each se utiliza para recorrer los elementos cuyo tamaño sea desconocido o cuyos indices no son correlativos o numericos.</p>
        <p>Sintaxis: <br> foreach ($matriz as $valor) <br> { <br> codigo a ejecutar <br> }</p>
        <p>Ejemplo:</p>
            <div class="code-block">
                <?php
                $colores = array(" rojo. <br>", " azul. <br>", " verde.");
                foreach ($colores as $valor) {
                    echo "El color es " , $valor;
                }
                ?>
            </div>
        </div>
    </body>
</html>