const buttonHam = document.querySelector('.navbar-mobile #btn-navbar-mobile');
const listItem = document.querySelector('.navbar .list-item');

buttonHam.addEventListener('click', () => {
    (buttonHam.value == 'false') ? buttonHam.value = true : buttonHam.value = false ;

    buttonHam.querySelector('i').classList.toggle('fa-times');

    if(buttonHam.value == 'true'){
        listItem.classList.add('popup-active');
    }else{
        listItem.classList.remove('popup-active');
    }
})