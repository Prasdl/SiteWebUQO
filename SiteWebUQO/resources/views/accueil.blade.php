@extends('layouts.template')


@section('template')

<style>
    .carousel slide{
        z-index: 1;
        position:absolute;
    }


</style>

<!-- Le carousel -->
    <div class="container">
        <h2>Bienvenu</h2>
        <div  class="carousel slide" data-ride="carousel">

            <!-- Les element du carousel -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/img/UniversiteBackground.jpg" style="width:100%; height: 400px;">
                </div>
                <div class="item">
                    <img src="/img/infoLogo2.png"  style="width:100%; height: 400px;">
                </div>

                <div class="item">
                    <img src="/img/infogenie.png"  style="width:100%; height: 400px;">
                </div>
            </div>
        </div>
    </div>



@endsection


