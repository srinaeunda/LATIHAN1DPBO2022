<?php

class Mahasiswa{
    private $NIM = 0;
    private $Nama = "";
    private $Jk = "";
    private $Prodi = "";
    private $Sem = 0; 

    public function __construct($NIM = 0, $Nama = "", $Jk = "", $prodi = "", $Sem = 0)
    {
        $this->NIM = $NIM;
        $this->Nama = $Nama;
        $this->Jk = $Jk;
        $this->prodi = $prodi;
        $this->Sem = $Sem;
    }

    public function setNIM($NIM){
        $this->NIM = $NIM;
    }

    public function getNIM(){
        return $this->NIM; 
    }

    public function setNama($Nama){
        $this->Nama = $Nama;
    }

    public function getNama(){
        return $this->Nama; 
    }

    public function setJk($Jk){
        $this->Jk = $Jk;
    }

    public function getJk(){
        return $this->Jk; 
    }

    public function setprodi($prodi){
        $this->prodi = $prodi;
    }

    public function getprodi(){
        return $this->prodi; 
    }

    public function setSem($Sem){
        $this->Sem = $Sem;
    }

    public function getSem(){
        return $this->Sem; 
    }
}

?>
