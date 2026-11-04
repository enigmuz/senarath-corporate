// Senarath Bank corporate — light interactions
document.addEventListener('DOMContentLoaded',function(){
  // Smooth-scroll already via CSS; add subtle reveal on scroll
  const cards=document.querySelectorAll('.card,.stat');
  if('IntersectionObserver' in window){
    const io=new IntersectionObserver((es)=>{es.forEach(e=>{if(e.isIntersecting){e.target.style.opacity=1;e.target.style.transform='none';io.unobserve(e.target);}})},{threshold:.12});
    cards.forEach(c=>{c.style.opacity=0;c.style.transform='translateY(14px)';c.style.transition='opacity .5s ease, transform .5s ease';io.observe(c);});
  }
});
