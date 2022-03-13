function navScroll(){
    let nav = document.querySelector('nav');

    window.addEventListener('scroll', function(){
        if(window.scrollY > 100){
            nav.classList.add('bg-dark', 'shadow');
        }else{
            nav.classList.remove('bg-dark', 'shadow');
        }
    });
}

function initScrollReveal(){
    ScrollReveal().reveal('.features-icons', {
        delay: 200, 
        viewOffset: {
            bottom: 20,
        },
    });
    ScrollReveal().reveal('.reveal-left', {
        delay:500,
        viewOffset: {
            bottom: 20,
        },
        origin: 'left',
        distance: '100px',
    });
    ScrollReveal().reveal('.reveal-right', {
        delay:600,
        viewOffset: {
            bottom: 20,
        },
        origin: 'right',
        distance: '100px',
    })
    ScrollReveal().reveal('.reveal', {
        delay: 100,
        viewOffset: {
            bottom: 20,
        },
    });
}

function getCurrentYear(){
    return new Date().getFullYear()
}

document.getElementById("current-year").innerHTML = getCurrentYear();
navScroll();
initScrollReveal();
