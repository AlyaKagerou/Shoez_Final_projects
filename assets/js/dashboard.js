// toggle sidebar
var menu_btn = document.querySelector("#menu-btn")
var sidebar = document.querySelector("#sidebar")
var container = document.querySelector(".my-container")
    menu_btn.addEventListener("click", () => {
    sidebar.classList.toggle("active-nav")
    container.classList.toggle("active-cont")
});

// Chart.js
const ctx = document.getElementById('myChart');    
new Chart(ctx, {
type: 'bar',
data: {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
    label: '# of Votes',
    data: [12, 19, 3, 5, 2, 3],
    backgroundColor:[
        '#EF4A53',
        '#6897FF',
        '#FFE663',
        '#5EFF5A',
        '#9E63FF',
        '#FFAC60'
    ],
    borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
            }
        }
});

// Toggle Darkmode
var element = document.body;

function ubahMode(){
    element.classList.toggle("dark");
    if (element.classList.contains('dark')){
        localStorage.setItem('theme', 'dark');
    }else{
        localStorage.setItem('theme','light');
    }
}
var theme = localStorage.getItem("theme");
if(theme == 'dark'){
    element.classList.add("dark");
}