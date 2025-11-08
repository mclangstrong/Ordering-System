const toggle = document.querySelector('.toggle-btn');
toggle.addEventListener('click', function(){
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('active');
})

const userButton = document.querySelector('#user-btn');
userButton.addEventListener('click', function(){
    const userBox = document.querySelector('.profile-detail');
    userBox.classList.toggle('active');
})