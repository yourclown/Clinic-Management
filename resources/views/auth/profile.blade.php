<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>User Profile</title>
</head>
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

    .profile-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .tab {
        display: flex;
        justify-content: center;
    }

    .tab button {
        background-color: #f2f2f2;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 10px 20px;
        transition: background-color 0.3s;
    }

    .tab button:hover {
        background-color: #ddd;
    }

    .tabcontent {
        display: none;
    }

    #userInfo {
        display: block;
    }

    .header {
        background-color: rgba(255, 255, 255, 0.8);
        text-align: left;
        padding: 20px;
        background-color: #85A2DD;
        height: 80px;
        font-family: 'Poppins', sans-serif;

    }

    .card {
        border: none;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin-top: -188px;
        height: 368px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        background: rgba(255, 255, 255, 0.6);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);

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
        margin-right: -76px;
        margin-top:87px;
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
        margin-top: -58px !important;
    }
</style>

<body>
    <header class="header">
        <h1><b>Profile</b></h1>
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
    </header>
    <div class="align-items-center d-flex" style="height: 100vh; background-color:#cce0ff;">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card p-4" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;border-radius:15px">
                        <div class="tab">
                            <button class="tablinks" onclick="openTab(event, 'userInfo')">User Info</button>
                            <button class="tablinks" onclick="openTab(event, 'resetPassword')">Reset Password</button>
                        </div>

                        <div id="userInfo" class="tabcontent">
                            <h3>Your Profile Details</h3>
                            <ul>
                                <li>
                                    <p>Name: {{ $userData['name'] }}</p>
                                </li>
                                <li>
                                    <p>Email: {{ $userData['email'] }}</p>
                                </li>

                            </ul>
                        </div>

                        <div id="resetPassword" class="tabcontent">
                            <h2>Reset Password</h2>
                            <form id="passwordForm">
                                <label for="currentPassword">Current Password:</label>
                                <input type="password" id="currentPassword" name="currentPassword">

                                <label for="newPassword">New Password:</label>
                                <input type="password" id="newPassword" name="newPassword">

                                <label for="confirmPassword">Confirm New Password:</label>
                                <input type="password" id="confirmPassword" name="confirmPassword">

                                <button type="submit">Change Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }

            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.classList.add("active");
        }

        document.getElementById("defaultOpen").click();
    </script>
</body>

</html>