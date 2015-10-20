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
 * @ORM\Table(name="exercises")
 */
class Exercises
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
    protected $_comments;

    /**
     * @ORM\Column(type="integer")
     */
    protected $id_gr;

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
     * @return Exercises
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
     * Set comments
     *
     * @param string $comments
     *
     * @return Exercises
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
     * Set idGr
     *
     * @param integer $idGr
     *
     * @return Exercises
     */
    public function setIdGr($idGr)
    {
        $this->id_gr = $idGr;

        return $this;
    }

    /**
     * Get idGr
     *
     * @return integer
     */
    public function getIdGr()
    {
        return $this->id_gr;
    }
}
