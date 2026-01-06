<?php 
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>StayChat - Hotel Website</title>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    background: #f8f9fc;
}

.container {
    display: flex;
    gap: 30px;
    padding: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.calendar-card, .times {
    flex: 0 0 350px;
    padding: 25px;
    border-radius: 12px;
}

.calendar-card {
    background: #081A35FF;
    color: white;
}

.times {
    background: white;
    box-shadow: 0 0 12px rgba(0,0,0,0.1);
}

.title { text-align: center; font-size: 22px; margin-bottom: 10px; }

.calendar {
  width: 100%;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.weekdays, .days {
  display: grid;
  grid-template-columns: repeat(7, 1fr);
  text-align: center;
  margin-top: 10px;
}

.days button {
  border: none;
  background: none;
  padding: 10px;
  cursor: pointer;
  border-radius: 50%;
}

.today {
  background: #2563eb;
  color: #fff;
}

.past {
  color: #c1c1c1;
  pointer-events: none;
  opacity: 0.4;
}

.future {
  cursor: pointer;
  color: #ffffff;
}

.slot {
    border: 1px solid #2a7bff;
    padding: 12px;
    border-radius: 8px;
    text-align: center;
    margin-bottom: 10px;
    color: #2a7bff;
    cursor: pointer;
}

.slot:hover { background: #e6f0ff; }

.center-img { display: block; margin: 0 auto; }

@media (max-width: 768px) {
    .container {
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .calendar-card, .times { width: 100%; max-width: 400px; flex: none; }
    #timeSlots { display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; }
}
</style>
</head>
<body>

<div class="container">
    <div class="calendar-card">
        <div class="title">Staychat AI Platform Demo</div>

        <div class="calendar">
            <div class="header">
                <button id="prev">‹</button>
                <h3 id="monthYear"></h3>
                <button id="next">›</button>
            </div>

            <div class="weekdays">
                <div>Mon</div><div>Tue</div><div>Wed</div>
                <div>Thu</div><div>Fri</div><div>Sat</div><div>Sun</div>
            </div>

            <div class="days" id="days"></div>
        </div>
    </div>

    <div class="times">
        <img src="staygreen.avif" class="center-img" alt="StayChat" width="60">
        <h3 id="selectedDateText"></h3>
        <div id="timeSlots"></div>
    </div>
</div>

<script>
const daysEl = document.getElementById("days");
const monthYearEl = document.getElementById("monthYear");
const prevBtn = document.getElementById("prev");
const nextBtn = document.getElementById("next");
const timeSlotsEl = document.getElementById("timeSlots");
const selectedDateText = document.getElementById("selectedDateText");

let selectedFullDate = "";
let current = new Date();
const today = new Date();
today.setHours(0,0,0,0);

const months = [
  "January","February","March","April","May","June",
  "July","August","September","October","November","December"
];

function renderCalendar() {
  daysEl.innerHTML = "";

  const month = current.getMonth();
  const year = current.getFullYear();
  monthYearEl.textContent = `${months[month]} ${year}`;

  // disable prev button for past months
  prevBtn.disabled = (year < today.getFullYear()) || (year === today.getFullYear() && month <= today.getMonth());

  const firstDay = new Date(year, month, 1).getDay();
  const totalDays = new Date(year, month + 1, 0).getDate();
  const offset = (firstDay + 6) % 7; // adjust for Mon start

  for (let i = 0; i < offset; i++) daysEl.innerHTML += `<div></div>`;

  for (let day = 1; day <= totalDays; day++) {
    const date = new Date(year, month, day);
    date.setHours(0,0,0,0);

    let cls = "future";
    let onclick = `onclick="selectDate(${day})"`;

    if (date < today) {
        cls = "past";
        onclick = ""; // past dates not clickable
    } else if (date.getTime() === today.getTime()) {
        cls = "today";
        onclick = `onclick="selectDate(${day})"`; // today clickable
    }

    daysEl.innerHTML += `
      <button class="${cls}" data-date="${year}-${month+1}-${day}" ${onclick}>
        ${day}
      </button>
    `;
  }
}

function selectDate(day) {
  const month = current.getMonth();
  const year = current.getFullYear();
  selectedFullDate = `${months[month]} ${day}, ${year}`;
  selectedDateText.innerHTML = `Available Times<br><b>${selectedFullDate}</b>`;
  showSlots();
}

function showSlots() {
    const times = [
        "9:00 am","9:15 am","9:30 am","9:45 am",
        "10:00 am","10:15 am","10:30 am","10:45 am",
        "11:00 am","11:15 am"
    ];
    timeSlotsEl.innerHTML = "";
    times.forEach(time => {
        const slot = document.createElement("div");
        slot.className = "slot";
        slot.textContent = time;
        slot.onclick = () => openForm(time);
        timeSlotsEl.appendChild(slot);
    });
}

function openForm(time) {
    window.location.href = `page2.php?date=${encodeURIComponent(selectedFullDate)}&time=${encodeURIComponent(time)}`;
}

prevBtn.onclick = () => { 
    if (!prevBtn.disabled) {
        current.setMonth(current.getMonth() - 1); 
        renderCalendar(); 
    }
};
nextBtn.onclick = () => { current.setMonth(current.getMonth() + 1); renderCalendar(); };

renderCalendar();
</script>

<?php 
include "Footer.php";
?>
</body>
</html>

