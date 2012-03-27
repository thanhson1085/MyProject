<?php

namespace KVS\PostBundle\Document;



/**
 * KVS\PostBundle\Document\Posts
 */
class Posts
{
    /**
     * @var MongoId $id
     */
    protected $id;

    /**
     * @var int $postAuthor
     */
    protected $postAuthor;

    /**
     * @var timestamp $postDate
     */
    protected $postDate;

    /**
     * @var timestamp $postDateGmt
     */
    protected $postDateGmt;

    /**
     * @var string $postContent
     */
    protected $postContent;

    /**
     * @var string $postTitle
     */
    protected $postTitle;

    /**
     * @var string $postExcerpt
     */
    protected $postExcerpt;

    /**
     * @var string $postStatus
     */
    protected $postStatus;

    /**
     * @var string $commentStatus
     */
    protected $commentStatus;

    /**
     * @var string $pingStatus
     */
    protected $pingStatus;

    /**
     * @var string $postPassword
     */
    protected $postPassword;

    /**
     * @var string $postName
     */
    protected $postName;

    /**
     * @var string $toPing
     */
    protected $toPing;

    /**
     * @var string $pinged
     */
    protected $pinged;

    /**
     * @var timestamp $postModified
     */
    protected $postModified;

    /**
     * @var timestamp $postModifiedGmt
     */
    protected $postModifiedGmt;

    /**
     * @var string $postContentFiltered
     */
    protected $postContentFiltered;

    /**
     * @var int $postParent
     */
    protected $postParent;

    /**
     * @var string $guid
     */
    protected $guid;

    /**
     * @var int $menuOrder
     */
    protected $menuOrder;

    /**
     * @var string $postType
     */
    protected $postType;

    /**
     * @var string $postMimeType
     */
    protected $postMimeType;

    /**
     * @var int $commentCount
     */
    protected $commentCount;


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
     * Set postAuthor
     *
     * @param int $postAuthor
     */
    public function setPostAuthor($postAuthor)
    {
        $this->postAuthor = $postAuthor;
    }

    /**
     * Get postAuthor
     *
     * @return int $postAuthor
     */
    public function getPostAuthor()
    {
        return $this->postAuthor;
    }

    /**
     * Set postDate
     *
     * @param timestamp $postDate
     */
    public function setPostDate($postDate)
    {
        $this->postDate = $postDate;
    }

    /**
     * Get postDate
     *
     * @return timestamp $postDate
     */
    public function getPostDate()
    {
        return $this->postDate;
    }

    /**
     * Set postDateGmt
     *
     * @param timestamp $postDateGmt
     */
    public function setPostDateGmt($postDateGmt)
    {
        $this->postDateGmt = $postDateGmt;
    }

    /**
     * Get postDateGmt
     *
     * @return timestamp $postDateGmt
     */
    public function getPostDateGmt()
    {
        return $this->postDateGmt;
    }

    /**
     * Set postContent
     *
     * @param string $postContent
     */
    public function setPostContent($postContent)
    {
        $this->postContent = $postContent;
    }

    /**
     * Get postContent
     *
     * @return string $postContent
     */
    public function getPostContent()
    {
        return $this->postContent;
    }

    /**
     * Set postTitle
     *
     * @param string $postTitle
     */
    public function setPostTitle($postTitle)
    {
        $this->postTitle = $postTitle;
    }

    /**
     * Get postTitle
     *
     * @return string $postTitle
     */
    public function getPostTitle()
    {
        return $this->postTitle;
    }

    /**
     * Set postExcerpt
     *
     * @param string $postExcerpt
     */
    public function setPostExcerpt($postExcerpt)
    {
        $this->postExcerpt = $postExcerpt;
    }

    /**
     * Get postExcerpt
     *
     * @return string $postExcerpt
     */
    public function getPostExcerpt()
    {
        return $this->postExcerpt;
    }

    /**
     * Set postStatus
     *
     * @param string $postStatus
     */
    public function setPostStatus($postStatus)
    {
        $this->postStatus = $postStatus;
    }

    /**
     * Get postStatus
     *
     * @return string $postStatus
     */
    public function getPostStatus()
    {
        return $this->postStatus;
    }

    /**
     * Set commentStatus
     *
     * @param string $commentStatus
     */
    public function setCommentStatus($commentStatus)
    {
        $this->commentStatus = $commentStatus;
    }

    /**
     * Get commentStatus
     *
     * @return string $commentStatus
     */
    public function getCommentStatus()
    {
        return $this->commentStatus;
    }

    /**
     * Set pingStatus
     *
     * @param string $pingStatus
     */
    public function setPingStatus($pingStatus)
    {
        $this->pingStatus = $pingStatus;
    }

    /**
     * Get pingStatus
     *
     * @return string $pingStatus
     */
    public function getPingStatus()
    {
        return $this->pingStatus;
    }

    /**
     * Set postPassword
     *
     * @param string $postPassword
     */
    public function setPostPassword($postPassword)
    {
        $this->postPassword = $postPassword;
    }

    /**
     * Get postPassword
     *
     * @return string $postPassword
     */
    public function getPostPassword()
    {
        return $this->postPassword;
    }

    /**
     * Set postName
     *
     * @param string $postName
     */
    public function setPostName($postName)
    {
        $this->postName = $postName;
    }

    /**
     * Get postName
     *
     * @return string $postName
     */
    public function getPostName()
    {
        return $this->postName;
    }

    /**
     * Set toPing
     *
     * @param string $toPing
     */
    public function setToPing($toPing)
    {
        $this->toPing = $toPing;
    }

    /**
     * Get toPing
     *
     * @return string $toPing
     */
    public function getToPing()
    {
        return $this->toPing;
    }

    /**
     * Set pinged
     *
     * @param string $pinged
     */
    public function setPinged($pinged)
    {
        $this->pinged = $pinged;
    }

    /**
     * Get pinged
     *
     * @return string $pinged
     */
    public function getPinged()
    {
        return $this->pinged;
    }

    /**
     * Set postModified
     *
     * @param timestamp $postModified
     */
    public function setPostModified($postModified)
    {
        $this->postModified = $postModified;
    }

    /**
     * Get postModified
     *
     * @return timestamp $postModified
     */
    public function getPostModified()
    {
        return $this->postModified;
    }

    /**
     * Set postModifiedGmt
     *
     * @param timestamp $postModifiedGmt
     */
    public function setPostModifiedGmt($postModifiedGmt)
    {
        $this->postModifiedGmt = $postModifiedGmt;
    }

    /**
     * Get postModifiedGmt
     *
     * @return timestamp $postModifiedGmt
     */
    public function getPostModifiedGmt()
    {
        return $this->postModifiedGmt;
    }

    /**
     * Set postContentFiltered
     *
     * @param string $postContentFiltered
     */
    public function setPostContentFiltered($postContentFiltered)
    {
        $this->postContentFiltered = $postContentFiltered;
    }

    /**
     * Get postContentFiltered
     *
     * @return string $postContentFiltered
     */
    public function getPostContentFiltered()
    {
        return $this->postContentFiltered;
    }

    /**
     * Set postParent
     *
     * @param int $postParent
     */
    public function setPostParent($postParent)
    {
        $this->postParent = $postParent;
    }

    /**
     * Get postParent
     *
     * @return int $postParent
     */
    public function getPostParent()
    {
        return $this->postParent;
    }

    /**
     * Set guid
     *
     * @param string $guid
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
    }

    /**
     * Get guid
     *
     * @return string $guid
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set menuOrder
     *
     * @param int $menuOrder
     */
    public function setMenuOrder($menuOrder)
    {
        $this->menuOrder = $menuOrder;
    }

    /**
     * Get menuOrder
     *
     * @return int $menuOrder
     */
    public function getMenuOrder()
    {
        return $this->menuOrder;
    }

    /**
     * Set postType
     *
     * @param string $postType
     */
    public function setPostType($postType)
    {
        $this->postType = $postType;
    }

    /**
     * Get postType
     *
     * @return string $postType
     */
    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * Set postMimeType
     *
     * @param string $postMimeType
     */
    public function setPostMimeType($postMimeType)
    {
        $this->postMimeType = $postMimeType;
    }

    /**
     * Get postMimeType
     *
     * @return string $postMimeType
     */
    public function getPostMimeType()
    {
        return $this->postMimeType;
    }

    /**
     * Set commentCount
     *
     * @param int $commentCount
     */
    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    }

    /**
     * Get commentCount
     *
     * @return int $commentCount
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }
}