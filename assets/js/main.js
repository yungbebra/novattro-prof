document.addEventListener('DOMContentLoaded',()=>{
  document.querySelectorAll('[data-filter-group]').forEach(group=>{
    const target=group.dataset.target; const cards=document.querySelectorAll(`[data-filter-target="${target}"]`);
    group.addEventListener('click',e=>{const btn=e.target.closest('[data-filter]'); if(!btn)return; group.querySelectorAll('[data-filter]').forEach(b=>b.classList.remove('active')); btn.classList.add('active'); const val=btn.dataset.filter; cards.forEach(c=>{c.classList.toggle('d-none', !(val==='all'||c.dataset.category===val||c.dataset.material===val));});});
  });
  const form=document.querySelector('#contactForm');
  if(form) form.addEventListener('submit',e=>{e.preventDefault(); let ok=true; form.querySelectorAll('[required]').forEach(f=>{if((f.type==='checkbox'&&!f.checked)||!f.value.trim()){f.classList.add('is-invalid'); ok=false}else f.classList.remove('is-invalid')}); const msg=document.querySelector('#formMessage'); msg.className=ok?'alert alert-success':'alert alert-danger'; msg.textContent=ok?'Заявка прошла проверку. В рабочем проекте данные будут отправлены менеджеру.':'Заполните обязательные поля и подтвердите согласие.'; if(ok) form.reset();});
});
