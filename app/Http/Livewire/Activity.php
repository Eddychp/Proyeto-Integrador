<?php

namespace App\Http\Livewire;

use App\Models\Activity as ModelsActivity;
use App\Models\Association;
use Livewire\Component;

class Activity extends Component
{
    public $isOpen=false;
    public $activity_id,$name,$description,$datatime,$penalty,$association_id;
    public $associations;
    public $search,$activity;
    public $direction='asc';
    public $sort='id';
    public function render()

    {

        $activities=ModelsActivity::where('name','like','%'.$this->search.'%')
                        ->orderBy($this->sort,$this->direction)
                        ->paginate(10);

        return view('livewire.activity',compact('activities'));
    }
    public function create(){
        $this->associations=Association::all();
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
        $this->description="";
        $this->datatime="";
        $this->penalty="";
        $this->association_id="";
    }
    public function store(){
        $this->validate([

            'name'=>'required',
            'description'=>'required',
            'datatime'=>'required',
            'penalty'=>'required',
            'association_id'=>'required',
        ]);
        ModelsActivity::updateOrCreate(['id'=>$this->activity_id],
            [
                'name'=>$this->name,
                'description'=> $this->description,
                'datatime'=>$this->datatime,
                'penalty'=> $this->penalty,
                'association_id'=>$this->association_id,
            ]
        );
        session()->flash('message',
            $this->activity_id?'Registro actualizado satisfactoriamente':'Registro creado satisfactoriamente.');
        $this->closeModal();
        $this->resetInputsFields();
    }

    public function edit(ModelsActivity $activity){
        $this->activity_id=$activity->id;
        $this->name=$activity->name;
        $this->description=$activity->description;
        $this->datatime=$activity->datatime;
        $this->penalty=$activity->penalty;
        $this->association_id=$activity->association_id;
        $this->openModal();
    }

    public function delete(ModelsActivity $activity){
        $activity->delete();
        session()->flash('message', 'Registro borrado satisfactoriamente.');
    }

}
