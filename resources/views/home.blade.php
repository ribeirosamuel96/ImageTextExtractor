@extends('layouts.app')

@section('content')
<div class="container">
    <!--Formulário para o upload da imagem-->
    <div class="panel panel-primary">
        <div class="panel-heading"><h2>Upload an image</h2></div>
        <div id="uploadForm">

            <form action="/uploadImage" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>

                </div>
            </form>
        </div>

        <div class="panel-body">
            <!--Se o upload for bem sucedido mostra uma mensagem, a imagem e o botão para direcionar para a pagina de extração do texto-->
            @if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>

                <div>
                    <!--Mostrando imagem-->
                    <img src="images/{{ Session::get('image') }}">

                        <div id="panelButtonGetText">
                            <!--Mostrando botão-->
                            <form action="/extractImageText" method="GET">
                                @csrf
                                    <input name="imageName" type="hidden" value={{Session::get('image')}}>
                                    <button type="submit" class="btn btn-success" style="display: inline-block">Get text</button>
                            </form>
                        </div>
                </div>
            @endif
            <!--Se houve algum erro no upload, mostra qual erro foi.-->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>

    </div>

</div>
@endsection
