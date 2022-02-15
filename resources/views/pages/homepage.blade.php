@extends('layouts.main-layout')

@section('content')

    @auth
    
        <a class="btn" href="{{route('postcard.create')}}">Crea il tuo post</a>

        <a class="btn" href="{{route('logout')}}">Logout</a>

        <postcards-component></postcards-component>

    @else

    <div class="container-form">

        <h1>Registrati o Accedi per vedere creare il tuo post</h1>
    
            <div class="registration">
    
                <form action="{{route('register')}}" method="post">
    
                    @method('post')
                    @csrf
    
                    <label for="name">Inserisci il Nome:</label>
                    <input type="text" name="name" placeholder="Inserisci il nome"> <br>
    
                    <label for="email">Inserisci la Email:</label>
                    <input type="text" name="email" placeholder="Inserisci la mail"> <br>
    
                    <label for="password">Inserisci la Password:</label>
                    <input type="password" name="password" placeholder="Inserisci la password"> <br>
    
                    <label for="password_confirmation">Conferma la Password:</label>
                    <input type="password" name="password_confirmation" placeholder="Conferma la password"><br>
    
                    <input class="btn" type="submit" value="REGISTRATI">
    
                </form>
    
            </div>
    
            <h2>Accedi</h2>
    
            <div class="access">
    
                <form action="{{route('login')}}" method="post">
    
                    @method('post')
    
                    @csrf
                
                    <label for="email">Inserisci la Email:</label>
                    <input type="text" name="email" placeholder="Inserisci la mail"> <br>
    
                    <label for="password">Inserisci la Password:</label>
                    <input type="password" name="password" placeholder="Inserisci la password"><br>
    
                    <input class="btn" type="submit" value="ACCEDI">
    
                </form>
    
            </div>

    </div>


    @endauth
    
@endsection