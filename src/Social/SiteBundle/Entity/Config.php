<?php

namespace Social\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="config_local")
 */
class Config 
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** 
     * @var string
     * @ORM\Column(name="conf_key", type="string", length=50)
     */
    protected $key;

    /** 
     * @var string
     * @ORM\Column(name="conf_val", type="string", length=255)
     */
    protected $val;

    /** 
     * @var string
     * @ORM\Column(name="conf_val_type", type="string", length=255)
     */
    protected $val_type;

    /** 
     * @var string
     * @ORM\Column(name="updated_at", type="datetime")
     */
    protected $updated_at;




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
     * Set key
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * Get key
     *
     * @return string 
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set val
     *
     * @param string $val
     */
    public function setVal($val)
    {
        $this->val = $val;
    }

    /**
     * Get val
     *
     * @return string 
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Set val_type
     *
     * @param string $valType
     */
    public function setValType($valType)
    {
        $this->val_type = $valType;
    }

    /**
     * Get val_type
     *
     * @return string 
     */
    public function getValType()
    {
        return $this->val_type;
    }

    /**
     * Set updated_at
     *
     * @param date $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    }

    /**
     * Get updated_at
     *
     * @return date 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
}
