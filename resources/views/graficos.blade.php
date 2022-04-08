<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' ') }}
            
        </h2>
    </x-slot>

    <div id="tamaño">
        
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <canvas id="grafico"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('grafico');
            const myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode($meses);?>,
                    datasets: [{
                        label: 'Ventas de 2020',
                        data: <?php echo json_encode($datos1);?>,
                        hitRadius: 50,
                        pointRadius: 0,
                        backgroundColor: [
                            'rgba(255, 100, 10, 1)',
                            
            ],
            borderColor: [
                            'rgba(255, 100, 10, 1)',
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'Ventas de 2021',
                        data: <?php echo json_encode($datos2);?>,
                        hitRadius: 50,
                        pointRadius: 0,
                        backgroundColor: [
                            'rgba(60, 255, 10, 1)',
            ],
            borderColor: [
                            'rgba(60, 255, 10, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    plugins: {
                        title: {
                            display: true,
                            text: 'Ventas producto Z 2020-2021'
                        }
                    },
                    bezierCurve: false,
                    elements: {
                        line: {
                            tension: 0.2,
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                            display: false,
                            drawBorder: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            },
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
</x-app-layout>
