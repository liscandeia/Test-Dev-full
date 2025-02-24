<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Group;
class GroupForm extends Form
{
    public ? Group $group;

    public $name='';

    protected $rules=['name'=>'required'];
    
    public function CreateGroup():Group{
        $this->validate();
        $group = Group::create($this->all());
        $this->reset('name');
        return $group;

    }
    public function SetGroup(Group $group):void{
        $this->group=$group;
        $this->name=$group->name;
    }

    public function UpdateGroup():bool{
        $this->validate();
        return $this->group->update($this->all());
    }
}
