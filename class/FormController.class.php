<?php

class FormController {
    
    private $viewForm;
    private $fakultasAngka;
    private $user;


    public function getForm(){
        $this->viewForm = new ViewForm();
        $this->viewForm->FormView();
    }

    public function getFakultas(){
        $this->fakultasAngka = new fakultasModel();
        $detail = $this->fakultasAngka ->random();
        return $detail;
    }

    public function getHasil(){
        $fakultas = $this->getFakultas();
        $temp = $_FILES['upload']['tmp_name'];        
        $jeneng = $_FILES['upload']['name'];        
        rename($temp,$jeneng);
        $cek = $_POST["form"];
        $check = $_POST["hobi"];
        $this->user = new ViewForm();
        $this->user->ResultView($cek, $check, $jeneng, $fakultas);
        }
}

