let menuButton = document.querySelector('#toggle-menu')

menuButton.addEventListener('click', function(){
    menuButton.classList.toggle('fa-rotate-90')
})



document.addEventListener('scroll', function(){
    let scrolled = window.pageYOffset

    let navbar = document.querySelector('#navbar-presto')
    let navbarContent = document.querySelector('#navbarSupportedContent')

    if(scrolled > 100){
        navbar.classList.remove('bg-presto-light')
        navbar.classList.add('bg-presto-aqua')

        navbarContent.classList.remove('bg-presto-light')
        navbarContent.classList.add('bg-presto-aqua')
    } else {
        navbar.classList.remove('bg-presto-aqua')
        navbar.classList.add('bg-presto-light')

        navbarContent.classList.remove('bg-presto-aqua')
        navbarContent.classList.add('bg-presto-light')
    }
})

let likeButtons = document.querySelectorAll('.btn-like')

likeButtons.forEach( button => {
    button.addEventListener('click', function(){
        button.childNodes[1].classList.toggle('far')
        button.childNodes[1].classList.toggle('fas')
    })
})