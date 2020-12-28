const button = document.querySelector('.toggle-sidebar');
const sidebar = document.querySelector('.sidebar');
const icon = document.querySelector('.fa-bars');

button.addEventListener('click',()=> {
    sidebar.classList.toggle('open');
    // if (sidebar.classList('open') {
    //     icon.classList.remove('fa-bars');   
    // } else {
    //     icon.classList.add('fa-times');
    // }
});