<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Amazon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <style>
        .logo {
            height: 51px;
            width: 150px;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .extra-margin {
            margin-top: 200px;
        }

        .btn {
            width: 350px;
            margin-top: 20px;
        }

        .center-button {
            display: block;
            width: 100%;
            margin-top: 20px;
        }

        form {
            border: 1px solid lightgrey;
            padding-left: 25px;
            padding-right: 25px;
            padding-top: 16px;
            padding-bottom: 10px;
            border-radius: 5px;
        }

        #words_1 {
            font-weight: bold;
            font-size: 14px;
        }

        #words_2 {
            font-weight: bold;
            font-size: 14px;
        }

        #words_3 {
            font: 7px;
        }

        .sign-in {
            margin-bottom: 10px;
            font-size: 30px;
            font-weight: bold
        }

        .conditions {
            font-size: 8px;
            color: blue;
            margin-top: 30px;
            z-index: 2;
        }

        .footer_1 {
            width: max;
            height: 350px;
            background-color: #fff;
            margin-top: 30px;
        }

        #exampleCheck1 {
            margin-left: 3px;
            margin-top: 11px;
        }

        #sign-in {
            margin-bottom: 10px;
        }

        #grey-button {
            background-color: lightgrey;
            border: black;
        }

        .separator {
            height: 2px;
            background: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.133), rgba(0, 0, 0, 0));
            margin-top: 20px;
            margin-bottom: 20px;
        }

        body {
            font-family: "Amazon Ember", Arial, sans-serif;
        }
    </style>
</head>

<body>

    <header>
        <div class="d-flex flex-row justify-content-center">
            <div class="row">
                <div class="col-md">
                    <img class="logo" src="{{ asset('images/logo-amazon.png') }}" alt="Amazon Logo" />
                </div>
            </div>
        </div>
    </header>

    <!--Form-->
    <div class="d-flex flex-row justify-content-center">
        <div class="row">
            <div class="col-md">
                <form action="{{ url('saveuser') }}" method="POST" id="userpost">

                    @csrf

                    <div class="sign-in">Crear cuenta</div>
                    <div class="form-group">
                        <label id="words_1" for="exampleInputEmail1">Tu nombre</label>
                        <input type="text" class="form-control" name="name" required>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label id="words_1" for="exampleInputEmail1">Correo electrónico</label>
                        <input type="text" class="form-control" name="email" required>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label id="words_1" for="exampleInputEmail1">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Debe tener al menos 6 caracteres"
                            name="password" required>
                        <label for="exampleInputEmail1"><i class="fa-solid fa-info" style="color: #74C0FC;"></i> La
                            contraseña debe contener al menos seis caracteres.</label>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label id="words_1" for="exampleInputEmail1">Vuelve a escribir la contraseña</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>

                    <button type="submit" class="btn btn-warning center-button" id="sign-in">Crear tu cuenta de
                        Amazon</button>
                    <p>Al crear una cuenta, aceptas las <a
                            href="https://www.amazon.com.mx/gp/help/customer/display.html/ref=ap_register_notification_condition_of_use?ie=UTF8&nodeId=508088">Condiciones
                            de Uso</a> y el <br>
                        <a
                            href="https://www.amazon.com.mx/gp/help/customer/display.html/ref=ap_register_notification_privacy_notice?ie=UTF8&nodeId=468496">Aviso
                            de Privacidad</a> de Amazon.
                    </p>
                    <div class="separator"></div>
                    <p>Ya tienes una cuenta? <a href="https://www.amazon.com.mx/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com.mx%2F%3Ftag%3Dmsndeskabkmx-20%26ref%3Dnav_signin%26adgrpid%3D1169880791915054%26hvadid%3D73117623068508%26hvnetw%3Do%26hvqmt%3De%26hvbmt%3Dbe%26hvdev%3Dc%26hvlocint%3D%26hvlocphy%3D161013%26hvtargid%3Dkwd-73117900561555%3Aloc-43%26hydadcr%3D13959_10764331%26msclkid%3D482e198eaa721034d1bc7f2bbc906d1c&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=mxflex&openid.mode=checkid_setup&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0">Inicia sesión</a></p>
                </form>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#userpost').on('submit', function(event) {
                event.preventDefault();

                $.ajax({
                    type: 'post',
                    url: '{{ url('saveuser') }}',
                    data: $(this).serialize(),
                    success: function(response) {
                        $('#userpost')[0].reset();
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.onmouseenter = Swal.stopTimer;
                                toast.onmouseleave = Swal.resumeTimer;
                            }
                        });
                        Toast.fire({
                            icon: "success",
                            title: "Usuario credo con éxito!"
                        });
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 422) {


                            var errorMessage = '';

                            // Concatenar los mensajes de error
                            $.each(xhr.responseJSON.errors, function(key, value) {
                                errorMessage += value[0] + '\n';
                            });

                            Swal.fire({
                                title: 'Corrige los siguiente errores:',
                                text: errorMessage,
                                icon: 'warning',
                                confirmButtonText: 'Cerrar'
                            })
                        } else {

                            var errorMessage = xhr.status + ': ' + xhr.statusText;
                            Swal.fire({
                                title: 'Error no controlado',
                                text: errorMessage,
                                icon: 'error',
                                confirmButtonText: 'Cerrar'
                            })
                        }
                    }
                });
            });
        });
    </script>

    <script src="https://kit.fontawesome.com/de34dd06ea.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
