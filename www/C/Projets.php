<?php
class Projets{
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // caratéristique
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    protected   $_id,
                $_titre,
                $_detail,
                $_langage,
                $_video,
                $_github,      
                $_yt,
                $_avlang,
                $_avvideo,
                $_avcs;

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
    public function titre(){return$this->_titre;}
    public function detail(){return$this->_detail;}
    public function langage(){return$this->_langage;}
    public function video(){return$this->_video;}
    public function github(){return$this->_github;}
    public function yt(){return$this->_yt;}
    public function avlang(){return$this->_avlang;}
    public function avvideo(){return$this->_avvideo;}
    public function avcs(){return$this->_avcs;}
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // SETTER
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function setId($id){if(is_int($id)){$this->_id = $id;}}
    public function setTitre($titre){if(is_string($titre)){$this->_titre = $titre;}}
    public function setDetail($detail){if(!empty($detail) && is_string($detail)){$this->_detail = $detail;}}
    public function setLangage($langage){if(!empty($langage) && is_string($langage)){$this->_langage = $langage;}}
    public function setVideo($video){if(is_string($video)){$this->_video = $video;}}
    public function setGithub($github){if(is_string($github)){$this->_github = $github;}}
    public function setYt($yt){if(is_string($yt)){$this->_yt = $yt;}}
    public function setAvlang($avlang){if(!empty($avlang) && is_string($avlang)){$this->_avlang = $avlang;}}
    public function setAvvideo($avvideo){if(!empty($avvideo) && is_string($avvideo)){$this->_avvideo = $avvideo;}}
    public function setAvcs($avcs){if(!empty($avcs) && is_string($avcs)){$this->_avcs = $avcs;}}
    
    // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// fin CLASSE
}

?>