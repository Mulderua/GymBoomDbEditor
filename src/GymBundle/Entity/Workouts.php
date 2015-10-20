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
 * @ORM\Table(name="workouts")
 */
class Workouts
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
    protected $_dates;

    /**
     * @ORM\Column(type="integer")
     */
    protected $_times;

    /**
     * @ORM\Column(type="text")
     */
    protected $_comments;

    /**
     * @ORM\Column(type="integer")
     */
    protected $_finished;

    /**
     * @ORM\Column(type="text")
     */
    protected $_names;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Workouts
     */
    public function setId($id)
    {
        $this->_id = $id;

        return $this;
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
     * Set dates
     *
     * @param integer $dates
     *
     * @return Workouts
     */
    public function setDates($dates)
    {
        $this->_dates = $dates;

        return $this;
    }

    /**
     * Get dates
     *
     * @return integer
     */
    public function getDates()
    {
        return $this->_dates;
    }

    /**
     * Set times
     *
     * @param integer $times
     *
     * @return Workouts
     */
    public function setTimes($times)
    {
        $this->_times = $times;

        return $this;
    }

    /**
     * Get times
     *
     * @return integer
     */
    public function getTimes()
    {
        return $this->_times;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return Workouts
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
     * Set finished
     *
     * @param integer $finished
     *
     * @return Workouts
     */
    public function setFinished($finished)
    {
        $this->_finished = $finished;

        return $this;
    }

    /**
     * Get finished
     *
     * @return integer
     */
    public function getFinished()
    {
        return $this->_finished;
    }

    /**
     * Set names
     *
     * @param string $names
     *
     * @return Workouts
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

    public function getDay() {

          return $this->getId() . " "
          . date("Y-m-d H:i:s", substr($this->getDates(), 0, -3)) . " "
          . $this->getNames() . " "
          . $this->getComments();
    }

    public function getDateFormat() {
        return date("Y-m-d", substr($this->getDates(), 0, -3));
    }
}
