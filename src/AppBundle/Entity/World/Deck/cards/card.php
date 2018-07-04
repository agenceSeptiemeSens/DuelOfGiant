<?php

abstract class card {
    private $pv;
    private $pa;
    private $nom;
    private $pm;
    private $url;

    

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @return  self
     */ 
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get the value of pa
     */ 
    public function getPa()
    {
        return $this->pa;
    }

    /**
     * Set the value of pa
     *
     * @return  self
     */ 
    public function setPa($pa)
    {
        $this->pa = $pa;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of pm
     */ 
    public function getPm()
    {
        return $this->pm;
    }

    /**
     * Set the value of pm
     *
     * @return  self
     */ 
    public function setPm($pm)
    {
        $this->pm = $pm;

        return $this;
    }

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}