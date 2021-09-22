<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>IPT2 Prelim</title>
</head>
<body>
    @if (session('Error'))
        <div class="alert alert-danger">
            <div class="container">
                {{ session('Error') }}
                <div class="float-right msgclosebtn" id="dismiss" onclick="dismiss();">&#10005;</div>
            </div>
        </div>
    @endif

    @if (session('Message'))
        <div class="alert alert-info">
            <div class="container">
                {{ session('Message') }}
                <div class="float-right msgclosebtn" id="dismiss" onclick="dismiss();">&#10005;</div>
            </div>
        </div>
    @endif

    {{-- @if (session('errors'))
        <div class="alert alert-danger">
            <div class="container">
                Please fix the following errors
                <ul>
                    @foreach (session('errors')->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif --}}

    @include('nav')

    <div class="container">
        @yield('content')
    </div>
</body>
<script>
    $(document).ready(function(){
        
        $('.form-group input').click(function(e) {
            $(this).parent().removeClass('has-error');
            
            $(this).parent().find('span.errspan').remove()
            
            
        });

        $('.form-group select').on('change', function(e) {
            $(this).parent().removeClass('has-error');
        });

        
       
    });
    function dismiss() {
            
        document.getElementById('dismiss').parentNode.parentNode.style.display='none';
    }

    function btnload() {
        btn = document.getElementById('actionBtn');
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Please wait...';
    }
</script>
</html>