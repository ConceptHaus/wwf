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
use App\Recursos;
use App\ButtonPaso;
use App\Catalogo;
use App\Exports\UserExport;
use App\Exports\MensajesExport;
use Carbon\Carbon;
use DB;
use Excel;

class AdminController extends Controller
{
    public function addCaso(Request $request){
        if(is_numeric($request->id)){
            $caso = Noticias::where('id', $request->id)->first();
        }else{
            $caso = new Noticias;
        }
        $file = $request->file('file');
        $caso->titulo = $request->titulo;
        $caso->descripcion = $request->descripcion;
        $caso->url = $this->uploadTicketS3($file[1]);
        $caso->img = $this->uploadTicketS3($file[0]);
        $caso->save();

        return response([
            'status'=>'success',
            'caso'=>$caso
        ],201);
    }
    public function deleteCaso($id){
        $id_caso = $id;
        $caso = Noticias::where('id',$id_caso)->delete();

        return response([
            'status'=>'success',
            'delete'=>$id_caso
        ],200);
    }

    public function getOneCaso(Request $request){
        $caso = Noticias::where('id',$request->id)->first();

        return response([
            'satus'=>'success',
            'caso'=>$caso
        ],200);
    }

    public function addRecurso(Request $request){
        if(is_numeric($request->id)){
            $recurso = Recursos::where('id',$request->id)->first();
        }else{
            $recurso = new Recursos;
        }
        $recurso->titulo = $request->titulo;
        $recurso->descripcion = $request->descripcion;
        $recurso->url = $request->link;
        $recurso->img = $this->uploadTicketS3($request->file('file'));
        $recurso->save();
        return response([
            'status'=>'success',
            'recurso'=>$recurso
        ],201);
    }
    public function deleteRecurso(Request $request){
        $id_recurso = $request->id;
        $recurso = Recursos::where('id',$id_recurso)->delete();
        return response([
            'status'=>'success',
            'delete'=>$id_recurso
        ],200);
    }



    public function getOneRecurso(Request $request){
        $recurso = Recursos::where('id',$request->id)->first();

        return response([
            'satus'=>'success',
            'recurso'=>$recurso
        ],200);
    }
    public function addRecursoRuta(Request $request){
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

    public function addButtonPaso(Request $request){
        $button = new ButtonPaso;
        $button->ruta = $request->ruta;
        $button->innerpaso = $request->innerpaso;
        $button->titulo = $request->titulo;
        $button->file = $this->uploadTicketS3($request->file('file'));
        $button->save();

        return response([
            'status'=>'success',
            'button'=>$button
        ],201);
    }
    public function addCatalogo(Request $request){
        $files = $request->file('file');
        $catalogo = new Catalogo;
        $catalogo->file = $this->uploadTicketS3($files[1]);
        $catalogo->img = $this->uploadTicketS3($files[0]);
        $catalogo->save();
        return response([
            'status'=>'success',
            'catalogo'=>$catalogo
        ],201);
    }

    public function uploadTicketS3($file){
        //Sube tickets a bucket de Amazon
        $disk = Storage::disk('s3');
        $path = $file->store('catalogo','s3');
        Storage::setVisibility($path,'public');
        $url = $disk->url($path);
        return $url;

    }

    public function getButtonPaso($ruta){
        $buttons = ButtonPaso::where('ruta',$ruta)->get();

        return response([
            'status'=>'success',
            'buttons'=>$buttons
        ],200);
    }
    public function getCatalogo(){
        $catalogo = Catalogo::all()->last();
        return response([
            'status'=>'success',
            'catalogo'=>$catalogo
        ],200);
    }

    public function getRecursosRutas($ruta){
        $recursosRutas = RecursosRutaCompra::where('ruta',$ruta)->get();

        return response([
            'status'=>'success',
            'recursos'=>$recursosRutas
        ],200);
    }

    public function getCasos(Request $request){
        $caso = Noticias::all();

        return response([
            'status'=>'success',
            'caso'=>$caso
        ],200);
    }
    public function getRecursos(Request $request){
        $recursos = Recursos::all();

        return response([
            'status'=>'success',
            'recursos'=>$recursos
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
    public function downloadMensajes(){
        $date = Carbon::now();
        return Excel::download(new MensajesExport, "{$date}_mensajes.xlsx");
    }
}
