const wrapper = document.querySelector('.wrapper');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

btnPopup.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});

iconClose.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
});



function login() {
    fetch(`../controllers/login.php?txtCorreo=${txtCorreo.value}&txtPassword=${txtPassword.value}`)
        .then(response => response.json())
        .then(data => {
            if (data[0] != undefined) {
                window.location.href = "rolesForm.php"
            } else {
                alert('Email or password is incorrect')
            }
        })
}

