var dateInput = document.getElementById('date');

var today = new Date();

var formattedToday = today.toISOString().substr(0, 10);

dateInput.setAttribute('min', formattedToday);