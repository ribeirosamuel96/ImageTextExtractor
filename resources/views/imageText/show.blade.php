@extends('layouts.app')

@section('content')
    <!--Mostra a imagem e o texto extraido-->
    <div class="container">
            <div class="panel-heading"></div>
            <a href="/"><button class="btn btn-success" style="display: inline-block">Back</button></a>
                <div>
                    <!--Mostrando imagem-->
                    <div class="imagePanel">
                        <h3 style="text-align: center">Image</h3>
                        <img  src="{{'Images/'.$imageName}}">
                    </div>
                    <!--Mostrando texto extraido-->
                    <div class="imageTextPanel">
                        <h3 class="text-md-center">Text of the image</h3>
                        <p class="imageText">{{$imageText}}</p>
                    </div>


                </div>
    </div>
@endsection
