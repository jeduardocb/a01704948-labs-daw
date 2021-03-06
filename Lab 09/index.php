<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Lab 09 - A01704948</title>
    </head>
    <body>
        <header>
            <h1>Lab 09: Introducción a php</h1>
        </header>
        <section>
            <h2>Ejercicios</h2>
            <?php
                $numeros1 = array(1, 2, 3, 4, 5);
                $numeros2 = array(100, 75, 90, 48, 80, 1);
            ?>
            <article class="ejercicio" id="ejercicio1">
                <h3>Ejercicio 1</h3>
                <?php
                    function promedio($arr) {
                        $suma = 0;
                        for ($i=0; $i < sizeof($arr); $i++) {
                            $suma += $arr[$i];
                        }
                        $suma /= sizeof($arr);
                        return $suma;
                    }
                    echo "Arreglo 1: [1, 2, 3, 4, 5]";
                    echo "<br>";
                    echo "El promedio de numeros es " . promedio($numeros1);
                    echo "<br> <br>";
                    echo "Arreglo 2: [100, 75, 90, 48, 80, 1]";
                    echo "<br>";
                    echo "El promedio de numeros es " . promedio($numeros2);
                ?>
            </article>
            <article class="ejercicio" id="ejercicio2">
                <h3>Ejercicio 2</h3>
                <?php
                    function mediana($arr) {
                        sort($arr);
                        $mitad = sizeof($arr)/2;
                        if(sizeof($arr) % 2 == 0) {
                            return ($arr[$mitad] + $arr[$mitad-1])/2;
                        }
                        else {
                            return $arr[sizeof($arr)/2];
                        }
                    }
                    echo "Arreglo 1: [1, 2, 3, 4, 5]";
                    echo "<br>";
                    echo "La mediana es " . mediana($numeros1);
                    echo "<br> <br>";
                    echo "Arreglo 2: [100, 75, 90, 48, 80, 1]";
                    echo "<br>";
                    echo "La mediana es " . mediana($numeros2);

                ?>
            </article>
            <article class="ejercicio" id="ejercicio3">
                <h3>Ejercicio 3</h3>
                <ul>
                    <?php
                        function lista($arr) {
                            sort($arr);
                            echo "<li> De menor a mayor: ";
                            for($i = 0; $i < sizeof($arr); $i++) {
                                echo $arr[$i] . " ";
                            }
                            echo "</li> <li> De mayor a menor: ";
                            rsort($arr);
                            for($i = 0; $i < sizeof($arr); $i++) {
                                echo $arr[$i] . " ";
                            }
                            echo "</li> <li> Promedio: " . promedio($arr) . "</li>";
                            echo "<li> Mediana: " . mediana($arr);
                        }
                        lista($numeros1);
                        echo "<br><br>";
                        lista($numeros2);
                    ?>
                </ul>
            </article>
            <article class="ejercicio" id="ejercicio4">
                <h3>Ejercicio 4</h3>
                <?php
                    function cuadradosCubos($n) {
                        echo "<tr>";
                        for ($i = 1; $i <= $n; $i++) {
                            echo "<td>" . $i;
                        }
                        echo "</tr>";

                        echo "<tr>";
                        for($i = 1; $i <= $n; $i++) { //cuadrados
                            echo "<td> " . pow($i, 2) . "</td>";
                        }
                        echo "</tr>";

                        echo "<tr>";
                        for($i = 1; $i <= $n; $i++) { //cubos
                            echo "<td> " . pow($i, 3) . "</td>";
                        }
                        echo "</tr>";
                    }
                ?>
                <table border="1">
                    <?php cuadradosCubos(10); ?>
                </table>
                <br><br>
                <table border="1">
                    <?php cuadradosCubos(35); ?>
                </table>
            </article>
            <article class="ejercicio" id="ejercicio5">
                <h3>Ejercicio 5: Convertidor de grados celsius a farenheit</h3>
                <p>Los inputs de prueba fueron <em>140</em> y <em>45</em></p>
                <?php
                    function convierteGrados($grados) {
                        $grados_farenheit = ($grados * 9/5) + 32;
                        return $grados_farenheit;
                    }
                ?>
                <p>Prueba con 140 = <?= convierteGrados(140);?></p><br>
                <p>Prueba con 45 = <?= convierteGrados(45);?></p>
            </article>
        </section>
        <hr>
        <section>
            <h2>Preguntas a Responder</h2>
            <article class="pregunta" id="pregunta1">
                <h3>¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</h3>
                <p>Muestra la información del estado actual de PHP. Esto incluye información sobre las opciones de compilación , versión e información del sistema operativo.</p>
                <p>Me llama la atenión que esta función pueda recibir parámetros para personalizar la salida. Por ejemplo <em>phpinfo(<strong>INFO_CREDITS</strong>)</em> meustra únicamente los créditos de PHP.</p>
                <p><em>phpinfo(<strong>INFO_ENVIRONMENT</strong>)</em> muestra la información de variables de entorno.</p>
                <p>De igual forma, me aprece curioso que la función regrese True o False si funciona o no.</p>
            </article>
            <article class="pregunta" id="pregunta2">
                <h3>¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</h3>
                <p>Agregar seguridad como prevención de ataques (Por ejemplo, para evitar inyecciones de scripts)</p>
            </article>
            <article class="pregunta" id="pregunta3">
                <h3>¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</h3>
                <p>Lo que hace el servidor es procesar el request que hace el cliente, regresándole así la información correspondiente.</p>
            </article>
        </section>
        <hr>
        <section>
            <h2>Fuentes Consultadas</h2>
        </section>
        <hr>
        <footer>
            <p>Mauricio Alvarez Milán. A01704948. Marzo del 2020.</p>
        </footer>
    </body>
</html>
