<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//agregar
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RolController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ver-rol', ['only'=>['index']]);
        $this->middleware('permission:crear-rol', ['only'=>['create','store']]);
        $this->middleware('permission:editar-rol', ['only'=>['edit','update']]);
        $this->middleware('permission:borrar-rol', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //referencia al modelo roles
        $roles = Role::where('Estado','Si')->paginate(10);
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //uso de la clase permission
        $permisouno = Permission::where('id','1')->get();
        $permisodos = Permission::where('id','2')->get();
        $permisotres = Permission::where('id','3')->get();
        $permisocuatro = Permission::where('id','4')->get();
        $permisocinco = Permission::where('id','5')->get();
        $permisoseis = Permission::where('id','6')->get();
        $permisosiete = Permission::where('id','7')->get();
        $permisoocho = Permission::where('id','8')->get();
        $permisonnueve = Permission::where('id','9')->get();
        $permisodies = Permission::where('id','10')->get();

        $permisoonce = Permission::where('id','11')->get();
        $permisodoce = Permission::where('id','12')->get();
        $permisotresce = Permission::where('id','13')->get();
        $permisocatorce = Permission::where('id','14')->get();
        $permisoquince = Permission::where('id','15')->get();
        $permisodiesies = Permission::where('id','16')->get();
        $permisodiesisiete = Permission::where('id','17')->get();
        $permisodiessiocho = Permission::where('id','18')->get();
        $permisodiesinueve = Permission::where('id','19')->get();

        $permisoveinte = Permission::where('id','20')->get();
        $permisoveintiuno = Permission::where('id','21')->get();
        $permisoveintidos = Permission::where('id','22')->get();
        $permisoveintitres = Permission::where('id','23')->get();
        $permisoveinticuatro = Permission::where('id','24')->get();
        $permisoveinticinco = Permission::where('id','25')->get();
        $permisoveintiseis = Permission::where('id','26')->get();
        $permisoveintisiete = Permission::where('id','27')->get();
        $permisoveintiocho = Permission::where('id','28')->get();
        $permisveintionueve = Permission::where('id','29')->get();

        $permisotreinta = Permission::where('id','30')->get();
        $permisotreintauno = Permission::where('id','31')->get();
        $permisotreintados = Permission::where('id','32')->get();
        $permisotreintatres = Permission::where('id','33')->get();
        $permisotreintacuatro = Permission::where('id','34')->get();
        $permisotreintacinco = Permission::where('id','35')->get();
        $permisotreintaseis = Permission::where('id','36')->get();
        $permisotreintasiete = Permission::where('id','37')->get();
        $permisotreintaocho = Permission::where('id','38')->get();
        $permisotreintanueve = Permission::where('id','39')->get();
        
        $permisocuatenta = Permission::where('id','40')->get();
        $permisocuatentauno = Permission::where('id','41')->get();
        $permisocuatentados = Permission::where('id','42')->get();
        $permisocuatentatres = Permission::where('id','43')->get();
        $permisocuatentacuatro = Permission::where('id','44')->get();
        $permisocuatentacinco = Permission::where('id','45')->get();
        $permisocuatentaseis = Permission::where('id','46')->get();
        $permisocuatentasiete = Permission::where('id','47')->get();
        $permisocuatentaocho = Permission::where('id','48')->get();
        $permisocuatentanueve = Permission::where('id','49')->get();

        $permisocincuenta = Permission::where('id','50')->get();
        $permisocincuentauno = Permission::where('id','51')->get();
        $permisocincuentados = Permission::where('id','52')->get();
        $permisocincuentatres = Permission::where('id','53')->get();
        $permisocincuentacuatro = Permission::where('id','54')->get();
        $permisocincuentacinco = Permission::where('id','55')->get();
        $permisocincuentaseis = Permission::where('id','56')->get();
        $permisocincuentasiete = Permission::where('id','57')->get();
        $permisocincuentaocho = Permission::where('id','58')->get();
        $permisocincuentanueve = Permission::where('id','59')->get();

        $permisosesenta = Permission::where('id','60')->get();
        $permisosesentauno = Permission::where('id','61')->get();
        $permisosesentados = Permission::where('id','62')->get();
        $permisosesentatres = Permission::where('id','63')->get();
        $permisosesentacuatro = Permission::where('id','64')->get();
        $permisosesentacinco = Permission::where('id','65')->get();
        $permisosesentaseis = Permission::where('id','66')->get();
        $permisosesentasiete = Permission::where('id','67')->get();
        $permisosesentaocho = Permission::where('id','68')->get();
        $permisosesentanueve = Permission::where('id','69')->get();
        $permisosetenta = Permission::where('id','70')->get();

        $permisosetentauno = Permission::where('id','71')->get();
        $permisosetentados = Permission::where('id','72')->get();
        $permisosetentatres = Permission::where('id','73')->get();
        $permisosetentacuatro = Permission::where('id','74')->get();
        $permisosetentacinco = Permission::where('id','75')->get();
        $permisosetentaseis = Permission::where('id','76')->get();
        $permisosetentasiete = Permission::where('id','77')->get();
        $permisosetentaocho = Permission::where('id','78')->get();
        $permisosetentanueve = Permission::where('id','79')->get();
        $permisoochenta = Permission::where('id','80')->get();

        $permisoochentauno = Permission::where('id','81')->get();
        $permisoochentados = Permission::where('id','82')->get();
        $permisoochentatres = Permission::where('id','83')->get();
        $permisoochentacuatro = Permission::where('id','84')->get();
        $permisoochentacinco = Permission::where('id','85')->get();


        $permission = Permission::get();
        return view('roles.crear', compact('permission','permisouno','permisodos','permisotres','permisocuatro','permisocinco','permisoseis','permisosiete','permisoocho','permisonnueve','permisodies','permisoonce','permisodoce','permisotresce','permisocatorce','permisoquince','permisodiesies','permisodiesisiete','permisodiessiocho','permisodiesinueve', 'permisoveinte','permisoveintiuno','permisoveintidos','permisoveintitres','permisoveinticuatro','permisoveinticinco','permisoveintiseis','permisoveintisiete','permisoveintiocho','permisveintionueve', 'permisotreinta','permisotreintauno','permisotreintados','permisotreintatres','permisotreintacuatro','permisotreintacinco','permisotreintaseis','permisotreintasiete','permisotreintaocho','permisotreintanueve', 'permisocuatenta', 'permisocuatentauno', 'permisocuatentados', 'permisocuatentatres', 'permisocuatentacuatro', 'permisocuatentacinco', 'permisocuatentaseis', 'permisocuatentasiete', 'permisocuatentaocho', 'permisocuatentanueve', 'permisocincuenta', 'permisocincuentauno', 'permisocincuentados', 'permisocincuentatres', 'permisocincuentacuatro', 'permisocincuentacinco', 'permisocincuentaseis', 'permisocincuentasiete', 'permisocincuentaocho', 'permisocincuentanueve', 'permisosesenta', 'permisosesentauno', 'permisosesentados', 'permisosesentatres', 'permisosesentacuatro', 'permisosesentacinco', 'permisosesentaseis', 'permisosesentasiete', 'permisosesentaocho', 'permisosesentanueve','permisosetenta','permisosetentauno','permisosetentados','permisosetentatres','permisosetentacuatro','permisosetentacinco','permisosetentaseis','permisosetentasiete','permisosetentaocho','permisosetentanueve','permisoochenta','permisoochentauno','permisoochentados','permisoochentatres','permisoochentacuatro','permisoochentacinco'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'name' => 'required | TextoRule3', 
            'permission'=>'required',
            'Estado',
        ]);
        $role = Role::create(['name'=>$request->input('name'),'Estado'=>$request->input('Estado')]);
        $role->syncPermissions($request->input('permission'));

        return redirect()->route('roles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $role = Role::find($id);

        $permisouno = Permission::where('id','1')->get();
        $permisodos = Permission::where('id','2')->get();
        $permisotres = Permission::where('id','3')->get();
        $permisocuatro = Permission::where('id','4')->get();
        $permisocinco = Permission::where('id','5')->get();
        $permisoseis = Permission::where('id','6')->get();
        $permisosiete = Permission::where('id','7')->get();
        $permisoocho = Permission::where('id','8')->get();
        $permisonnueve = Permission::where('id','9')->get();
        $permisodies = Permission::where('id','10')->get();

        $permisoonce = Permission::where('id','11')->get();
        $permisodoce = Permission::where('id','12')->get();
        $permisotresce = Permission::where('id','13')->get();
        $permisocatorce = Permission::where('id','14')->get();
        $permisoquince = Permission::where('id','15')->get();
        $permisodiesies = Permission::where('id','16')->get();
        $permisodiesisiete = Permission::where('id','17')->get();
        $permisodiessiocho = Permission::where('id','18')->get();
        $permisodiesinueve = Permission::where('id','19')->get();

        $permisoveinte = Permission::where('id','20')->get();
        $permisoveintiuno = Permission::where('id','21')->get();
        $permisoveintidos = Permission::where('id','22')->get();
        $permisoveintitres = Permission::where('id','23')->get();
        $permisoveinticuatro = Permission::where('id','24')->get();
        $permisoveinticinco = Permission::where('id','25')->get();
        $permisoveintiseis = Permission::where('id','26')->get();
        $permisoveintisiete = Permission::where('id','27')->get();
        $permisoveintiocho = Permission::where('id','28')->get();
        $permisveintionueve = Permission::where('id','29')->get();

        $permisotreinta = Permission::where('id','30')->get();
        $permisotreintauno = Permission::where('id','31')->get();
        $permisotreintados = Permission::where('id','32')->get();
        $permisotreintatres = Permission::where('id','33')->get();
        $permisotreintacuatro = Permission::where('id','34')->get();
        $permisotreintacinco = Permission::where('id','35')->get();
        $permisotreintaseis = Permission::where('id','36')->get();
        $permisotreintasiete = Permission::where('id','37')->get();
        $permisotreintaocho = Permission::where('id','38')->get();
        $permisotreintanueve = Permission::where('id','39')->get();
        
        $permisocuatenta = Permission::where('id','40')->get();
        $permisocuatentauno = Permission::where('id','41')->get();
        $permisocuatentados = Permission::where('id','42')->get();
        $permisocuatentatres = Permission::where('id','43')->get();
        $permisocuatentacuatro = Permission::where('id','44')->get();
        $permisocuatentacinco = Permission::where('id','45')->get();
        $permisocuatentaseis = Permission::where('id','46')->get();
        $permisocuatentasiete = Permission::where('id','47')->get();
        $permisocuatentaocho = Permission::where('id','48')->get();
        $permisocuatentanueve = Permission::where('id','49')->get();

        $permisocincuenta = Permission::where('id','50')->get();
        $permisocincuentauno = Permission::where('id','51')->get();
        $permisocincuentados = Permission::where('id','52')->get();
        $permisocincuentatres = Permission::where('id','53')->get();
        $permisocincuentacuatro = Permission::where('id','54')->get();
        $permisocincuentacinco = Permission::where('id','55')->get();
        $permisocincuentaseis = Permission::where('id','56')->get();
        $permisocincuentasiete = Permission::where('id','57')->get();
        $permisocincuentaocho = Permission::where('id','58')->get();
        $permisocincuentanueve = Permission::where('id','59')->get();

        $permisosesenta = Permission::where('id','60')->get();
        $permisosesentauno = Permission::where('id','61')->get();
        $permisosesentados = Permission::where('id','62')->get();
        $permisosesentatres = Permission::where('id','63')->get();
        $permisosesentacuatro = Permission::where('id','64')->get();
        $permisosesentacinco = Permission::where('id','65')->get();
        $permisosesentaseis = Permission::where('id','66')->get();
        $permisosesentasiete = Permission::where('id','67')->get();
        $permisosesentaocho = Permission::where('id','68')->get();
        $permisosesentanueve = Permission::where('id','69')->get();
        $permisosetenta = Permission::where('id','70')->get();

        $permisosetentauno = Permission::where('id','71')->get();
        $permisosetentados = Permission::where('id','72')->get();
        $permisosetentatres = Permission::where('id','73')->get();
        $permisosetentacuatro = Permission::where('id','74')->get();
        $permisosetentacinco = Permission::where('id','75')->get();
        $permisosetentaseis = Permission::where('id','76')->get();
        $permisosetentasiete = Permission::where('id','77')->get();
        $permisosetentaocho = Permission::where('id','78')->get();
        $permisosetentanueve = Permission::where('id','79')->get();
        $permisoochenta = Permission::where('id','80')->get();

        $permisoochentauno = Permission::where('id','81')->get();
        $permisoochentados = Permission::where('id','82')->get();
        $permisoochentatres = Permission::where('id','83')->get();
        $permisoochentacuatro = Permission::where('id','84')->get();
        $permisoochentacinco = Permission::where('id','85')->get();
        
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$id)->pluck('role_has_permissions.permission_id','role_has_permissions.permission_id')->all();
    
        return view('roles.editar', compact('role','permission','rolePermissions' ,'permisouno','permisodos','permisotres','permisocuatro','permisocinco','permisoseis','permisosiete','permisoocho','permisonnueve','permisodies','permisoonce','permisodoce','permisotresce','permisocatorce','permisoquince','permisodiesies','permisodiesisiete','permisodiessiocho','permisodiesinueve', 'permisoveinte','permisoveintiuno','permisoveintidos','permisoveintitres','permisoveinticuatro','permisoveinticinco','permisoveintiseis','permisoveintisiete','permisoveintiocho','permisveintionueve', 'permisotreinta','permisotreintauno','permisotreintados','permisotreintatres','permisotreintacuatro','permisotreintacinco','permisotreintaseis','permisotreintasiete','permisotreintaocho','permisotreintanueve', 'permisocuatenta', 'permisocuatentauno', 'permisocuatentados', 'permisocuatentatres', 'permisocuatentacuatro', 'permisocuatentacinco', 'permisocuatentaseis', 'permisocuatentasiete', 'permisocuatentaocho', 'permisocuatentanueve', 'permisocincuenta', 'permisocincuentauno', 'permisocincuentados', 'permisocincuentatres', 'permisocincuentacuatro', 'permisocincuentacinco', 'permisocincuentaseis', 'permisocincuentasiete', 'permisocincuentaocho', 'permisocincuentanueve', 'permisosesenta', 'permisosesentauno', 'permisosesentados', 'permisosesentatres', 'permisosesentacuatro', 'permisosesentacinco', 'permisosesentaseis', 'permisosesentasiete', 'permisosesentaocho', 'permisosesentanueve','permisosetenta','permisosetentauno','permisosetentados','permisosetentatres','permisosetentacuatro','permisosetentacinco','permisosetentaseis','permisosetentasiete','permisosetentaocho','permisosetentanueve','permisoochenta','permisoochentauno','permisoochentados','permisoochentatres','permisoochentacuatro','permisoochentacinco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'name' => 'required', 
            'permission' => 'required',
            'Estado',
        ]);
    
        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->Estado = $request->input('Estado');
        $role->save();
    
        $role->syncPermissions($request->input('permission'));
    
        return redirect()->route('roles.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $roles = Role::findOrFail($id);
        $roles->Estado='No';
        $roles->update();
        return redirect()->route('roles.index')->with('status');
    }
}
