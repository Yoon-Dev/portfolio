<?php
class Page{
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // caratéristique
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    protected   $_id,
                $_presxl,
                $_avtel,
                $_cvphp,
                $_cvreal,
                $_btnd,
                $_dlink,
                $_navhome,
                $_navprojet,
                $_navcv;


// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // CONSTRUCT
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function __construct(Array $data){
        $this->hydrate($data);
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // HYDRATE
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function hydrate(Array $data){
        foreach ($data as $key => $value){
            $method='set'.ucfirst($key);
            if (method_exists($this, $method)){
                $this->$method($value);
            }
            }
        }
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // fonctionnalité
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // GETTER
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function id(){return$this->_id;}
    public function presxl(){return$this->_presxl;}
    public function avtel(){return$this->_avtel;}
    public function cvphp(){return$this->_cvphp;}
    public function cvreal(){return$this->_cvreal;}
    public function btnd(){return$this->_btnd;}
    public function dlink(){return$this->_dlink;}
    public function navhome(){return$this->_navhome;}
    public function navprojet(){return$this->_navprojet;}
    public function navcv(){return$this->_navcv;}
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // SETTER
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function setId($id){if(is_int($id)){$this->_id = $id;}}
    public function setPresxl($presxl){if(is_string($presxl)){$this->_presxl = $presxl;}}
    public function setAvtel($avtel){if(!empty($avtel) && is_string($avtel)){$this->_avtel = $avtel;}}
    public function setCvphp($cvphp){if(!empty($cvphp) && is_string($cvphp)){$this->_cvphp = $cvphp;}}
    public function setCvreal($cvreal){if(!empty($cvreal) && is_string($cvreal)){$this->_cvreal = $cvreal;}}
    public function setBtnd($btnd){if(!empty($btnd) && is_string($btnd)){$this->_btnd = $btnd;}}
    public function setDlink($dlink){if(!empty($dlink) && is_string($dlink)){$this->_dlink = $dlink;}}
    public function setNavhome($navhome){if(!empty($navhome) && is_string($navhome)){$this->_navhome = $navhome;}}
    public function setNavprojet($navprojet){if(!empty($navprojet) && is_string($navprojet)){$this->_navprojet = $navprojet;}}
    public function setNavcv($navcv){if(!empty($navcv) && is_string($navcv)){$this->_navcv = $navcv;}}

    // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// fin CLASSE
}

?>