<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Colegio de Programación</title>
    <link rel="stylesheet" href="css/stylese.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>Quipux</h2>
            </div>
            <ul class="sidebar-links">
                <li><a href="#" onclick="showContent('dashboard')">Dashboard</a></li>
                <li><a href="#" onclick="showContent('courses')">Cursos</a></li>
                <li><a href="#" onclick="showContent('students')">Estudiantes</a></li>
                <li><a href="#" onclick="showContent('teachers')">Profesores</a></li>
                <li><a href="#" onclick="showContent('contact')">Contacto</a></li>
                
                <!-- Botón para ir a la página principal -->
                <a href="index.php" class="btn-go-home">Salir</a>
            </ul>
        </div>

        <!-- Main content -->
        <div class="main-content">
            <div class="header">
                <h1>Bienvenido al Dashboard</h1>
            </div>
            <div id="dashboard" class="content active">
                <h2>Resumen General</h2>
                <p> Estadísticas generales del colegio.</p>

                <!-- Botones para alternar entre gráficos -->
                <div class="chart-toggle-buttons">
                    <button onclick="toggleChart('bar')">Gráfico de Barras</button>
                    <button onclick="toggleChart('pie')">Gráfico de Torta</button>
                </div>

                <!-- Contenedor de gráficos -->
                <div class="chart-container">
                    <canvas id="myBarChart" width="500" height="500"></canvas>
                    <canvas id="myPieChart" width="500" height="500"></canvas>
                </div>
            </div>
            <div id="courses" class="content">
                <h2>Cursos Ofrecidos</h2>
                <p>Listado de cursos disponibles para los estudiantes.</p>
                 <!-- Tabla de cursos -->
    <table class="courses-table">
        <thead>
            <tr>
                <th>Nombre del Curso</th>
                <th>Descripción</th>
                <th>Instructor</th>
                <th>Duración</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Desarrollo Web</td>
                <td>Curso completo para aprender a crear sitios web con HTML, CSS, JavaScript.</td>
                <td>Juan Pérez</td>
                <td>12 semanas</td>
            </tr>
            <tr>
                <td>Fundamentos de Python</td>
                <td>Curso introductorio para aprender a programar en Python desde cero.</td>
                <td>Ana García</td>
                <td>8 semanas</td>
            </tr>
            <tr>
                <td>JavaScript Avanzado</td>
                <td>Curso avanzado para desarrollar aplicaciones web con JavaScript.</td>
                <td>Carlos Rodríguez</td>
                <td>10 semanas</td>
            </tr>
            <tr>
                <td>Desarrollo de Apps con React</td>
                <td>Curso para aprender a desarrollar aplicaciones web usando React.</td>
                <td>Laura Martínez</td>
                <td>14 semanas</td>
            </tr>
            <tr>
                <td>Introducción a la Inteligencia Artificial</td>
                <td>Curso para conocer los fundamentos de la inteligencia artificial y sus aplicaciones.</td>
                <td>Pedro Sánchez</td>
                <td>16 semanas</td>
            </tr>
        </tbody>
    </table>
            </div>
            <div id="students" class="content">
                <h2>Estudiantes</h2>
                <p>Información sobre los estudiantes matriculados.</p>

                <!-- Tabla de estudiantes -->
    <table class="students-table">
        <thead>
            <tr>
                <th>Nombre del Estudiante</th>
                <th>Curso</th>
                <th>Estado</th>
                <th>Fecha de Inscripción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mario Gómez</td>
                <td>Desarrollo Web</td>
                <td>Matriculado</td>
                <td>01/09/2024</td>
            </tr>
            <tr>
                <td>Luisa Fernández</td>
                <td>Fundamentos de Python</td>
                <td>Matriculada</td>
                <td>15/08/2024</td>
            </tr>
            <tr>
                <td>Juan Pérez</td>
                <td>JavaScript Avanzado</td>
                <td>Matriculado</td>
                <td>20/09/2024</td>
            </tr>
            <tr>
                <td>Ana Martínez</td>
                <td>Desarrollo de Apps con React</td>
                <td>En espera</td>
                <td>05/10/2024</td>
            </tr>
            <tr>
                <td>Pedro Sánchez</td>
                <td>Introducción a la Inteligencia Artificial</td>
                <td>Matriculado</td>
                <td>12/11/2024</td>
            </tr>
        </tbody>
    </table>
            </div>
            <div id="teachers" class="content">
                <h2>Profesores</h2>
                <p>Listado de profesores del colegio.</p>

                <!-- Tabla de profesores -->
    <table class="professors-table">
        <thead>
            <tr>
                <th>Nombre del Profesor</th>
                <th>Curso</th>
                <th>Experiencia</th>
                <th>Fecha de Inicio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Juan Pérez</td>
                <td>Desarrollo Web</td>
                <td>5 años</td>
                <td>01/09/2020</td>
            </tr>
            <tr>
                <td>Ana García</td>
                <td>Fundamentos de Python</td>
                <td>3 años</td>
                <td>15/08/2021</td>
            </tr>
            <tr>
                <td>Carlos Rodríguez</td>
                <td>JavaScript Avanzado</td>
                <td>7 años</td>
                <td>20/09/2019</td>
            </tr>
            <tr>
                <td>Laura Martínez</td>
                <td>Desarrollo de Apps con React</td>
                <td>4 años</td>
                <td>05/10/2022</td>
            </tr>
            <tr>
                <td>Pedro Sánchez</td>
                <td>Introducción a la Inteligencia Artificial</td>
                <td>6 años</td>
                <td>12/11/2021</td>
            </tr>
        </tbody>
    </table>
            </div>
            <div id="contact" class="content">
                <h2>Contacto</h2>
                <p>Detalles de contacto del colegio.</p>

                 <!-- Tabla de contactos -->
    <table class="contacts-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo Electrónico</th>
                <th>Motivo de Contacto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>María López</td>
                <td>+34 600 123 456</td>
                <td>maria.lopez@email.com</td>
                <td>Consulta sobre cursos</td>
            </tr>
            <tr>
                <td>Carlos García</td>
                <td>+34 600 234 567</td>
                <td>carlos.garcia@email.com</td>
                <td>Soporte técnico</td>
            </tr>
            <tr>
                <td>Ana Ramírez</td>
                <td>+34 600 345 678</td>
                <td>ana.ramirez@email.com</td>
                <td>Información sobre horarios</td>
            </tr>
            <tr>
                <td>Pedro Martínez</td>
                <td>+34 600 456 789</td>
                <td>pedro.martinez@email.com</td>
                <td>Pregunta sobre materiales de estudio</td>
            </tr>
            <tr>
                <td>Laura Sánchez</td>
                <td>+34 600 567 890</td>
                <td>laura.sanchez@email.com</td>
                <td>Consulta sobre inscripciones</td>
            </tr>
        </tbody>
    </table>
            </div>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
