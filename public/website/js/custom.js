// Js For Packages Calcualtor Range
var slider = document.getElementById("calRange");
var output = document.getElementById("rangeAmnt");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

// Js For Packages Growh Chart
var ctx = document.getElementById('myChart').getContext('2d');
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
		labels: ['6M','1Y','3Y','5Y','6Y'],
		datasets: [{
			label: 'Growth',
			backgroundColor: '#bff2e6',
			hoverBackgroundColor: '#95ead5',
			data: [
			100,
			200,
			300,
			400,
			500
			]
		}]
	}
});