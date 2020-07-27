<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\File;

//Classe para controlar o upload de uma imagem
class ImageUploadController extends Controller
{

    /**Recebe um request contendo a imagem enviada pelo usuário,
     * salva na pasta images do diretório público e redireciona
     * para a pagina anterior com uma messagem de sucesso e com
     * o nome da imagem.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->deleteOlderImages();
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('images'), $imageName);

        return back()
            ->with('success','You have successfully upload an image.')
            ->with('image',$imageName);
    }

    /** Função usada para deletar as imagens de uploads antigos
     * que estão nas pasta images.
     */
    private function deleteOlderImages()
    {
        $array = File::files(public_path('images'));
        File::delete($array);
    }
}
