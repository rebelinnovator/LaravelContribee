@extends('layout')
@section('links')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection
@section('content')
<div class="main-bg">
    <div class="row justify-content-center rowbg">
        <div class="col-md-6 col-10 form">
            <form id="message-form" class="was-validated">
                <div class='form-content m-5'>
                    <div class='content-header'>
                        <h2>Contribee's Skill test</h2>
                        <h5>Simple form using AJAX and Laravel</h5>
                    </div>
                    <div class = "form-item mt-5">
                        <input type='name' name="name" placeholder='Full name'>
                    </div>
                    <div class = "form-item mt-5">
                        <input type='email' name="email" placeholder='E-mail address'>
                    </div>

                    <div class="dropdown mt-5">

                        <div class="dropbtn form-item">
                            <div class="dropbtn-img">
                                <img src="{{ asset('img/drop.png') }}"></img>
                            </div>

                            <input type='hidden' name="country" id="country" placeholder='Select Country'>

                            <div class="dropbtn-text">
                                Select Country
                            </div>
                        </div>

                        <div id="myDropdown" class="dropdown-content">
                            @foreach($countries  as $country)
                                <a myval='{{$country->name}}'>{{$country->name}}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class = "form-btn mt-5">
                        <button type="button" id='form-submit' class="btn submit-btn" aria-pressed="false">Send</button>
                    <div>
                </div>
            </form>
        </div>
    </div>

</div>
<script>



</script>
@endsection
@section('script')
    <script src="{{ asset('js/index.js') }}"></script>
@endsection
