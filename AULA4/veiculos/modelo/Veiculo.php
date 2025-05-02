<?php

class Veiculo{

    private $modelo;
    private $marca;
    private $combust;

    public function tipoCombustivel(){
        if ($this->combust == 'A') {
            return 'Álcool';
        } else if ($this->combust == 'G') {
            return 'Gasolina';
        } else if($this->combust == 'F') {
            return 'Flex';
        }
    }
    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of combust
     */
    public function getCombust()
    {
        return $this->combust;
    }

    /**
     * Set the value of combust
     */
    public function setCombust($combust): self
    {
        $this->combust = $combust;

        return $this;
    }
}