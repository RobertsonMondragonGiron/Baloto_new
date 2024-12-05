<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Almacenados</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Resultados Almacenados</h1>

    {% if resultados %}
        <table>
            <thead>
                <tr>
                    <th>Columna 1</th><th>Columna 2</th><th>Columna 3</th><th>Columna 4</th><th>Columna 5</th><th>Columna 6</th><th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                {% for row in resultados %}
                    <tr>
                        <td>{{ row[1] }}</td>
                        <td>{{ row[2] }}</td>
                        <td>{{ row[3] }}</td>
                        <td>{{ row[4] }}</td>
                        <td>{{ row[5] }}</td>
                        <td>{{ row[6] }}</td>
                        <td>{{ row[7] }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>No hay resultados almacenados.</p>
    {% endif %}

    <br>
    <a href="/">Volver al formulario</a>
</body>
</html>

