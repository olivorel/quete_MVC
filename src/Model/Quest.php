<?php
/**
 * Created by PhpStorm.
 * User: wilder14
 * Date: 19/10/17
 * Time: 10:26
 */

namespace MVC\Model;


class Quest
{
    private $id;
    private $name;
    private $course;
    private $score;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Quest
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Quest
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param mixed $course
     * @return Quest
     */
    public function setCourse($course)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * @param mixed $score
     * @return Quest
     */
    public function setScore($score)
    {
        $this->score = $score;
        return $this;
    }

    public function hydrate(array $donnees)
    {

         if (isset($donnees['id'])) {
            $this->setId($donnees['id']);
         }
         if (isset($donnees['name'])) {
         $this->setName($donnees['name']);
         }
        if (isset($donnees['course'])) {
            $this->setCourse($donnees['couse']);
        }
        if (isset($donnees['score'])) {
            $this->setScore($donnees['score']);
        }
    }
}