<?php

namespace App\Http\Livewire;

use App\Models\Associate;
use App\Models\Association;
use App\Models\Debit as ModelsDebit;
use Livewire\Component;

class Debit extends Component
{
    public $associates;
    public $associations;
    public $isOpen=false;
    public $debit_id,$type,$amount,$description,$associate_id,$association_id;

    public function render()
    {
        $debits=ModelsDebit::all();

        return view('livewire.debit',compact('debits'));
    }
    public function create(){
        $this->associates=Associate::all();
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
        $this->type="";
        $this->amount="";
        $this->description="";
        $this->associate_id="";
        $this->association_id="";
    }
    public function store(){
        $this->validate([

            'type'=>'required',
            'amount'=>'required',
            'description'=>'required',
            'associate_id'=>'required',
            'association_id'=>'required',

        ]);
        ModelsDebit::updateOrCreate(['id'=>$this->debit_id],
            [
                'type'=>$this->type,
                'amount'=> $this->amount,
                'description'=>$this->description,
                'associate_id'=> $this->associate_id,
                'association_id'=>$this->association_id,
            ]
        );
        session()->flash('message',
            $this->debit_id?'Registro actualizado satisfactoriamente':'Registro creado satisfactoriamente.');
        $this->closeModal();
        $this->resetInputsFields();
    }

    public function edit(ModelsDebit $debit){
        $this->debit_id=$debit->id;
        $this->type=$debit->type;
        $this->amount=$debit->amount;
        $this->description=$debit->description;
        $this->associate_id=$debit->associate_id;
        $this->association_id=$debit->association_id;
        $this->openModal();
    }

    public function delete(ModelsDebit $debit){
        $debit->delete();
        session()->flash('message', 'Registro borrado satisfactoriamente.');
    }




}
