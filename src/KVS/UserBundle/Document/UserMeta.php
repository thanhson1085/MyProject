<?php

namespace KVS\UserBundle\Document;



/**
 * KVS\UserBundle\Document\UserMeta
 */
class UserMeta
{
    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var MongoId $uid
     */
    protected $uid;

    /**
     * @var string $address
     */
    protected $address;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get uid
     *
     * @return id $uid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set address
     *
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * Get address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }
}