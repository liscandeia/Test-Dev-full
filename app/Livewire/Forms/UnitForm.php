<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Unit;

class UnitForm extends Form
{
    public ? Unit $unit;

    public $name='';
    public $flag_id='';
    public $fantasy_name='';
    public $corporate_name='';
    public $cnpj='';
    protected $rules=['flag_id'=>'required','fantasy_name'=>'required', 'corporate_name'=>'required','cnpj'=>'required'];

    public function CreateUnit():Unit{
        $this->validate();
        $unit = Unit::create($this->all());
        $this->reset('flag_id','fantasy_name','corporate_name','cnpj');
        return $unit;

    }
    public function SetUnit(Unit $unit):void{
        $this->unit=$unit;
        $this->fantasy_name=$unit->fantasy_name;
        $this->corporate_name=$unit->corporate_name;
        $this->cnpj=$unit->cnpj;
        $this->flag_id=$unit->flag_id;
    }

    public function UpdateUnit():bool{
        $this->validate();
        return $this->unit->update($this->all());
    }

}
