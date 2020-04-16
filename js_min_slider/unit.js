let active   = 0;
const images = document.querySelectorAll('img');

document.querySelector('.b-7').onclick = () => {
    images[active].classList.remove('active-img');
    if(active+1 == images.length) {
        active = 0;
    } else {
        active++;
    }
    images[active].classList.add('active-img');
}