<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Edit Patient Information</title>
    <style>
        label {
            font-weight: bold;
            color: black;
        }
        input,
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f9fa;
            margin-bottom: 15px;
        }

        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        .hospital-content {
            border-radius: 10px;
            width: 841px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%2385A2DD'/%3E%3Cstop offset='1' stop-color='%23FFFFFF'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23B6D9FF' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23B6D9FF' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.4'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        button:hover {
            background-color: #0056b3;
        }

        header {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: left;
            padding: 20px;
            background-color: #85A2DD;
            height: 80px;
            font-family: Arial, sans-serif;
        }


        .p-4 {
            padding: 1.5rem !important;
            width: 878px;
            background: rgba(255, 255, 255, 0.6);

            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .backbutton {
            background-color: #95A2DF;
            width: 10%;
            float: right;
            margin-top: 33px;
        }

        .mx-auto {
            margin-right: auto !important;
            margin-left: 29% !important;
            margin-top: 12px;
        }

        .animated-button {
            position: relative;
            display: inline-block;
            padding: 12px 24px;
            border: none;
            font-size: 16px;
            background-color: #85A2DD;
            border-radius: 10px;
            font-weight: bold;

            color: white;
            box-shadow: 0 0 0 2px #ffffff20;
            cursor: pointer;
            overflow: hidden;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .animated-button span:last-child {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            background-color: #85A2DD;
            border-radius: 50%;
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .animated-button span:first-child {
            position: relative;
            z-index: 1;
        }

        .animated-button:hover {
            box-shadow: 0 0 0 5px #2195f360;
            color: #85A2DD;
        }

        .animated-button:active {
            scale: 0.95;
        }

        .animated-button:hover span:last-child {
            width: 150px;
            height: 150px;
            opacity: 1;
        }
    </style>
    <title> Edit Details</title>

</head>

<body>
    <header>
        <h1 style="font-family: Arial, sans-serif;"><b>Edit Patient Details</b></h1>
        <a href="http://localhost/HOSH/public/dash-board"><button class="backbutton"><b>Dasboard</b></button></a>

    </header>

    <div class=" justify-content-center d-flex">
        <div class="col">
            <div class="card p-4 mx-auto" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;border-radius:15px">
                @foreach ($patientInfo as $patient)
                <form class="patient-form" id="patient-form-{{ $patient->id }}" method="POST" action="{{ url('/update-patient-info/' . $patient->patient_id) }}" id="enterdetails">
                    @csrf <!-- Include the CSRF token -->
                    <input type="hidden" name="patient-id" value="{{ $patient->id }}">

                    <label for="first-name">First Name:</label>
                    <input type="text" id="f_name" name="f_name" value="{{ $patient->f_name }}" required>

                    <label for="last-name">Last Name:</label>
                    <input type="text" id="l_name" name="l_name" value="{{ $patient->l_name }}" required>

                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" value="{{ $patient->dob }}" required>

                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="male" {{ $patient->gender === 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $patient->gender === 'female' ? 'selected' : '' }}>Female</option>
                    </select>

                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" value="{{ $patient->phone_no }}" required>

                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" value="{{ $patient->email_address }}" required>

                    <label for="address">Address:</label>
                    <textarea id="address" name="address" rows="4" required>{{ $patient->address }}</textarea>

                    <label for="symptom">Symptom:</label>
                    <textarea id="symptom" name="symptom" rows="4">{{ $patient->symptom }}</textarea>

                    <label for="description">Description:</label>
                    <textarea id="description" name="description" rows="4">{{ $patient->description }}</textarea>

                    <label for="treatment">Treatment used:</label>
                    <textarea id="treatment" name="treatment" rows="4">{{ $patient->treatment }}</textarea>

                    <button class="animated-button id="submitButton" type="submit">Save</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $("#enterdetails").validate({
            
            errorClass: 'text-danger',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                error.insertAfter(element);
            },
            highlight: function(element) {
                $(element).addClass('is-invalid').removeClass('is-valid');
            },
            unhighlight: function(element) {
                $(element).removeClass('is-invalid');
            },
            rules: {
                'first-name': 'required',
                'last-name': 'required',
                'dob': 'required',
                'gender': 'required',
                'phone': {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                'email': {
                    required: true,
                    email: true
                },
                'address': 'required',
                'symptom': 'required',
                'description': 'required',
                'treatment': 'required'
            },
            messages: {
                'phone': {
                    digits: 'Please enter a valid 10-digit phone number',
                    minlength: 'Please enter a valid 10-digit phone number',
                    maxlength: 'Please enter a valid 10-digit phone number'
                }
            }
        });

        const inputFields = document.querySelectorAll('#enterdetails input, #enterdetails textarea');
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

            if (!$("#enterdetails").valid() || [...inputFields].some(input => input.value.trim() === '')) {
                event.preventDefault();
            }
        });
    });
</script>


</body>

</html>