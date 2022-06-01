<?php
    require_once 'includes.php';
?>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>
        <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>             -->
        <!-- Icones -->
        <script src="https://kit.fontawesome.com/d54ce2bb89.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/thiagolima/style.css">

    </head>

    <body>

        <h1 class="titulo text-shadow">Contato</h1>
        <hr>

        <div class="exercicios contato-corpo">

            <div class="contato-info">
                <h2>Thiago Lima</h2>
                <ul class="list basic_info">
                    <li>
                        <p><i class="fa-solid fa-location-dot"></i> Localização<br>
                        <a href="https://goo.gl/maps/D1tSN1NgC6HQo6LT9" target="_blank"> Rua João Batista Colnago, 598</a></p>
                    </li>
                    <li>
                        <p><i class="fa-solid fa-phone"></i> WhatsApp<br>
                        <a href="https://wa.me/5518996382997" target="_blank"> (18) 99638-2997</a></p>
                    </li>
                    <li>
                        <p><i class="fa-solid fa-at"></i> E-mail<br>
                        <a href="mailto: thiagofslima@gmail.com" target="_blank"> thiagofslima@gmail.com</a></p>
                    </li>
                </ul>
            </div>

            <form id="cadastro" class="contato-form needs-validation" novalidate name="contato" method="post">
            <div class="linha-vertical"></div>
                <h6>Entre em contato!</h6>
                <br>
                <div class="form-row">
                    <!-- Nome -->
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" name="nome" placeholder="Nome" required="teste">
                        <div class="invalid-feedback">Campo obrigatório!</div>
                    </div>
                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        <div class="invalid-feedback">Campo obrigatório!</div>
                    </div>
                </div>
                <!-- Assunto -->
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Assunto" required>
                        <div class="invalid-feedback">Campo obrigatório!</div>
                    </div>
                </div>
                <!-- Mensagem -->
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <textarea class="form-control" placeholder="Mensagem" rows="5" required></textarea>
                        <div class="invalid-feedback">Campo obrigatório!</div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary">Enviar Mensagem</button>
                
            </form>

        </div>

<script>
    (function () {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()
</script>


    </body>
</html>