<?php

namespace TVGuide\ListingsBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use TVGuide\ListingsBundle\RegionChannelName;
/**
 * Channels
 */
class Channels
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $channelNumber;

    /**
     * @var string
     */
    private $channelName;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $package;

    /**
     *
     * @ORM\OneToMany(targetEntity="RegionChannelName", inversedBy="channels")
     * @ORM\JoinColumn(name="channelId", referencedColumnName="id")
     */
    private $regionchannelname;
    
    public function __construct()  { 
        $this->regionchannelname = new \Doctrine\Common\Collections\ArrayCollection();
        
    }
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
     * Set channelNumber
     *
     * @param integer $channelNumber
     * @return Channels
     */
    public function setChannelNumber($channelNumber)
    {
        $this->channelNumber = $channelNumber;

        return $this;
    }

    /**
     * Get channelNumber
     *
     * @return integer 
     */
    public function getChannelNumber()
    {
        return $this->channelNumber;
    }

    /**
     * Set channelName
     *
     * @param string $channelName
     * @return Channels
     */
    public function setChannelName($channelName)
    {
        $this->regionName = $channelName;

        return $this;
    }

    /**
     * Get channelName
     *
     * @return string 
     */
    public function getRegionName()
    {
        return $this->regionName;
    }

    /**
     * Set region
     *
     * @param string $region
     * @return Channels
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set package
     *
     * @param string $package
     * @return Channels
     */
    public function setPackage($package)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Get package
     *
     * @return string 
     */
    public function getPackage()
    {
        return $this->package;
    }
}
