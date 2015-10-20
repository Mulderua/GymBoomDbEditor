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
     * @ORM\OneToOne(targetEntity="Exercises", mappedBy="WorkoutsExercises")
     * @ORM\JoinColumn(name="id_ex", referencedColumnName="_id")
     */
    protected $exercises;

    /**
     * @ORM\OneToMany(targetEntity="Sets", mappedBy="WorkoutsExercises")
     * @ORM\JoinColumn(name="_id", referencedColumnName="_id_wo_ex")
     */
    protected $sets;


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
     * Set name
     *
     * @param \GymBundle\Entity\Exercises $name
     *
     * @return WorkoutsExercises
     */
    public function setName(\GymBundle\Entity\Exercises $name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return \GymBundle\Entity\Exercises
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set names
     *
     * @param string $names
     *
     * @return WorkoutsExercises
     */
    public function setNames($names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * Get names
     *
     * @return string
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Set exercises
     *
     * @param \GymBundle\Entity\Exercises $exercises
     *
     * @return WorkoutsExercises
     */
    public function setExercises(\GymBundle\Entity\Exercises $exercises = null)
    {
        $this->exercises = $exercises;

        return $this;
    }

    /**
     * Get exercises
     *
     * @return \GymBundle\Entity\Exercises
     */
    public function getExercises()
    {
        return $this->exercises;
    }

    public function getExercisesNames() {
        return $this->getExercises()->getNames();
    }

    public function getExercisesComments() {
        return $this->getExercises()->getComments();;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sets = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add set
     *
     * @param \GymBundle\Entity\Sets $set
     *
     * @return WorkoutsExercises
     */
    public function addSet(\GymBundle\Entity\Sets $set)
    {
        $this->sets[] = $set;

        return $this;
    }

    /**
     * Remove set
     *
     * @param \GymBundle\Entity\Sets $set
     */
    public function removeSet(\GymBundle\Entity\Sets $set)
    {
        $this->sets->removeElement($set);
    }

    /**
     * Get sets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSets()
    {
        return $this->sets;
    }
}
