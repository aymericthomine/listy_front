<x-guest-layout>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap');
    </style>

    <div style="margin-left: 50px; margin-right: 50px;">

    <div style="margin:50px; text-align:center;">

    <a class="flex; fixed-top" href="{{ route('dashboard') }}">
            <img width="30px;" style="margin-top: 50px; margin-left: 30px;" src="/images/header/back_black.png">
    </a>
    <h1 class="mt-10; fixed-top; font-listy" style="color: #020202; font-size:20px; font-weight:bold; margin-top: 50px;">My Profile</h1>

    </div>

    <div style="display: flex; justify-content: center;">
        
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 456 456">
                <g id="Groupe_413" data-name="Groupe 413" transform="translate(3969 -3053)">
                    <g id="Tracé_490" data-name="Tracé 490" transform="translate(-3969 3053)" fill="none">
                    <path d="M228,0c98.848,0,183,62.9,214.721,151.143A227.184,227.184,0,0,1,456,228c0,125.921-102.079,228-228,228S0,353.921,0,228,102.079,0,228,0Z" stroke="none"/>
                    <path d="M 228 10 C 107.7944030761719 10 10 107.7944030761719 10 228 C 10 348.2055969238281 107.7944030761719 446 228 446 C 348.2055969238281 446 446 348.2055969238281 446 228 C 446 202.6694030761719 441.7307434082031 177.9489440917969 433.310791015625 154.525146484375 C 402.2381896972656 68.0802001953125 319.7300720214844 10 228 10 M 228 0 C 326.8479309082031 0 411.0038757324219 62.90365600585938 442.7213439941406 151.1425476074219 C 451.2814025878906 174.9561462402344 456 200.927001953125 456 228 C 456 353.9209289550781 353.9209289550781 456 228 456 C 102.0790710449219 456 0 353.9209289550781 0 228 C 0 102.0790710449219 102.0790710449219 0 228 0 Z" stroke="none" fill="#020202"/>
                    </g>
                    <g id="Groupe_412" data-name="Groupe 412" transform="translate(-3787.891 3221)">
                    <ellipse id="Ellipse_34" data-name="Ellipse 34" cx="21.238" cy="21.238" rx="21.238" ry="21.238" transform="translate(25.468 1)" fill="rgba(0,0,0,0)" stroke="#020202" stroke-miterlimit="10" stroke-width="10"/>
                    <rect id="Rectangle_113" data-name="Rectangle 113" width="94.057" height="54.983" rx="27.492" transform="translate(-0.109 63.572)" fill="rgba(0,0,0,0)" stroke="#020202" stroke-miterlimit="10" stroke-width="10"/>
                    </g>
                    <g id="Ellipse_57" data-name="Ellipse 57" transform="translate(-3641 3381)" fill="#f25c05" stroke="#020202" stroke-width="10">
                    <circle cx="64" cy="64" r="64" stroke="none"/>
                    <circle cx="64" cy="64" r="59" fill="none"/>
                    </g>
                    <path id="Tracé_428" data-name="Tracé 428" d="M71.794,36.874,52.119,17.2a4.634,4.634,0,0,0-6.623,0L25.82,36.874A4.683,4.683,0,1,0,32.443,43.5L44.19,31.75V65.641a4.659,4.659,0,0,0,9.317,0V31.75L65.253,43.5a4.654,4.654,0,1,0,6.541-6.622Z" transform="translate(-3626.285 3401.588)" fill="#020202"/>
                </g>
            </svg>        
        </div>

            @include('navbar')

                </div>
                <div style="display: flex; justify-content: center;">
                    <form class="mb-10">
                        <x-jet-label class="mb-4" />
                        <x-jet-label class="mb-2" />
                    </form>
                </div>

                <div class="flex" style="justify-content: space-evenly;">

                    <a class="button-listy" style="color: white ; width: 120px" href="{{ route('editprofile') }}">
                        {{ __('Edit profile') }}
                    </a>
                    <a class="button2-listy" style="color: white; text-decoration: none; width: 120px" href="{{ route('settings') }}">
                        {{ __('Settings') }}
                    </a>

                </div>


    <h1 class="font-listy" style="display: flex; color: #020202; font-size:20px; font-weight:bold; margin-top: 50px; justify-content: center">History of lists</h1>


</x-guest-layout>

<style>
html, body { height : 100%; }

body {
    margin:0;
    padding:0;
    background-color: white;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.button-listy {
    margin-top: 20px;
    text-align: center;
    font-weight : bold;
    color: white;
    border-radius: 10px;
    width : 100%;
    padding: 10px;
    background-color: #F25C05;
    cursor : pointer;
}
.button2-listy {
    margin-top: 20px;
    text-align: center;
    font-weight : bold;
    color: white;
    border-radius: 10px;
    width : 100%;
    padding: 10px;
    background-color: darkgrey;
    cursor : pointer;
}
.button-listy:hover {
    text-decoration: none;
}
.button-listy:active {
    text-decoration: none;
}
.center {
    display: flex;
    justify-content: center;
    text-decoration: underline;
}
.text-right {
    display: flex;
    justify-content: flex-end;
}
.font-listy{
    font-family: 'Roboto', sans-serif;
}
</style>
