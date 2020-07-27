<?php

namespace App\Providers;

use Exception;
use Illuminate\Support\ServiceProvider;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

//Classe para genrenciar o uso da google vision api
class GoogleVisionServiceProvider extends ServiceProvider
{
    /**
    Recebe um path para uma imagem e extrai o texto contido na imagem utilizando
    a google vision api.
    @param uma string representando o path para uma imagem
    @return uma string representando o texto extraido da imagem (retorna uma string vazia se a imagem não possuir nenhum texto).
    */
    public static function extractImageText($imagePath)
    {
        $imageAnnotator = new ImageAnnotatorClient(['credentials' => public_path('key\key.json')]);

        # annotate the image
        $image = file_get_contents($imagePath);
        try {

            $response = $imageAnnotator->textDetection($image);
            $texts = $response->getTextAnnotations();
            return $texts['0']->getDescription();

        } catch (Exception $e) {
            return '';
        }

    }
}
