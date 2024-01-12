<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 100px;
        }

        .card {
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: -188px;
        }

        .input {
            max-width: 491px;
            height: 51px;
            background-color: #05060f0a;
            border-radius: .5rem;
            padding: 0 1rem;
            border: 2px solid transparent;
            font-size: 1rem;
            transition: border-color .3s cubic-bezier(.25, .01, .25, 1) 0s, color .3s cubic-bezier(.25, .01, .25, 1) 0s, background .2s cubic-bezier(.25, .01, .25, 1) 0s;
        }

        .label {
            display: block;
            margin-bottom: .3rem;
            font-size: .9rem;
            font-weight: bold;
            color: #05060f99;
            transition: color .3s cubic-bezier(.25, .01, .25, 1) 0s;
        }

        .input:hover,
        .input:focus,
        .input-group:hover .input {
            outline: none;
            border-color: #85A2DD;
        }

        .input-group:hover .label,
        .input:focus {
            color: #85A2DD;
        }

        .button:hover {
            color: var(--hover-text);
            background-color: #85A2DD;
            background: var(--hover-bg);
            box-shadow: 0.25rem 0.25rem var(--bg);
        }

        .button:active {
            transform: translate(0);
            box-shadow: none;
        }
    </style>
</head>


<body>
    <div class="align-items-center d-flex" style="height: 100vh; background-color:#cce0ff;">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card p-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;border-radius:15px">
                        <h4 class="text-center">Login</h4>
                        @if(isset($loginError))
                        <div class="alert alert-danger">{{ $loginError }}</div>
                        @endif
                        <hr>
                        <form method="POST" action="{{ url('/login-user') }}" id="loginform">
                            @csrf
                            <div class="form-group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                                <label for="email">Email</label>

                                <input type="email" class="form-control input" class="input" id="email" placeholder="Enter Your Email" name="email" value="">
                            </div>
                            <div class="form-group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                                </svg>
                                <label for="password">Password</label>
                                <input type="password" class="form-control input" id="password" placeholder="Enter Your Password" name="password" value="">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block button" id="submitButton" type="submit">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="http://localhost/HOSH/public/register">New user? Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#loginform").validate({
                errorClass: 'text-danger',
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                },
                messages: {
                    email: "Please enter a valid email address",
                    password: "Please enter your password"
                }
            });
        });
        const inputFields = document.querySelectorAll('#loginform input');
        const submitButton = document.getElementById('submitButton');

        function validateInputs() {
            inputFields.forEach(input => {
                if (input.value.trim() === '') {
                    input.style.borderColor = "red";
                } else {
                    input.style.borderColor = "";
                }
            });
        }

        submitButton.addEventListener('click', (event) => {
            validateInputs();

            if (!$("#enternumber").valid() || [...inputFields].some(input => input.value.trim() === '')) {
                event.preventDefault();
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>