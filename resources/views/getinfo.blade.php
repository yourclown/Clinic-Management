<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Get Patient Information</title>
    <style>
        .edit-btn {
            background-color: #95A2DF;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            margin-right: 20px;
            width: 80px;

        }

        .edit-btn:hover {
            background-color: #007BFF;
        }

        header {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: left;
            padding: 20px;
            background-color: #85A2DD;
            height: 80px;
            font-family: Arial, sans-serif;
        }

        .container {

            margin-right: -580px;
            margin-top: -31px;
        }

        .patient-details {
            margin-left: 20px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%2385A2DD'/%3E%3Cstop offset='1' stop-color='%23FFFFFF'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23B6D9FF' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23B6D9FF' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.4'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }

        .patient-details {
            margin-top: 6px;
            padding: 30px;
        }

        .patient-details h2 {
            background-color: #85A2DD;
            color: white;
            text-align: left;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            margin: 0;
        }

        .patient-list {
            list-style: none;
            padding: 0;
        }

        .patient {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .patient-name {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .patient-details-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .patient-details-list li {
            margin-bottom: 10px;
        }

        .symptom-list {
            list-style: none;
            margin: 0;
            padding-left: 20px;
        }

        .add-btn {
            background-color: #4cb7f5;
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            font-size: 1.5rem;
            padding: 2px 12px;
            margin-top: -37px;
            margin-left: 10px;
        }

        .input-fields {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        .optometrist {
            margin-left: 756px;
            margin-top: 18%;
            width: 256px;
            height: 214px;
            mix-blend-mode: darken;
        }

        #optometristImage {
            display: none;

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
            margin-right: -89px mix-blend-mode: darken;
        }

        .input {

            max-width: 256px;
            background-color: #f5f5f5;
            color: #242424;
            padding: .15rem .5rem;
            min-height: 40px;
            border-radius: 4px;
            outline: none;
            border: none;
            line-height: 1.15;
            box-shadow: 0px 10px 20px -18px;
            margin-right: 5px;
        }

        .searchbtn {
            background-color: #82bbed;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;

            width: 80px;
        }

        .searchbtn:hover {
            background-color: #4cb7f5;
        }

        .input-style {
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #555;
            outline: none;
        }

        .input-style:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        input:invalid {
            border-color: red;
        }

        h1 {
            margin-bottom: -2.5rem
        }

        .save-new-data-btn {
            display: inline-block;
            border-radius: 4px;
            background-color: #3d405b;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 17px;
            padding: 16px;
            width: 130px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .save-new-data-btn span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .save-new-data-btn span:after {
            content: '»';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -15px;
            transition: 0.5s;
        }

        .save-new-data-btn:hover span {
            padding-right: 15px;
        }

        .save-new-data-btn:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>
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
@if(session('alert'))
<script>
    alert("{{ session('alert') }}");
</script>
@endif

<body>
    <header>
        <h1><b>Get Patient Information</b></h1>


        <form style="float: right;" action="{{ url('/get-patient-info') }}" method="POST" id="enternumber">
            @csrf

            <input type="text" id="phone" for="phone" name="phone" class="input" placeholder="Enter Phone Number">
            <button class="searchbtn" id="submitbutton" type="submit">Search</button>

        </form>


    </header>

</body>

@isset($patientInfo)
<div class="patient-details">
    <h2><b>Patient Information</b></h2>
    <ul class="patient-list" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;border-radius:15px">
        @php
        $previousPatientId = null;
        @endphp
        @foreach ($patientInfo as $patient)
        @if ($previousPatientId !== $patient->patient_id)
        <li class="patient">
            <div class="patient-header some-information-shown">
                <span class="patient-name">{{ $patient->f_name }} {{ $patient->l_name }}</span>
                <button class="edit-btn" style="float: right;" onclick="editPatient({{ $patient->patient_id }})"><b>Edit</b></button>

            </div>
            <ul class="patient-details-list">
                <li><strong>Date of Birth:</strong> {{ $patient->dob }}</li>
                <li><strong>Gender:</strong> {{ $patient->gender }}</li>
                <li><strong>Email:</strong> {{ $patient->email_address }}</li>
                <li><strong>Address:</strong> {{ $patient->address }}</li>
                <li><strong>Symptoms and Descriptions:</strong></li>
                <ul class="symptom-list">
                    @endif
                    <li class="symptom">
                        <span><strong>Symptom:</strong> {{ $patient->symptom }}</span>
                        <span><strong>Description:</strong> {{ $patient->description }}</span>
                        <span><strong>Treatment:</strong> {{ $patient->treatment }}</span>
                        <span><strong>Last Visited:</strong> {{ $patient->created_on }}</span>
                    </li>
                    @php
                    $previousPatientId = $patient->patient_id;
                    @endphp
                    @if ($loop->last || $previousPatientId !== $patientInfo[$loop->index + 1]->patient_id)
                </ul>
            </ul>
            <button class="add-btn" style="float: right;" data-patient-id="{{ $patient->patient_id }}" onclick="addInputFields(this)">+</button>
            <div class="input-fields"></div>
        </li>
        @endif
        @if ($loop->last)
    </ul>
    @endif
    @endforeach
</div>
@endisset
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script>
    function editPatient(patientId) {
        window.location.href = "{{ url('/edit-patient') }}/" + patientId;
    }

    function addInputFields(button) {
        const patientId = button.getAttribute("data-patient-id");
        const inputFieldsDiv = button.nextElementSibling;
        const isExpanded = inputFieldsDiv.style.maxHeight === "100px";

        if (isExpanded) {
            inputFieldsDiv.style.maxHeight = "0";
            inputFieldsDiv.style.opacity = "0";
            button.innerText = "+";
        } else {
            const inputFields = `
            <label for="symptom">Select Symptom:</label>
                  <select class="input-style" id="new-symptom" name="new-symptom">
                          @foreach ($sy as $symptom)
                        
                       <option value="{{ $symptom->symptom }}">{{ $symptom->symptom }}</option>
                     @endforeach
                        </select>
                        <button class="add-dropdown">+</button>
                        <label for="new-description">New Description:</label>
                        <input type="text" class="input-style" id="new-description" name="new-description" style="width:400px; height:100px;" class="new-input">
                        <label for="new-treatment">New Treatment:</label>
                        <input type="text" class="input-style" id="new-treatment" name="new-treatment" class="new-input">
                        <button class="save-new-data-btn" onclick="saveNewData(${patientId})"><span>Save</span></button>
                         `;
            inputFieldsDiv.innerHTML = inputFields;
            inputFieldsDiv.style.maxHeight = "100px";
            inputFieldsDiv.style.opacity = "1";
            button.innerText = "-";
        }
    }


    async function saveNewData(patientId) {

        const newSymptom = document.getElementById("new-symptom").value;
        const newDescription = document.getElementById("new-description").value;
        const newTreatment = document.getElementById("new-treatment").value;

        const data = {
            patientId: patientId,
            newSymptom: newSymptom,
            newDescription: newDescription,
            newTreatment: newTreatment
        }
        const jsonString = JSON.stringify(data);
        console.log(jsonString);
        try {
            const response = await fetch("{{ url('/insert-new-symptom') }}/" + patientId, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-Token": "{{ csrf_token() }}"
                },
                body: jsonString
            });

            if (response.ok) {
                alert("Symptom submitted successfully");
                document.getElementById("new-symptom").value = "";
                document.getElementById("new-description").value = "";
                document.getElementById("new-treatment").value = "";
            } else {
                alert("Failed to submit symptom");
            }
        } catch (error) {
            console.error("Caught an error:", error);
        }
    }
</script>
<script>
    $(document).ready(function() {
        $("#enternumber").validate({
            errorClass: 'text-danger',
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },
            rules: {
                'phone': {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                }
            },
            messages: {
                'phone': {
                    digits: 'Please enter a valid 10-digit phone number',
                    minlength: 'Please enter a valid 10-digit phone number',
                    maxlength: 'Please enter a valid 10-digit phone number'
                }
            }
        });
        const inputFields = document.querySelectorAll('#enternumber input');
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
    });
</script>
<script>
    $(document).ready(function() {
        $('.add-dropdown').click(function() {
            var newDropdown = $('#new-symptom').first().clone();
            newDropdown.val('');
            $(this).before(newDropdown);
            return false;
        });
    });
</script>
</body>

</html>