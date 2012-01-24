<?php

namespace Gedmo\Translatable\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\GeneratedValue;

/**
 * Gedmo\Translatable\Entity\AbstractPersonalTranslation
 *
 * @MappedSuperclass
 */
abstract class AbstractPersonalTranslation
{
    /**
     * @var integer $id
     *
     * @Column(type="integer")
     * @Id
     * @GeneratedValue
     */
    protected $id;

    /**
     * @var string $locale
     *
     * @Column(type="string", length=8)
     */
    protected $locale;

    /**
     * @var string $field
     *
     * @Column(type="string", length=32)
     */
    protected $field;

    /**
     * Related entity with ManyToOne relation
     * must be mapped by user
     */
    protected $object;

    /**
     * @var text $content
     *
     * @Column(type="text", nullable=true)
     */
    protected $content;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set locale
     *
     * @param string $locale
     * @return AbstractTranslation
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return string $locale
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set field
     *
     * @param string $field
     * @return AbstractTranslation
     */
    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * Get field
     *
     * @return string $field
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set object related
     *
     * @param string $object
     * @return AbstractTranslation
     */
    public function setObject($object)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * Get related object
     *
     * @return object $object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return AbstractTranslation
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get content
     *
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }
}