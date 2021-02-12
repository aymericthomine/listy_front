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

            <a class="flex; fixed-top" href="{{ route('profile') }}">
                <img width="30px;" style="margin-top: 50px; margin-left: 30px;" src="/images/header/back_black.png">
            </a>
            <h1 class="mt-10; fixed-top; font-listy" style="color: #020202; font-size:20px; font-weight:bold; margin-top: 50px;">Settings</h1>

        </div>

        @include('navbar')

 
        <x-jet-validation-errors class="mb-4 mt-10"/>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mt-4" style="margin-top: 100px;">
                <input id="email" class="block mt-1 w-full" style="border-radius: 10px; height: 50px; margin-bottom: 20px;" type="email" name="email" :value="old('email')" placeholder="Password" required autofocus />
            </div>
            <div class="mt-4" style="margin-top: 0px;">
                <input id="email" class="block mt-1 w-full" style="border-radius: 10px; height: 50px; margin-bottom: 20px;" type="email" name="email" :value="old('email')" placeholder="New Password" required autofocus />
            </div>
            <div class="mt-4" style="margin-top: 0px;">
                <input id="email" class="block mt-1 w-full" style="border-radius: 10px; height: 50px; margin-bottom: 20px;" type="email" name="email" :value="old('email')" placeholder="Confirm Password" required autofocus />
            </div>

            <div class="block mt-4">

                <button class="button-listy" style="margin-top: 80px;">
                    {{ __('Reset') }}
                </button>
            </div>

        </form>



        

    </div>

    <div class="fixed-bottom" style="display: flex; justify-content: center; margin-bottom: 200px">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-dropdown-link href="{{ route('logout') }}"
                                     style="text-decoration: none; color: red; font-weight: bold"
                                     onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Logout') }}
                </x-jet-dropdown-link>


            </form>
        </div>
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
        text-decoration: none;
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
        text-decoration: black;
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
