// Función para mostrar el contenido de acuerdo a la sección seleccionada
function showContent(section) {
    const contentSections = document.querySelectorAll('.content');
    contentSections.forEach((section) => {
        section.classList.remove('active');
    });

    const selectedSection = document.getElementById(section);
    selectedSection.classList.add('active');
}

// Función para alternar entre los gráficos de barras y torta
function toggleChart(chartType) {
    // Ocultar ambos gráficos
    const barChart = document.getElementById('myBarChart');
    const pieChart = document.getElementById('myPieChart');
    
    // Remover la clase 'visible' de ambos gráficos
    barChart.classList.remove('visible');
    pieChart.classList.remove('visible');
    
    // Mostrar el gráfico seleccionado
    if (chartType === 'bar') {
        barChart.classList.add('visible');
    } else if (chartType === 'pie') {
        pieChart.classList.add('visible');
    }
}

// Crear un gráfico de barras en el Dashboard
window.onload = function() {
    var barCtx = document.getElementById('myBarChart').getContext('2d');
    var myBarChart = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
            datasets: [{
                label: 'Estudiantes Inscritos',
                data: [30, 45, 60, 35, 50],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var pieCtx = document.getElementById('myPieChart').getContext('2d');
    var myPieChart = new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Python', 'JavaScript', 'Java', 'C#', 'PHP'],
            datasets: [{
                label: 'Distribución de Cursos',
                data: [25, 40, 15, 10, 10],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });

    // Mostrar el gráfico de barras por defecto
    toggleChart('bar');
};
