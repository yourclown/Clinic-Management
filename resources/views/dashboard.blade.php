<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Patient Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-image: url('hospital-background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #FFFFFF;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 800 400'%3E%3Cdefs%3E%3CradialGradient id='a' cx='396' cy='281' r='514' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%2385A2DD'/%3E%3Cstop offset='1' stop-color='%23FFFFFF'/%3E%3C/radialGradient%3E%3ClinearGradient id='b' gradientUnits='userSpaceOnUse' x1='400' y1='148' x2='400' y2='333'%3E%3Cstop offset='0' stop-color='%23B6D9FF' stop-opacity='0'/%3E%3Cstop offset='1' stop-color='%23B6D9FF' stop-opacity='0.5'/%3E%3C/linearGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='800' height='400'/%3E%3Cg fill-opacity='0.4'%3E%3Ccircle fill='url(%23b)' cx='267.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='532.5' cy='61' r='300'/%3E%3Ccircle fill='url(%23b)' cx='400' cy='30' r='300'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;

        }

        .header {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: left;
            padding: 20px;
            background-color: #85A2DD;
            height: 80px;
            font-family: 'Poppins', sans-serif;

        }

        .dashboard-container {
            display: flex;
            width: 80%;
            max-width: 1200px;
            margin: auto;
            margin-top: 100px;


            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: rgba(255, 255, 255, 0.6);

            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        .column {
            flex: 1;
            padding: 22px;
            border-right: 1px solid #ccc;
            transition: box-shadow 0.3s, background-color 0.3s;
        }

        .column:hover {
            box-shadow: 0 0 20px rgba(173, 216, 230, 0.8);
            background-color: #f8f8f8;
        }

        .img {
            float: right;
            max-width: 60px;
            height: auto;
            margin-top: -13px;
        }


        .email-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background-color: transparent;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            overflow: hidden;
            /* Hide overflowing content */
        }

        .email-button img {
            width: 100%;
            height: 100%;
            transition: transform 0.3s ease-in-out;
            /* Add smooth transition for image */
        }

        .email-button:hover img {
            transform: scale(1.2);
            /* Enlarge image on hover */
        }

        .column:last-child {
            border-right: none;
        }

        .btn {
            display: block;
            width: 100%;
        }

        .btn:hover {
            background: lightblue;
        }

        .visit-image {
            position: fixed;
            bottom: 20px;
            left: 20px;
            width: 300px;
            height: 300px;
            transition: transform 0.3s ease-in-out;
        }

        .visit-image:hover {
            transform: scale(1.1);
        }

        .user-dropdown {
            position: relative;
        }

        .user-dropdown-content {
            display: none;
            position: absolute;
            top: -20px;
            right: 150px;
            background-color: #f9f9f9;
            min-width: 160px;
            background-color: #f8f8f8;
            height: 100px;
            border-radius: 10px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;

        }

        .user-dropdown:hover .user-dropdown-content {
            display: block;
            margin-right: -89px
        }

        .button {
            position: relative;
            padding: 12px 32px;
            font-size: 16px;
            font-weight: 700;
            text-transform: uppercase;
            color: #000;
            background-color: #85A2DD;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            z-index: 1;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .button:hover {
            transform: scale(1.05);
            color: #fff;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .button:active {
            transform: scale(0.9);
        }

        .button::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #007bff, #00bfff);
            transition: all 0.4s ease-in-out;
            z-index: -1;
            border-radius: 10px;
        }

        .button:hover::before {
            left: 0;
        }
    </style>
</head>

<body>

    <div class="header">
        <img src="images/logo.png" class="img" alt="Hospital Logo">
        <h1>
            <ul>Patient Dashboard
        </h1>
        <div class="user-dropdown">
            <button style="float:right; margin-top: -70px; margin-right: 80px; background-color:#3a1b85; color:#fff" class="user-dropdown-btn button">Hi, {{ $userData['name'] }}</button>
            <div class="user-dropdown-content">
                <a href="{{ url('/profile') }}">
                    <li style="height:50px; font-weight:500; font-size:16px ; align-items:center; display:flex ;">
                        <div class="col-md-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </div>
                        <div class="col-md-8">
                            <span>Profile </span>
                        </div>
                    </li>
                </a>
                <a href="{{ url('/logout') }}">
                    <li style="height:50px; font-weight:500; font-size:16px ; align-items:center; display:flex ;">
                        <div class="col-md-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                            </svg>
                        </div>
                        <div class="col-md-8">
                            <span>Logout </span>
                        </div>
                    </li>
                </a>

            </div>
        </div>
    </div>
    <div class="dashboard-container" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;border-radius:15px; height:500px !important">
        <div class="column justify-content-center  d-flex" style="flex-direction: column; align-items:center">
            <img src="images/undraw_medicine_b-1-ol.svg" style="width: 85%; height:85% ">
            <h2></h2>
            <a href="{{ url('/dash-board/enter-details') }}" style="width: 95%;"><button class="button" style="width: 100%; margin-top:10px">Enter Patient Details</button></a>
        </div>
        <div class="column justify-content-center  d-flex" style="flex-direction: column; align-items:center">
            <img src="images/undraw_medical_research_qg4d.svg" style="width: 85%; height:85% ">
            <h2></h2>
            <a href="{{ url('/dash-board/get-info') }}" style="width: 95%;"><button class="button" style="width: 100%; margin-top:10px">Get Patient Information</button></a>
        </div>
        <a href="mailto:anprasad58@gmail.com" class="email-button">
            <img src="images/support.png" alt="Support" width="100%" height="100%" title="Support">
        </a>
        <img src="images/visit.png" alt="visit" class="visit-image">

    </div>

</body>

</html>