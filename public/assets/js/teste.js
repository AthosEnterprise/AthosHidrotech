// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}




var xValues = ["Julho", "Agosto", "Setembro", "Outubro", "Novembro"];
var yValues = [227234, 355213, 325123, 362351, 315241];
var barColors = ["rgb(0, 0, 119)", "rgb(0, 0, 119)", "rgb(0, 0, 119)", "rgb(0, 0, 119)", "rgb(0, 0, 119)"];

new Chart("myChart1", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: "Consumo de Água"
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                    max: 500000
                }
            }],
        }
    }
});


var xValues = ["18/11/2023", "19/11/2023", "20/11/2023", "21/11/2023", "22/11/2023"];
var yValues = [8982, 5872, 9731, 11423, 7723];
var barColors = ["rgb(0, 0, 119)", "rgb(0, 0, 119)", "rgb(0, 0, 119)", "rgb(0, 0, 119)", "rgb(0, 0, 119)"];

new Chart("myChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: "Consumo de Água"
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                    max: 20000
                }
            }],
        }
    }
});
var xValues = ["Caixa 1", "Caixa 2", "Caixa 3", "Caixa 4"];
var yValues = [4500, 3400, 4000, 3312];
var barColors = ["rgb(0, 0, 119)", "rgb(0, 0, 119)", "rgb(0, 0, 119)", "rgb(0, 0, 119)"];

new Chart("myChart2", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: "Nivel Da Água"
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                    max: 5000
                }
            }],
        }
    }
});