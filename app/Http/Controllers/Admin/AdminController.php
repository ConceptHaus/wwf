<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Contacto;
use App\Noticias;
use App\RecursosRutaCompra;
use App\Newsletter;
use App\Exports\UserExport;
use Carbon\Carbon;
use DB;
use Excel;

class AdminController extends Controller
{
    public function addCatalogo(Request $request){
        $catalogo = new Noticias;
        $catalogo->titulo = $request->titulo;
        $catalogo->descripcion = $request->descripcion;
        $catalogo->url = $request->link;
        $catalogo->img = $this->uploadTicketS3($request->file('file'));
        $catalogo->save();

        return response([
            'status'=>'success',
            'catalogo'=>$catalogo
        ],201);
    }

    public function addRecurso(Request $request){
        $recurso = new RecursosRutaCompra;
        $recurso->ruta = $request->ruta;
        $recurso->titulo = $request->titulo;
        $recurso->descripcion = $request->descripcion;
        $recurso->url = $request->link;
        $recurso->file = $this->uploadTicketS3($request->file('file'));
        $recurso->ext = $request->file('file')->getClientOriginalExtension();
        $recurso->save();

        return response([
            'status'=>'success',
            'recurso'=>$recurso
        ],201);
    }

    public function uploadTicketS3($file){
        //Sube tickets a bucket de Amazon
        $disk = Storage::disk('s3');
        $path = $file->store('catologo','s3');
        Storage::setVisibility($path,'public');
        $url = $disk->url($path);
        return $url;

    }

    public function getRecursosRutas($ruta){
        $recursosRutas = RecursosRutaCompra::where('ruta',$ruta)->get();

        return response([
            'status'=>'success',
            'recursos'=>$recursosRutas
        ],200);
    }

    public function getCatalogo(Request $request){
        $catalogo = Noticias::all();

        return response([
            'status'=>'success',
            'catalogos'=>$catalogo
        ],200);
    }
    public function getUsers(){
        $users = User::all();
        return response([
            'status'=>'success',
            'users'=>$users
        ],200);
    }
    public function getMensajes(){
        $mensajes = Contacto::all();
        return response([
            'status'=>'success',
            'mensajes'=>$mensajes
        ],200);
    }
    public function getNewsletter(){
        $newsletter = Newsletter::all();

        return response([
            'status'=>'success',
            'newsletter'=>$newsletter
        ],200);
    }
    public function downloadUsers(){
        $date = Carbon::now();
        $headings = [
            'Nombre',
            'E-mail',
            'Teléfono',
            'Empresa',
            'Puesto',
            'Sector',
            'Interés',
            'Consumo eléctrico',
            'Fecha de registro'
        ];
        return Excel::download(new UserExport($headings), "{$date}_users.xlsx");
    }
}
