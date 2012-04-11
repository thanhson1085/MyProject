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
     * @var string $address
     */
    protected $address;

    /**
     * @var string $mobile
     */
    protected $mobile;

    /**
     * @var string $company
     */
    protected $company;

    /**
     * @var string $position
     */
    protected $position;


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

    /**
     * Set mobile
     *
     * @param string $mobile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * Get mobile
     *
     * @return string $mobile
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set company
     *
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * Get company
     *
     * @return string $company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set position
     *
     * @param string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * Get position
     *
     * @return string $position
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * @var KVS\UserBundle\Document\User
     */
    protected $user;


    /**
     * Set user
     *
     * @param KVS\UserBundle\Document\User $user
     */
    public function setUser(\KVS\UserBundle\Document\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return KVS\UserBundle\Document\User $user
     */
    public function getUser()
    {
        return $this->user;
    }
}
