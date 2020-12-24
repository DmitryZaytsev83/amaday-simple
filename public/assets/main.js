const main = () => {
    const modal = document.getElementById('modal');
    const button = document.getElementById('contacts');
    const show = (e) => {
        e.preventDefault();
        if (window.navigator.userAgent.includes('Firefox')) {
            modal.classList.add('background-black');
        }
        modal.classList.add('show');
    }
    const remove = () => {
        modal.classList.remove('show');
    }
    modal.addEventListener('click', remove);
    button.addEventListener('click', show);
}
document.addEventListener('DOMContentLoaded', main);
