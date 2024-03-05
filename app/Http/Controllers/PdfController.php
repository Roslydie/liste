<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function upload(Request $request)
    {
      
        $request->validate([
            'cv' => 'required|mimes:pdf|max:2048',
            'attestation' => 'required|mimes:pdf|max:2048',
        ]);

        
        $path = $request->file('cv')->store('pdfs');
        $path = $request->file('attestation')->store('pdfs');

      

        return "Fichier PDF téléchargé avec succès.";
    }


     public function download( $filename)
{
    
    $filePath = storage_path('pages.liste' . $filename);

    // Vérifier si le fichier existe
    if (file_exists($filePath)) {
        // Retourner le fichier en téléchargement
        return response()->download($filePath);
    } else {
        // Rediriger avec un message d'erreur si le fichier n'existe pas
        return redirect()->back()->with('error', 'Fichier non trouvé.');
    }
}
}
