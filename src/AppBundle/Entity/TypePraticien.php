<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePraticien
 *
 * @ORM\Table(name="type_praticien")
 * @ORM\Entity
 */
class TypePraticien
{
    /**
     * @var string
     *
     * @ORM\Column(name="type_libelle", type="string", length=50, nullable=true)
     */
    private $typeLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="type_lieu", type="string", length=70, nullable=true)
     */
    private $typeLieu;

    /**
     * @var string
     *
     * @ORM\Column(name="type_code", type="string", length=6)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typeCode;



    /**
     * Set typeLibelle
     *
     * @param string $typeLibelle
     *
     * @return TypePraticien
     */
    public function setTypeLibelle($typeLibelle)
    {
        $this->typeLibelle = $typeLibelle;

        return $this;
    }

    /**
     * Get typeLibelle
     *
     * @return string
     */
    public function getTypeLibelle()
    {
        return $this->typeLibelle;
    }

    /**
     * Set typeLieu
     *
     * @param string $typeLieu
     *
     * @return TypePraticien
     */
    public function setTypeLieu($typeLieu)
    {
        $this->typeLieu = $typeLieu;

        return $this;
    }

    /**
     * Get typeLieu
     *
     * @return string
     */
    public function getTypeLieu()
    {
        return $this->typeLieu;
    }

    /**
     * Get typeCode
     *
     * @return string
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }
}
