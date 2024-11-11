<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;

class PdfGeneratorController extends Controller
{
    public function index(Request $request, $id=null)
    {
        if ($id) {
            $data = MyUser::where('id', '=', $id)->first();
        } else {
            $data = [
                'name' => 'Example',
                'surname' => 'Example',
                'email' => 'example@email.com'
            ];
        }

        $pdf = PDF::loadView('resume', ['user'=> $data]);
        return $pdf->stream('resume.pdf');
    }
}
