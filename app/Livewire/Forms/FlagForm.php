<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Flag;

class FlagForm extends Form
{
    public ? Flag $flag;

    public $name='';
    public $group_id='';
    protected $rules=['name'=>'required', 'group_id'=>'required'];

    public function CreateFlag():Flag{
        $this->validate();
        $flag = Flag::create($this->all());
        $this->reset('name','group_id');
        return $flag;

    }
    public function SetFlag(Flag $flag):void{
        $this->flag=$flag;
        $this->name=$flag->name;
        $this->group_id=$flag->group_id;
    }

    public function UpdateFlag():bool{
        $this->validate();
        return $this->flag->update($this->all());
    }

}
