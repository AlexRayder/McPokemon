<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="https://kit.fontawesome.com/ad1181dc7c.js" crossorigin="anonymous"></script>
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="assets/js/loginValidate.js"></script>
    <script src="assets/js/cerrar.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Proyecto :D</title>
</head>

<body>


    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div class="select-menu" >
                            <div class="select-btn" title="Opciones">
                                <img src="admin.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50px;">
                            </div>
                        
                            <ul class="options">
                                <li class="option">
                                <ion-icon name="add-circle-outline"></ion-icon>
                                   <a href="productosForm.php" class="option-text" title="Agregar Productos"><button class="btn btn-outline-success" title="Agregar Prodcutos" style="font-size: 11pt;" id="btn-1">Agregar Productos</button></a>
                                </li><br>
                                <li class="option">
                                <ion-icon name="log-out-outline"></ion-icon><button class="btn btn-outline-danger" onclick="logout()" title="Cerrar Session" id="btn-1" >Cerrar Session</button>
                                </li>
                            </ul>
                        </div>
            
                    </ul>


                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                </div>

            </div>
        </nav>
        <script>
            const optionMenu = document.querySelector(".select-menu"),
                selectBtn = optionMenu.querySelector(".select-btn"),
                options = optionMenu.querySelectorAll(".option"),
                sBtn_text = optionMenu.querySelector(".sBtn-text");

            selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

            options.forEach(option => {
                option.addEventListener("click", () => {
                    let selectedOption = option.querySelector(".option-text").innerText;
                    sBtn_text.innerText = selectedOption;

                    optionMenu.classList.remove("active");
                })
            })
        </script>