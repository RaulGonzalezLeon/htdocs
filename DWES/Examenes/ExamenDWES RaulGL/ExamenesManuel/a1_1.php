<?php
// Definición de los datos de los estudiantes
$students = [
    [
        "name" => "Alex García",
        "dob" => "2005-03-14",
        "residence" => "Madrid",
        "phone" => "691827314",
        "email" => "alex.garcia@example.com",
        "repeater" => "No",
        "assessments" => [
            "Mathematics" => [6, 7, 8, 6, 7],
            "Language" => [5, 6, 7],
            "English" => [6, 7, 6, 6],
            "Technology" => [8, 7]
        ]
    ],
    [
        "name" => "Maria López",
        "dob" => "2005-05-20",
        "residence" => "Barcelona",
        "phone" => "681624324",
        "email" => "maria.lopez@example.com",
        "repeater" => "Sí",
        "assessments" => [
            "Mathematics" => [5, 6, 7, 6, 6],
            "Language" => [6, 5, 7],
            "English" => [6, 6, 5, 6],
            "Technology" => [6, 7]
        ]
    ],
    [
        "name" => "Juan Pérez",
        "dob" => "2004-11-08",
        "residence" => "Sevilla",
        "phone" => "601023744",
        "email" => "juan.perez@example.com",
        "repeater" => "No",
        "assessments" => [
            "Mathematics" => [7, 6, 8, 7, 7],
            "Language" => [6, 7, 6],
            "English" => [7, 6, 7, 6],
            "Technology" => [8, 6]
        ]
    ],
    [
        "name" => "Lucía Sánchez",
        "dob" => "2005-09-22",
        "residence" => "Valencia",
        "phone" => "691273314",
        "email" => "lucia.sanchez@example.com",
        "repeater" => "Sí",
        "assessments" => [
            "Mathematics" => [4, 5, 4, 3, 4],
            "Language" => [5, 5, 6],
            "English" => [4, 4, 5, 4],
            "Technology" => [5, 4]
        ]
    ],
    [
        "name" => "Carlos Martínez",
        "dob" => "2005-01-05",
        "residence" => "Zaragoza",
        "phone" => "611827344",
        "email" => "carlos.martinez@example.com",
        "repeater" => "No",
        "assessments" => [
            "Mathematics" => [5, 4, 5, 4, 5],
            "Language" => [4, 4, 5],
            "English" => [5, 4, 4, 4],
            "Technology" => [4, 5]
        ]
    ]
];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Informe Detallado de Estudiantes</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>Sistema de Informe Detallado de Estudiantes</h1>

    <!-- Estudiante 1: Alex García -->
    <h2>Nombre del Estudiante: <?= $students[0]['name'] ?></h2>
    <p><strong>Fecha de Nacimiento:</strong> <?= $students[0]['dob'] ?></p>
    <p><strong>Residencia:</strong> <?= $students[0]['residence'] ?></p>
    <p><strong>Teléfono:</strong> <?= $students[0]['phone'] ?></p>
    <p><strong>Correo Electrónico:</strong> <?= $students[0]['email'] ?></p>
    <p><strong>Repetidor:</strong> <?= $students[0]['repeater'] ?></p>

    <?php
    // Calificaciones del estudiante
    $mathFinal = ($students[0]["assessments"]["Mathematics"][0] + $students[0]["assessments"]["Mathematics"][1] + $students[0]["assessments"]["Mathematics"][2] + $students[0]["assessments"]["Mathematics"][3] + $students[0]["assessments"]["Mathematics"][4]) / 5;
    $languageFinal = (($students[0]["assessments"]["Language"][0] + $students[0]["assessments"]["Language"][1]) / 2) * 0.4 + ($students[0]["assessments"]["Language"][2] * 0.6);
    $englishFinal = ($students[0]["assessments"]["English"][0] + $students[0]["assessments"]["English"][1] + $students[0]["assessments"]["English"][2] + $students[0]["assessments"]["English"][3]) / 4;
    $technologyFinal = ($students[0]["assessments"]["Technology"][0] * 0.8) + ($students[0]["assessments"]["Technology"][1] * 0.2);
    ?>

    <br>
    <h3>Calificaciones</h3>
    <p><strong>Matemáticas:</strong> <?= $mathFinal ?></p>
    <p><strong>Lengua:</strong> <?= $languageFinal ?></p>
    <p><strong>Inglés:</strong> <?= $englishFinal ?></p>
    <p><strong>Tecnología:</strong> <?= $technologyFinal ?></p>
    <br>
    <p>¡Felicidades, has aprobado!</p>
    <hr>

    <!-- Estudiante 2: María López -->
    <h2>Nombre del Estudiante: <?= $students[1]['name'] ?></h2>
    <p><strong>Fecha de Nacimiento:</strong> <?= $students[1]['dob'] ?></p>
    <p><strong>Residencia:</strong> <?= $students[1]['residence'] ?></p>
    <p><strong>Teléfono:</strong> <?= $students[1]['phone'] ?></p>
    <p><strong>Correo Electrónico:</strong> <?= $students[1]['email'] ?></p>
    <p><strong>Repetidor:</strong> <?= $students[1]['repeater'] ?></p>

    <?php
    // Calificaciones del estudiante
    $mathFinal = ($students[1]["assessments"]["Mathematics"][1] + $students[1]["assessments"]["Mathematics"][1] + $students[1]["assessments"]["Mathematics"][2] + $students[1]["assessments"]["Mathematics"][3] + $students[1]["assessments"]["Mathematics"][4]) / 5;
    $languageFinal = (($students[1]["assessments"]["Language"][0] + $students[1]["assessments"]["Language"][1]) / 2) * 0.4 + ($students[1]["assessments"]["Language"][2] * 0.6);
    $englishFinal = ($students[1]["assessments"]["English"][0] + $students[1]["assessments"]["English"][1] + $students[1]["assessments"]["English"][2] + $students[1]["assessments"]["English"][3]) / 4;
    $technologyFinal = ($students[1]["assessments"]["Technology"][0] * 0.8) + ($students[1]["assessments"]["Technology"][1] * 0.2);
    ?>

    <br>
    <h3>Calificaciones</h3>
    <p><strong>Matemáticas:</strong> <?= $mathFinal ?></p>
    <p><strong>Lengua:</strong> <?= $languageFinal ?></p>
    <p><strong>Inglés:</strong> <?= $englishFinal ?></p>
    <p><strong>Tecnología:</strong> <?= $technologyFinal ?></p>
    <br>
    <p>¡Felicidades, has aprobado!</p>
    <hr>

    <!--- idem para el resto de estudiantes -->
</body>

</html>