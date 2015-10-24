<?php
/**
 * Created by PhpStorm.
 * User: aradchenko
 * Date: 20.10.15
 * Time: 13:01
 */
namespace GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="measures")
 */
class Measures
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $_id;

    /**
     * @ORM\Column(type="text")
     */
    protected $_names;

    /**
     * @ORM\Column(type="text")
     */
    protected $_units;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Set names
     *
     * @param string $names
     *
     * @return Measures
     */
    public function setNames($names)
    {
        $this->_names = $names;

        return $this;
    }

    /**
     * Get names
     *
     * @return string
     */
    public function getNames()
    {
        return $this->_names;
    }

    /**
     * Set units
     *
     * @param string $units
     *
     * @return Measures
     */
    public function setUnits($units)
    {
        $this->_units = $units;

        return $this;
    }

    /**
     * Get units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->_units;
    }
}
