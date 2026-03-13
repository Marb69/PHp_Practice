export const Profile = ()=>{

function pad(n) { return String(n).padStart(2,'0'); }
 
  function updateClock() {
    const now  = new Date();
    const h    = pad(now.getHours());
    const m    = pad(now.getMinutes());
    const s    = pad(now.getSeconds());
    const days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    const mths = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
 
    const timeEl = document.getElementById('live-clock');
    const dayEl  = document.getElementById('live-day');
    const subEl  = document.getElementById('today-date');
 
    if (timeEl) timeEl.textContent = `${h}:${m}:${s}`;
    if (dayEl)  dayEl.textContent  = `${days[now.getDay()]}`;
    if (subEl)  subEl.textContent  = `${mths[now.getMonth()]} ${now.getDate()}, ${now.getFullYear()}`;
  }
 
  updateClock();
  setInterval(updateClock, 1000);

}