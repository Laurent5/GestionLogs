<?php

namespace pass\GestionLogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Test
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="interger", type="integer")
     */
    private $interger;

    /**
     * @var string
     *
     * @ORM\Column(name="test", type="string", length=255)
     */
    private $test;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set interger
     *
     * @param integer $interger
     * @return Test
     */
    public function setInterger($interger)
    {
        $this->interger = $interger;

        return $this;
    }

    /**
     * Get interger
     *
     * @return integer 
     */
    public function getInterger()
    {
        return $this->interger;
    }

    /**
     * Set test
     *
     * @param string $test
     * @return Test
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return string 
     */
    public function getTest()
    {
        return $this->test;
    }
}
