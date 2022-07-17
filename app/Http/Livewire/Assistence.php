<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\Assistence as ModelsAssistence;
use App\Models\Associate;
use Livewire\Component;

class Assistence extends Component
{
    public $isOpen=false;
    public $assistence_id,$status,$activity_id,$associate_id;
    public $activities;
    public $associates;
    public $search,$assistence;
    public $direction='asc';
    public $sort='id';
    public function render()
    {

        $activities=Activity::all();
        $assistences=ModelsAssistence::where('associate_id','like','%'.$this->search.'%')
                        ->orderBy($this->sort,$this->direction)
                        ->paginate(10);

        return view('livewire.assistence',compact('assistences','activities'));
    }
    public function create(){
        $this->activities=Activity::all();
        $this->associates=Associate::all();
        $this->openModal();
    }
    public function openModal(){
        $this->isOpen=true;
    }
    public function closeModal(){
        $this->isOpen=false;
    }
    private function resetInputsFields(){
        $this->status="";
        $this->activity_id="";
        $this->associate_id="";

    }
    public function store(){
        $this->validate([

            'status'=>'required',
            'activity_id'=>'required',
            'associate_id'=>'required',

        ]);
        ModelsAssistence::updateOrCreate(['id'=>$this->assistence_id],
            [
                'status'=>$this->status,
                'activity_id'=> $this->activity_id,
                'associate_id'=>$this->associate_id,

            ]
        );
        session()->flash('message',
            $this->assistence_id?'Registro actualizado satisfactoriamente':'Registro creado satisfactoriamente.');
        $this->closeModal();
        $this->resetInputsFields();
    }

    public function edit(ModelsAssistence $assistence){
        $this->assistence_id=$assistence->id;
        $this->status=$assistence->status;
        $this->activity_id=$assistence->activity_id;
        $this->associate_id=$assistence->associate_id;

        $this->openModal();
    }

    public function delete(ModelsAssistence $assistence){
        $assistence->delete();
        session()->flash('message', 'Registro borrado satisfactoriamente.');
    }

}
