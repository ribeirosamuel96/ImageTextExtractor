<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\GoogleVisionServiceProvider;


class ImageTextExtractorController extends Controller
{
    /**Recebe um request com o nome da imagem e chama a google vision api
     * para extrair o texto da imagem, em seguida carrega uma view para mostrar
     * o texto extraido junto da imagem.
     * @param Request $request
     */
    public function show(Request $request)
    {
        $imagePath = public_path("Images/".$request['imageName']);

        $imageText = GoogleVisionServiceProvider::extractImageText($imagePath);

        return view('imageText.show',['imageText' => $imageText, 'imageName' => $request['imageName']]);

    }
}
