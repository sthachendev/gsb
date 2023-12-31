<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      * {
        font-family: 'Open Sans', sans-serif;
        }
    
    /* Tooltip Container */
    .tooltip {
    position: relative;
    display: inline-block;
    cursor: pointer;
    }

    /* Tooltip Text */
    .tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: transparent;
    color: #333;
    text-align: center;
    border-radius: 5px;
    padding: 5px;
    position: absolute;
    z-index: 1;
    left: 50%;
    margin-left: -60px; /* Center the tooltip */
    opacity: 0;
    transition: opacity 0.3s;
    font-size: 12px;
    }

    /* Tooltip Container on Hover */
    .tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
    }

    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>
<body style="padding:0; margin:0;">
    <div style="background-color: #fff; padding:0.5rem; display:flex; justify-content:space-around; align-items:center; position:sticky; top:0">
        <div>
            <img src="{{ asset('images/logo.png') }}" style="height: 70px; width:100%; background-color:white"/>
        </div>
        <div style="display: flex;">
            <div style="cursor: pointer;" class="tooltip">
                <a href="{{ ('/') }}">
                <span class="material-symbols-outlined" style="color: #333">
                home
                </span>
                <div class="tooltiptext">Home</div>
                </a>
            </div>
            <div style="margin-left: 2rem; cursor: pointer;" class="tooltip">
                <span class="material-symbols-outlined">
                work
                </span>
                <div class="tooltiptext">Services</div>
            </div>
            <div style="margin-left: 2rem; cursor: pointer;" class="tooltip">
                <span class="material-symbols-outlined">
                local_mall
                </span>
                <div class="tooltiptext">Products</div>
            </div>
        </div>
        @if(Auth::check())
        <div style="font-size: 14px; cursor: pointer;" class="tooltip">
            <span class="material-symbols-outlined">
            person
            </span>
            <div class="tooltiptext">My Profile</div>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
        @else
        <a href="{{ ('login') }}">Login</a>
        @endif
    </div>
    
</body>
</html>