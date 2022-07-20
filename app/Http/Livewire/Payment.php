<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use App\Models\Assistence;

use App\Models\Payment as ModelsPayment;
use Livewire\Component;

class Payment extends Component
{
    public $isOpen=false;
    public $payment_id,$amount,$activity_id,$assistence_id;
    public $activities;
    public $assistences;
    public $search,$payment;
    public $direction='asc';
    public $sort='id';


    public function render()
    {
        $activities=Activity::all();
        $payments=ModelsPayment::where('activity_id','like','%'.$this->search.'%')
                        ->orderBy($this->sort,$this->direction)
                        ->paginate(10);
        return view('livewire.payment',compact('payments'));
    }
    public function create(){
        $this->activities=Activity::all();
        $this->assistences=Assistence::all();
        $this->openModal();
    }
    public function openModal(){
        $this->isOpen=true;
    }
    public function closeModal(){
        $this->isOpen=false;
    }
    private function resetInputsFields(){
        $this->amount="";
        $this->activity_id="";
        $this->assistence_id="";

    }
    public function store(){
        $this->validate([

            'amount'=>'required',
            'activity_id'=>'required',
            'assistence_id'=>'required',

        ]);
        ModelsPayment::updateOrCreate(['id'=>$this->payment_id],
            [
                'amount'=>$this->amount,
                'activity_id'=> $this->activity_id,
                'assistence_id'=>$this->assistence_id,

            ]
        );
        session()->flash('message',
            $this->payment_id?'Registro actualizado satisfactoriamente':'Registro creado satisfactoriamente.');
        $this->closeModal();
        $this->resetInputsFields();
    }

    public function edit(ModelsPayment $payment){
        $this->payment_id=$payment->id;
        $this->amount=$payment->amount;
        $this->activity_id=$payment->activity_id;
        $this->assistence_id=$payment->assistence_id;

        $this->openModal();
    }

    public function delete(ModelsPayment $payment){
        $payment->delete();
        session()->flash('message', 'Registro borrado satisfactoriamente.');
    }
}
