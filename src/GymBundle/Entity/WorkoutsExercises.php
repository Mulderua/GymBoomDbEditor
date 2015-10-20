<?php
/**
 * Created by PhpStorm.
 * User: aradchenko
 * Date: 20.10.15
 * Time: 13:12
 */

namespace GymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="workouts_exercises")
 */
class WorkoutsExercises
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
    protected $id_wo;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_ex;

    /**
     * @ORM\Column(type="integer")
     */
    protected $_numbers;

    /**
     * @ORM\Column(type="text")
     */
    protected $_notes;

    /**
     * @ORM\Column(type="integer")
     */
    protected $_sets;


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
     * Set idWo
     *
     * @param integer $idWo
     *
     * @return WorkoutsExercises
     */
    public function setIdWo($idWo)
    {
        $this->id_wo = $idWo;

        return $this;
    }

    /**
     * Get idWo
     *
     * @return integer
     */
    public function getIdWo()
    {
        return $this->id_wo;
    }

    /**
     * Set idEx
     *
     * @param integer $idEx
     *
     * @return WorkoutsExercises
     */
    public function setIdEx($idEx)
    {
        $this->id_ex = $idEx;

        return $this;
    }

    /**
     * Get idEx
     *
     * @return integer
     */
    public function getIdEx()
    {
        return $this->id_ex;
    }

    /**
     * Set numbers
     *
     * @param integer $numbers
     *
     * @return WorkoutsExercises
     */
    public function setNumbers($numbers)
    {
        $this->_numbers = $numbers;

        return $this;
    }

    /**
     * Get numbers
     *
     * @return integer
     */
    public function getNumbers()
    {
        return $this->_numbers;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return WorkoutsExercises
     */
    public function setNotes($notes)
    {
        $this->_notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->_notes;
    }

    /**
     * Set sets
     *
     * @param integer $sets
     *
     * @return WorkoutsExercises
     */
    public function setSets($sets)
    {
        $this->_sets = $sets;

        return $this;
    }

    /**
     * Get sets
     *
     * @return integer
     */
    public function getSets()
    {
        return $this->_sets;
    }
}
