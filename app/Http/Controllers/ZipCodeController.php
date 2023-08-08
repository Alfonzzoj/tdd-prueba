<?php

namespace App\Http\Controllers;

use App\Models\ZipCode;
use Illuminate\Http\Request;

class ZipCodeController extends Controller
{

    public function index(){
        return view('zip_codes.index');
    }
    public function uploadCSV(Request $request)
    {

             // Validar el archivo de carga
             $request->validate([
                'file' => 'required|mimes:csv,txt'
            ]);

            // Obtener el archivo
            $file = $request->file('file');

            // Abrir el archivo CSV
            $handle = fopen($file, 'r');

            // Ignorar la primera fila (encabezado)
            fgetcsv($handle, 1000, '|');

            // Leer y guardar cada fila del archivo
            while (($data = fgetcsv($handle, 1000, '|')) !== false) {
                ZipCode::create([
                    'd_codigo' => $data['d_codigo'],
                    'd_asenta' => $data['d_asenta'],
                    'd_tipo_asenta' => $data['d_tipo_asenta'],
                    'D_mnpio' => $data['D_mnpio'],
                    'd_estado' => $data['d_estado'],
                    'd_ciudad' => $data['d_ciudad'],
                    'd_CP' => $data['d_CP'],
                    'c_estado' => $data['c_estado'],
                    'c_oficina' => $data['c_oficina'],
                    'c_CP' => $data['c_CP'],
                    'c_tipo_asenta' => $data['c_tipo_asenta'],
                    'c_mnpio' => $data['c_mnpio'],
                    'id_asenta_cpcons' => $data['id_asenta_cpcons'],
                    'd_zona' => $data['d_zona'],
                    'c_cve_ciudad' => $data['c_cve_ciudad'],
                ]);
            }

            // Cerrar el archivo
            fclose($handle);

            // return redirect('/')->with('success', 'Archivo cargado correctamente');
    }


}
