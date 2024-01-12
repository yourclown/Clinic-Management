<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class="table" id="patientTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Phone Number</th>
                <th>Symptom</th>
            </tr>
        </thead>
        <tbody id="patientTableBody">
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            $.ajax({
                type: 'GET',
                url: 'http://localhost/HOSH/public/api/show-all-patients/',
                dataType: 'json',

                success: function(data) {
                    console.log(data);

                    $('#patientTableBody').empty();
                  
                    $.each(data, function(index, item) {
                        var row = $('<tr>');
                        row.append($('<td>').text(item.id));
                        row.append($('<td>').text(item.f_name));
                        row.append($('<td>').text(item.l_name));
                        row.append($('<td>').text(item.dob));
                        row.append($('<td>').text(item.gender));
                        row.append($('<td>').text(item.phone_no));
                        row.append($('<td>').text(item.symptom));
                        $('#patientTableBody').append(row);
                    });
                },
                error: function(xhr, status, error) {

                    $('#response').html('Error: ' + status + ' - ' + error);
                }
            });
        });
    </script>
</body>

</html>