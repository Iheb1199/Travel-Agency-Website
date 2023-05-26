const labels = document.querySelectorAll('.sec-form-control label'); 

labels.forEach(label => {
    label.innerHTML = label.innerText 
        .split('')
        .map((letter, idx) => `<span class="letter" style="transition-delay:${idx * 80}ms">${letter}</span>`).join('') ;  
          
})
