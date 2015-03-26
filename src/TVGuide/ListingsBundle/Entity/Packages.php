<?php

namespace TVGuide\ListingsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Packages
 */
class Packages
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $packageName;


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
     * Set packageName
     *
     * @param string $packageName
     * @return Packages
     */
    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;

        return $this;
    }

    /**
     * Get packageName
     *
     * @return string 
     */
    public function getPackageName()
    {
        return $this->packageName;
    }
}
