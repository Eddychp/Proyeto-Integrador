<?php

namespace App\Http\Livewire;

use App\Models\Associate as ModelsAssociate;
use App\Models\People;
use App\Models\Period;
use App\Models\Stand;
use Livewire\Component;

class Associate extends Component
{
    public $isOpen=false;
    public $search,$associate;
    public $direction='asc';
    public $sort='id';

    public function render()
    {
        $associates=ModelsAssociate::where('name','like','%'.$this->search.'%')
        ->orderBy($this->sort,$this->direction)
        ->paginate(10);
        $stands =Stand::find('name','id');
        $periods=Period::pluck('description','id');
        return view('livewire.associate',compact('associates'));
    }
    public function create(){
        $this->stands=Stand::all();
        $this->periods=Period::all();

        $this->openModal();
    }
    public function openModal(){
        $this->isOpen=true;
    }
    public function closeModal(){
        $this->isOpen=false;
    }
    private function resetInputsFields(){
        $this->name="";
        $this->fatherlastname="";
        $this->motherlastname="";
        $this->dni="";
        $this->birtdate="";
        $this->maricalstaus="";
        $this->sexo="";
        $this->phone="";
        $this->email="";
        $this->address="";
        $this->code="";
        $this->type="";
        $this->status="";
        $this->stand_id="";
        $this->period_id="";
    }
    public function store(){
        $this->validate([

            'name'=>'required',
            'fatherlastname'=>'required',
            'motherlastname'=>'required',
            'dni'=>'required',
            'birtdate'=>'required',
            'maricalstaus'=>'required',
            'sexo'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'code'=>'required',
            'type'=>'required',
            'status'=>'required',
            'stand_id'=>'required',
            'period_id'=>'required',
        ]);
        ModelsAssociate::updateOrCreate(['id'=>$this->associate_id],
            [
                'name'=> $this->name,
                'fatherlastname'=> $this->fatherlastname,
                'motherlastname'=> $this->motherlastname,
                'dni'=> $this->dni,
                'birtdate'=> $this->birtdate,
                'maricalstaus'=> $this->maricalstaus,
                'sexo'=> $this->sexo,
                'phone'=> $this->phone,
                'email'=> $this->email,
                'address'=> $this->address,
                'code'=> $this->code,
                'type'=>$this->type,
                'status'=> $this->status,
                'stand_id'=>$this->stand_id,
                'period_id'=>$this->period_id,
            ]
        );
        session()->flash('message',
            $this->associate_id?'Registro actualizado satisfactoriamente':'Registro creado satisfactoriamente.');
        $this->closeModal();
        $this->resetInputsFields();
    }

    public function edit(ModelsAssociate $associate){
        $this->associate_id=$associate->id;
        $this->name=$associate->name;
        $this->fatherlastname=$associate->fatherlastname;
        $this->motherlastname=$associate->motherlastname;
        $this->dni=$associate->dni;
        $this->birtdate=$associate->birtdate;
        $this->maricalstaus=$associate->maricalstaus;
        $this->sexo=$associate->sexo;
        $this->phone=$associate->phone;
        $this->email=$associate->email;
        $this->address=$associate->address;
        $this->code=$associate->code;
        $this->type=$associate->type;
        $this->status=$associate->status;
        $this->stand_id=$associate->stand_id;
        $this->period_id=$associate->period_id;
        $this->openModal();
    }

    public function delete(ModelsAssociate $associate){
        $associate->delete();
        session()->flash('message', 'Registro borrado satisfactoriamente.');
    }

}
