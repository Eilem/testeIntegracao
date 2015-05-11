<?php

namespace \Frase\Model\Business;

/**
 * @Table (name="frase")
 * @Entity
 */
Class Frase{
    
    /**
     *@Id @GeneratedValue
     * @Column(name="id" , type="integer")
     * @var int
     */
    public $id;
    
    /**
     * @Column (name="frase", type="string")
     * @var string
     */    
    public $frase;
    
    /**
     * @Column (name="autor", type="string")
     * @var string
     */    
    public $autor;
    
    public function getId() {
        return $this->id;
    }

    public function getFrase() {
        return $this->frase;
    }

    public function setFrase($frase) {
        $this->frase = $frase;
        return $this;
    }
    
    public function getAutor() {
        return $this->autor;
    }
    
    public function setAutor($autor) {
        $this->autor = $autor;
        return $this;
    }


}
