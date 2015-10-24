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
 * @ORM\Table(name="sets")
 */
class Sets
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    protected $_id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $_id_wo_ex;

    /**
     * @ORM\Column(type="integer")
     */
    protected $_numbers;

    /**
     * @ORM\Column(type="integer")
     */
    protected $_dones;

    /**
     * @ORM\Column(type="text")
     */
    protected $_comments;

    /**
     * @ORM\OneToMany(targetEntity="WorkoutsExercises", mappedBy="Sets")
     */
    protected $workoutsExercises;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->workoutsExercises = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Get id
     *
     * @return integer
     */
    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }


        /**
     * Set idWoEx
     *
     * @param integer $idWoEx
     *
     * @return Sets
     */
    public function setIdWoEx($idWoEx)
    {
        $this->_id_wo_ex = $idWoEx;

        return $this;
    }

    /**
     * Get idWoEx
     *
     * @return integer
     */
    public function getIdWoEx()
    {
        return $this->_id_wo_ex;
    }

    /**
     * Set numbers
     *
     * @param integer $numbers
     *
     * @return Sets
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
     * Set dones
     *
     * @param integer $dones
     *
     * @return Sets
     */
    public function setDones($dones)
    {
        $this->_dones = $dones;

        return $this;
    }

    /**
     * Get dones
     *
     * @return integer
     */
    public function getDones()
    {
        return $this->_dones;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Sets
     */
    public function setComments($comments)
    {
        $this->_comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->_comments;
    }

    /**
     * Add workoutsExercise
     *
     * @param \GymBundle\Entity\WorkoutsExercises $workoutsExercise
     *
     * @return Sets
     */
    public function addWorkoutsExercise(\GymBundle\Entity\WorkoutsExercises $workoutsExercise)
    {
        $this->workoutsExercises[] = $workoutsExercise;

        return $this;
    }

    /**
     * Remove workoutsExercise
     *
     * @param \GymBundle\Entity\WorkoutsExercises $workoutsExercise
     */
    public function removeWorkoutsExercise(\GymBundle\Entity\WorkoutsExercises $workoutsExercise)
    {
        $this->workoutsExercises->removeElement($workoutsExercise);
    }

    /**
     * Get workoutsExercises
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWorkoutsExercises()
    {
        return $this->workoutsExercises;
    }

    /**
     * Set workoutsExercises
     *
     * @param \GymBundle\Entity\WorkoutsExercises $workoutsExercises
     *
     * @return Sets
     */
    public function setWorkoutsExercises(\GymBundle\Entity\WorkoutsExercises $workoutsExercises = null)
    {
        $this->workoutsExercises = $workoutsExercises;

        return $this;
    }
}
