// klases ir klasiu failo pavadinimas is didziosios
// kintamieji ir funkcijos is mazosios ir camelCase
// masyvu elementntai_sneiku
// konstantos tik didziosiosmis be dolerio zenklo sneikas

<?php 

class FormHelper
{

    private $form;
    
    
    public function __construct($action, $method)
    {
    
        $this->form = '<form action="'$action'" method="'.$method.'">';
    
    }
    
    public function getForm()
    {
    
        return $this->form; // this yra sis objektas kuriame esame, kai kitur susikursime objekta, per ta objekta kreipsimes
    
    }
    
    public function __destruct()
    {
    
        $this->form = '</form>'; 
    
    }

}
