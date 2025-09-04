// Mobile menu toggle
const menuBtn = document.getElementById('menuBtn');
const menu = document.getElementById('menu');
menuBtn?.addEventListener('click', () => {
  const isOpen = menu.classList.toggle('open');
  menuBtn.setAttribute('aria-expanded', String(isOpen));
});

// Simple form validation demo
const form = document.getElementById('quote');
const note = document.getElementById('formNote');
form?.addEventListener('submit', (e) => {
  e.preventDefault();
  const data = new FormData(form);
  const name = (data.get('name')||'').toString().trim();
  const email = (data.get('email')||'').toString().trim();
  if(!name || !email){
    note.textContent = 'Please enter your name and a valid email.';
    note.style.color = getComputedStyle(document.documentElement).getPropertyValue('--warn');
    return;
  }
  note.textContent = 'Thanks '+ name + '! We\'ll reach out within 1 business day.';
  note.style.color = 'var(--brand)';
  form.reset();
});

// Year in footer
document.getElementById('year').textContent = new Date().getFullYear();

// Animate hero meter
const meter = document.querySelector('.bar span');
if(meter){
  let w = 72; let dir = 1;
  setInterval(()=>{
    w += dir * (Math.random()*2 + .6);
    if(w > 98){dir = -1} 
    if(w < 20){dir = 1}
    meter.style.width = w.toFixed(1) + '%';
  }, 900);
}
