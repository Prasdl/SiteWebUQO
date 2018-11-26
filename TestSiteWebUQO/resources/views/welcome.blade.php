<!--@ extends ('layouts/template')-->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            Section here
            <div class="content">
                    <h1>Contactez-nous</h1>
                    {!! Form::open(['url' => 'contact/submit']) !!}
                        <div>
                            {{Form::label('name', 'Nom')}}
                            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Entrez votre nom'])}}
                        </div>
                        <div>
                            {{Form::label('email', 'Courriel')}}
                            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Entrez votre courriel'])}}
                        </div>
                        <div>
                            {{Form::label('message', 'Message')}}
                            {{Form::text('message', '', ['class' => 'form-control', 'placeholder' => 'Entrez un message'])}}
                        </div>
                        <div>{{Form::submit('Click Me!')}}</div>
                    {!! Form::close() !!}
            </div>
            End Section here
        </div>
    </body>
</html>
