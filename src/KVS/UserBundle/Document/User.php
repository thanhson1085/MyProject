<?php

namespace KVS\UserBundle\Document;


use FOS\UserBundle\Document\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * KVS\UserBundle\Document\User
 */
class User extends BaseUser
{
    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var KVS\UserBundle\Document\UserMeta
     */
    protected $usermeta;


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
     * Set usermeta
     *
     * @param KVS\UserBundle\Document\UserMeta $usermeta
     */
    public function setUsermeta(\KVS\UserBundle\Document\UserMeta $usermeta)
    {
        $this->usermeta = $usermeta;
    }

    /**
     * Get usermeta
     *
     * @return KVS\UserBundle\Document\UserMeta $usermeta
     */
    public function getUsermeta()
    {
        return $this->usermeta;
    }
}
