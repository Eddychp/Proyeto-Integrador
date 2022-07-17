<?php

namespace App\Http\Livewire;

use App\Models\Association as ModelsAssociation;
use Livewire\Component;

class Association extends Component
{
    public $isOpen=false;
    public $association_id,$name,$creationDate,$location;

    public function render()
    {
        $associations=ModelsAssociation::all();

        return view('livewire.association',compact('associations'));

    }
    public function create(){
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
        $this->creationDate="";
        $this->location="";
    }
    public function store(){
        $this->validate([

            'name'=>'required',
            'creationDate'=>'required',
            'location'=>'required',

        ]);
        ModelsAssociation::updateOrCreate(['id'=>$this->association_id],
            [
                'name'=>$this->name,
                'creationDate'=> $this->creationDate,
                'location'=>$this->location,
            ]
        );
        session()->flash('message',
            $this->association_id?'Registro actualizado satisfactoriamente':'Registro creado satisfactoriamente.');
        $this->closeModal();
        $this->resetInputsFields();
    }

    public function edit(ModelsAssociation $association){
        $this->association_id=$association->id;
        $this->name=$association->name;
        $this->creationDate=$association->creationDate;
        $this->location=$association->location;
        $this->openModal();
    }

    public function delete(ModelsAssociation $association){
        $association->delete();
        session()->flash('message', 'Registro borrado satisfactoriamente.');
    }



}
