// Dejar el placeHolder Fijo
const input = document.getElementById('Fijo');

input.addEventListener('focus',()=> {
    input.setAttribute('placeholder', '');//Elimina el placeholder
});

input.addEventListener('blur',() =>{
    input.setAttribute('placeholder','Seguir escribiendo...');// Restaura el placeholder al perder el foco
});