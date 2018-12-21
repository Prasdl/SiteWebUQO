@extends('layouts.template')


@section('template')

    <!-- Test, y'a de quoi qui ne marche pas avec le background image <style>body{background-image: {{ asset('img/UniversiteBackground.jpg') }}}</style> -->



    <div class="container">
        <h2>Bienvenu</h2>
        <div  class="carousel slide" data-ride="carousel">

            <!-- Les element du carousel -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/img/UniversiteBackground.jpg" style="width:100%;">
                </div>
                <div class="item">
                    <img src="/img/infoLogo2.png"  style="width:100%;">
                </div>

                <div class="item">
                    <img src="/img/infoLogo.png"  style="width:100%;">
                </div>
            </div>


        </div>
    </div>



@endsection


