<?php

namespace TVGuide\ListingsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegionChannelName
 */
class RegionChannelName
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $regionId;

    /**
     * @var integer
     */
    private $channelId;

    /**
     * @var string
     */
    private $channelName;

    /**
      * @ORM\OneToMany(targetEntity="Channels", mappedBy="regionchannelname")
     */
        protected $channels;

    public function __construct() {
        $this->channels = new ArrayCollection();
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
     * Set regionId
     *
     * @param integer $regionId
     * @return RegionChannelName
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;

        return $this;
    }

    /**
     * Get regionId
     *
     * @return integer 
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * Set channelId
     *
     * @param integer $channelId
     * @return RegionChannelName
     */
    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * Get channelId
     *
     * @return integer 
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * Set channelName
     *
     * @param string $channelName
     * @return RegionChannelName
     */
    public function setChannelName($channelName)
    {
        $this->channelName = $channelName;

        return $this;
    }

    /**
     * Get channelName
     *
     * @return string 
     */
    public function getChannelName()
    {
        return $this->channelName;
    }
}
