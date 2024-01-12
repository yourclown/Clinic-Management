<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%2385A2DD'/%3E%3Cstop offset='1' stop-color='%23FFFFFF'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23B6D9FF' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23B6D9FF' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.4'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }

        .container {

            justify-content: center;
            align-items: left;
            height: 100vh;

        }

        label {
            font-weight: bold;
            color: black;
        }

        header {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: left;
            padding: 20px;
            background-color: #85A2DD;
            height: 80px;
            font-family: Arial, sans-serif;

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

        .container {
            margin-top: 10px !important;

        }

        .hospital-content {
            border-radius: 10px;
            width: 841px;
            padding: 13px
        }

        .registration {
            position: fixed;
            bottom: 280px;
            right: 250px;
            width: 256px;
            height: 214px;
            background-color: transparent;
            display: none;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
        }

        button:hover {
            background-color: #0056b3;
        }

        .user-dropdown-content {
            display: none;
            position: absolute;
            top: 100%;

            right: 0;

            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .user-dropdown:hover .user-dropdown-content {
            display: block;

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

        .invalid-feedback {
            display: block;
        }
    </style>
    <title>Enter Details</title>
</head>
@if(Session::has('success'))
<script>
    alert("{{ Session::get('success') }}");
</script>
@endif

@if(Session::has('failed'))
<script>
    alert("{{ Session::get('failed') }}");
</script>
@endif

<body>
    <header>
        <h1 style="font-family: Arial, sans-serif;"><b>Enter Patient Details</b></h1>
        <a href="{{url('/dash-board')}}"><button class="backbutton"><b>Dasboard</b></button></a>

    </header>


    <div class=" justify-content-center d-flex">
        <div class="col">
            <div class="card p-4 mx-auto" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;border-radius:15px">
                <form class="hospital-content" enctype="multipart/form-data" id="enterdetails">
                    @csrf

                    <label for="first-name">First Name:</label>
                    <input type="text" id="first-name" name="first-name" value="{{ old('first-name') }}" required>

                    <label for="last-name">Last Name:</label>
                    <input type="text" id="last-name" name="last-name" value="{{ old('last-name') }}" required>

                    <label for="dob">Date of Birth:</label>
                    <input type="date" id="dob" name="dob" value="{{ old('dob') }}" required>

                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    <label for="phone">Phone Number:</label>
                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>

                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>

                    <label for="address">Address:</label>
                    <textarea id="address" name="address" rows="4" value="{{ old('address') }}" required></textarea>

                    <label for="symptom">Select Symptom:</label>
                    <div class="dropdown-container">
                        <select class="symptom" name="symptom">
                            @foreach ($sy as $symptom)
                            <option value="{{ $symptom->symptom }}">{{ $symptom->symptom }}</option>
                            @endforeach
                        </select>
                        <button class="add-dropdown">+</button>
                    </div>

                    <label for="treatment">Description:</label>
                    <textarea id="description" name="description" rows="4" value="{{ old('treatment') }}" cols="50"></textarea>


                    <label for="treatment">Treatment Required:</label>
                    <textarea id="treatment" name="treatment" value="{{ old('treatment') }}"></textarea>

                    <button class="animated-button" id="submitButton" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
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
                    email: true,
                   
                },
                'address': 'required',
                'symptom': 'required',
                'description': 'required',
                'treatment': 'required'
            },
            messages: {
                email: "Please enter a valid email address",
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
<script>
    $('#enterdetails').on('submit', function(event) {
        event.preventDefault();
        var selectedSymptoms = [];
        $('.symptom').each(function() {
            var selectedValue = $(this).val();

            if (selectedValue !== '') {
                selectedSymptoms.push(selectedValue);
            }
        });
        var symptomsString = selectedSymptoms.join(',');


        var formData = new FormData($(this)[0]);
        formData.append('symptom', symptomsString);


        $.ajax({
            url: '{{ url("store-details") }}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                alert("Form submitted successfully!");
                window.location.href = "{{ url('/dash-board') }}";

                
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.add-dropdown').click(function() {
            var newDropdown = $('.symptom').first().clone();
            newDropdown.val('');
            $(this).before(newDropdown);
            return false;
        });
    });
</script>