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
 * @ORM\Table(name="sets_measures")
 */
class SetsMeasures
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_se;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_me;

    /**
     * @ORM\Column(type="text")
     */
    protected $_values;



    /**
     * Set idSe
     *
     * @param integer $idSe
     *
     * @return SetsMeasures
     */
    public function setIdSe($idSe)
    {
        $this->id_se = $idSe;

        return $this;
    }

    /**
     * Get idSe
     *
     * @return integer
     */
    public function getIdSe()
    {
        return $this->id_se;
    }

    /**
     * Set idMe
     *
     * @param integer $idMe
     *
     * @return SetsMeasures
     */
    public function setIdMe($idMe)
    {
        $this->id_me = $idMe;

        return $this;
    }

    /**
     * Get idMe
     *
     * @return integer
     */
    public function getIdMe()
    {
        return $this->id_me;
    }

    /**
     * Set values
     *
     * @param string $values
     *
     * @return SetsMeasures
     */
    public function setValues($values)
    {
        $this->_values = $values;

        return $this;
    }

    /**
     * Get values
     *
     * @return string
     */
    public function getValues()
    {
        return $this->_values;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->_id;
    }
}
