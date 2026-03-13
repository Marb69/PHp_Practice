export const addemployee = ()=> {

   
  const firstName = document.getElementById('first_name');
  const lastName  = document.getElementById('last_name');
  const previewName = document.getElementById('previewName');
 
  function updateName() {
    const f = firstName.value.trim();
    const l = lastName.value.trim();
    previewName.textContent = (f || l) ? `${f} ${l}`.trim() : 'New Employee';
  }
  firstName.addEventListener('input', updateName);
  lastName.addEventListener('input', updateName);
 

  document.getElementById('department').addEventListener('change', function() {
    const labels = {
      engineering:'Engineering', hr:'Human Resources', finance:'Finance',
      operations:'Operations', marketing:'Marketing', sales:'Sales',
      it:'IT', legal:'Legal', admin:'Administration'
    };
    document.getElementById('prevDept').textContent = labels[this.value] || '—';
  });
 

  document.getElementById('position').addEventListener('change', function() {
    const labels = {
      manager:'Manager', team_lead:'Team Lead', senior_dev:'Senior Dev',
      junior_dev:'Junior Dev', analyst:'Analyst', specialist:'Specialist',
      coordinator:'Coordinator', associate:'Associate', intern:'Intern'
    };
    document.getElementById('prevPos').textContent = labels[this.value] || '—';
  });
 

  document.getElementById('salary').addEventListener('input', function() {
    const val = parseFloat(this.value);
    document.getElementById('prevSalary').textContent =
      val ? '₱' + val.toLocaleString('en-PH', {minimumFractionDigits:2}) : '—';
  });
 
 
  document.getElementById('date_hired').addEventListener('change', function() {
    if (!this.value) { document.getElementById('prevDate').textContent = '—'; return; }
    const d = new Date(this.value + 'T00:00:00');
    document.getElementById('prevDate').textContent = d.toLocaleDateString('en-PH', {
      year:'numeric', month:'short', day:'numeric'
    });
  });
 

  const statusColors = {
    active:     { bg:'#ecfdf5', color:'#059669', label:'Active' },
    probation:  { bg:'#eff6ff', color:'#2563EB', label:'Probationary' },
    on_leave:   { bg:'#fffbeb', color:'#d97706', label:'On Leave' },
    inactive:   { bg:'#f1f5f9', color:'#64748B', label:'Inactive' },
  };
  document.querySelectorAll('input[name="status"]').forEach(r => {
    r.addEventListener('change', function() {
      const s = statusColors[this.value];
      const sp = document.getElementById('statusPreview');
      sp.style.background = s.bg;
      sp.style.color = s.color;
      sp.innerHTML = `<div class="dot" style="background:${s.color};width:7px;height:7px;border-radius:50%;"></div> ${s.label}`;
    });
  });
 

  function togglePw(fieldId, iconId) {
    const input = document.getElementById(fieldId);
    const icon  = document.getElementById(iconId);
    if (input.type === 'password') {
      input.type = 'text';
      icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
      input.type = 'password';
      icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
  }
 

  document.getElementById('password').addEventListener('input', function() {
    const val = this.value;
    let score = 0;
    if (val.length >= 8)              score++;
    if (/[A-Z]/.test(val))            score++;
    if (/[0-9]/.test(val))            score++;
    if (/[^A-Za-z0-9]/.test(val))     score++;
 
    const colors  = ['', '#ef4444', '#f59e0b', '#3b82f6', '#10b981'];
    const labels  = ['', 'Weak', 'Fair', 'Good', 'Strong'];
    const lColors = ['', '#ef4444', '#d97706', '#2563eb', '#059669'];
 
    for (let i = 1; i <= 4; i++) {
      const bar = document.getElementById('sb' + i);
      bar.style.background = i <= score ? colors[score] : 'var(--border)';
    }
    const lbl = document.getElementById('strengthLabel');
    lbl.textContent = val ? labels[score] || '—' : '—';
    lbl.style.color  = val ? lColors[score] : 'var(--muted)';
 
    checkMatch();
  });
 
 
  function checkMatch() {
    const pw  = document.getElementById('password').value;
    const cpw = document.getElementById('confirm_password').value;
    const hint = document.getElementById('matchHint');
    if (!cpw) { hint.style.display = 'none'; return; }
    if (pw === cpw) {
      hint.style.display = 'flex';
      hint.style.color = '#059669';
      hint.innerHTML = '<i class="fas fa-circle-check"></i> Passwords match';
    } else {
      hint.style.display = 'flex';
      hint.style.color = '#ef4444';
      hint.innerHTML = '<i class="fas fa-circle-xmark"></i> Passwords do not match';
    }
  }
 
  document.getElementById('photoInput').addEventListener('change', function() {
    const file = this.files[0];
    if (!file) return;
    const reader = new FileReader();
    reader.onload = e => {
      const img = document.getElementById('avatarPreview');
      img.src = e.target.result;
      img.style.display = 'block';
      document.getElementById('avatarIcon').style.display = 'none';
      document.getElementById('avatarText').style.display = 'none';
    };
    reader.readAsDataURL(file);
  });

}