function logout() {
    fetch(`../controllers/cerrar.php`)
        .then(response => {
            if (response.ok){
                window.location.href = 'login.php'
            }
        })
       
}

