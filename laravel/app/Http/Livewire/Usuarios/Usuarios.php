<?php

namespace App\Http\Livewire\Usuarios;

use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Usuarios extends Component
{
    use WithPagination;
    public $nombre, $nit, $telefono, $correo, $direccion, $usuario, $password, $tipo, $estado, $entidad_id, $updateMode=false;
    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;
    

    public function render()
    {
        
        $data=User::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage);
        return view('livewire.usuarios.usuarios', compact('data'));
    }

    public function resetInputFields(){
        $this->nombre='';
        $this->nit='';
        $this->telefono='';
        $this->correo='';
        $this->usuario='';
        $this->password='';
        $this->tipo='';
        $this->direccion='';
        $this->entidad_id='';
    }

    public function store(){
        $validated = $this->validate([
            'nombre' => 'required',           
            'nit' => 'required',   
            'correo' => 'required|email',           
            'usuario' => 'required',           
            'password' => 'required',           
            'tipo' => 'required',           
        ]);

        if($validated){
            User::updateOrCreate(
                ['id' =>  ($this->entidad_id)],
                [
                    'nombre' =>  strtoupper($this->nombre),
                    'nit' =>  ($this->nombre),
                    'telefono' =>  ($this->telefono),
                    'email' =>  ($this->correo),
                    'username' =>  ($this->usuario),
                    'password' =>  Hash::make($this->password),
                    'tipo' =>  ($this->tipo),
                    'direccion' =>  ($this->direccion),
                ]);         
            session()->flash('message', 'DATOS REGISTRADOS EXITOSAMENTE.');
            $this->resetInputFields();
            $this->emit('closeModal');
        }
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $obj = User::find($id);
        $this->entidad_id = $id;
        $this->nombre = $obj->nombre;
        $this->nit = $obj->nit;
        $this->telefono = $obj->telefono;
        $this->correo = $obj->email;
        $this->usuario = $obj->username;
        $this->password = $obj->password;
        $this->direccion = $obj->direccion;
        $this->tipo = $obj->tipo;
    }

    public function editEstado($id)
    {
        $this->entidad_id = $id;

    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function updateEstado(){
        $obj = $this->model::find($this->entidad_id);
        if($obj->estado==1){
            $obj->estado=0;
            $obj->save();
        }else{
            $obj->estado=1;
            $obj->save();
        }
        session()->flash('message', 'ESTADO ACTUALIZADO EXITOSAMENTE');
        $this->emit('closeModalEstado');


    }
}
