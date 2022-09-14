const popup = document.querySelector('.popup');
const x = document.querySelector('.popup-content i');
const pop = document.querySelector('.showPopup');

window.addEventListener('load', () => {
    popup.classList.add('showPopup');
    popup.childNodes[1].classList.add('showPopup');
})
x.addEventListener('click', () => {
    popup.classList.remove('showPopup');
    popup.childNodes[1].classList.remove('showPopup');
})

if (popup.classList.add('showPopup')) {
    window.addEventListener('scroll', noscroll);

    function noscroll() {
        window.scrollTo(0, 0);
    }
}