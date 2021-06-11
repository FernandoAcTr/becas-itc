<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Solicitud;
use App\Models\TipoBeca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function registerPage()
    {
        $carreras = Carrera::all();
        $tipos = TipoBeca::all();
        return view('register', compact('carreras', 'tipos'));
    }

    public function solicitudesPage()
    {
        $solicitudes = Solicitud::all();
        return view('solicitudes', compact('solicitudes'));
    }

    public function detailsPage(String $id)
    {
        $solicitud = Solicitud::find($id);
        $url_carta = Storage::disk('s3')->url($solicitud->carta_motivos);
        $url_identificacion = Storage::disk('s3')->url($solicitud->identificacion);
        $url_comprobante = Storage::disk('s3')->url($solicitud->comprobante);
        return view('details', compact('solicitud', 'url_carta', 'url_identificacion', 'url_comprobante'));
    }


    public function store(Request $req)
    {
        $path_carta = $req->file('carta')->store('becas', ['disk' => 's3', 'visibility' => 'public']);
        $path_comprobante = $req->file('comprobante')->store('becas', ['disk' => 's3', 'visibility' => 'public']);
        $path_identificacion = $req->file('identificacion')->store('becas', ['disk' => 's3', 'visibility' => 'public']);

        $solicitud = new Solicitud();
        $solicitud->nombre = $req->name;
        $solicitud->a_paterno = $req->a_paterno;
        $solicitud->a_materno = $req->a_materno;
        $solicitud->num_control = $req->num_control;
        $solicitud->domicilio = $req->domicilio;
        $solicitud->tipo_id = $req->tipo_beca;
        $solicitud->genero = $req->genero;
        $solicitud->fecha_nac = $req->fecha_nac;
        $solicitud->carrera_id = $req->carrera;
        $solicitud->semestre = $req->semestre;
        $solicitud->carta_motivos = $path_carta;
        $solicitud->comprobante = $path_comprobante;
        $solicitud->identificacion = $path_identificacion;

        $solicitud->save();
        return redirect('/solicitudes');
    }
}
