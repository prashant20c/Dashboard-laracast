let menuButton = document.getElementById('user-menu-button')
let menu = document.querySelector('[role="menu"]')
menuButton.addEventListener('click', (event) =>{
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block' 
    event.stopPropagation();
})

menu.addEventListener('click',(event)=>{
    event.stopPropagation();
})

document.addEventListener('click', (event) => {
    menu.style.display = 'none';
    event.stopPropagation();
})


// window.addEventListener('click',(e)=>{
//     e.preventDefault()

    
//     if(e.target !== menuButton && ! menu.classList.contains('hidden')) {
//         menu.classList.add('hidden')
//     }


// })