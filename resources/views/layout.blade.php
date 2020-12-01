<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/577845f6a5.js" crossorigin="anonymous"></script>

        <!-- Optional JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <style>
            html, body {
                height: 100vh;
                overflow:hidden;
            }
            input{
                outline: none !important;
            }
        </style>
        @yield('links')
    </head>
    <body>
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        @yield('content')
    </body>
    {{--  script  --}}

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        (function($){
            $.fn.getFormData = function(){
                var data = {};
                var dataArray = $(this).serializeArray();
                console.log(dataArray)
                for(var i=0;i<dataArray.length;i++){
                    data[dataArray[i].name] = dataArray[i].value;
                }
                return data;
            }
            })(jQuery);
    </script>
    @yield('script')
</html>
