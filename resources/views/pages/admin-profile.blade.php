<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Stocks Squared</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            a {
                color: #FEB91C;
                padding: 0 25px;
                font-size: 1.0rem;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }
            /* Custom styles */
            .nav-bar {
                position: relative;
                background-color: #FFCA41;
                display: flex;
            }
            .nav-tabs {
                position: relative;
                top: 100px;
                left: 16px;
            }
            .logged-in {
                position: absolute;
                bottom: 8px;
                right: 16px;
                font-size: 18px;
            }
            .adminpanel {
                position: absolute;
                top: 8px;
                right: 16px;
                font-size: 18px;
            }
            .page-body {
                position: relative;
            }
            .user-info {
                color: black;
                position: absolute;
                height: 650px;
                width: 40%;
                margin: 3%;
            }
            .user-details {
                position: absolute;
                background-color: lightgray;
                height: 350px;
                width: 40%;
                bottom: 0;
                padding: 3%;
            }
            .admin-tools {
                position: absolute;
                background-color: lightgray;
                height: 350px;
                width: 40%;
                bottom: 0;
                right: 0;
                padding: 3%;
            }
            .user-picture {
                position: absolute;
            }
            .masterlist {
                position: absolute;
                background-color: lightgray;
                height: 650px;
                width: 50%;
                right: 0;
                margin: 3%;
            }
            .masterlist-details {
                position: absolute;
                top: 50%;
                width: 100%;
                text-align: center;
                font-size: 18px;
            }
            
        </style>
    </head>
    <body>

        <div class="nav-bar">
            <img src="/storage/smallPurpOnOrg.png"/>
            <div class="nav-tabs">
                <h1><u>Manage Users</u></h1>
            </div>
            <div class="logged-in">
                Logged in as <b>Christian</b> (Administrator)
            </div>
            <div class="adminpanel">
                Admin Panel
            </div>
        </div>

        <div class="page-body">
            <div class="user-info">
                <div> Viewing account ID: 5702457239 </div>
                <img src="/storage/someman.png" style="width:40%;margin-top:1%;"/>
                <div class="user-details">
                    <h2>John Doe</h2>
                    <p>Declared Trading Group:
                    <b>Swing</b></p>
                    <p>Posts created:
                    <b>23</b></p>
                    <p>Posts replied:
                    <b>105</b></p>
                    <p>Posts followed:
                    <b>143</b></p>
                    <p>Moderator status:
                    <b>False</b></p>
                    <p>Join Date:
                    <b>10/15/2020</b></p>
                </div>
                <div class="admin-tools">
                    <h3>Administrator Tools</h3>
                    <p>Mute user</p>
                    <p>Mute user for...</p>
                    <br>
                    <p>Ban user</p>
                    <p>Ban user for...</p>
                </div>
            </div>
            <div class="masterlist">
                <div class="masterlist-details">
                MASTER LIST OF USERS
                </div>
            </div>
        </div>

    </body>
</html>
