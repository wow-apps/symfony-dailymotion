<?php
/**
 * This file is part of the WoW-Apps/Symfony-Dailymotion bundle for Symfony 3
 * https://github.com/wow-apps/symfony-dailymotion
 *
 * (c) 2017 WoW-Apps
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WowApps\DailymotionBundle\DTO;

/**
 * Class Channel
 *
 * Data Transfer Object for Dailymotion user object
 *
 * @author Alexey Samara <lion.samara@gmail.com>
 * @package WowApps\DailymotionBundle\DTO
 */
class Channel
{
    /**
     * Date and time when this channel was created.
     * Field: created_time
     * Scope: public
     * Sample value: 1287507036
     *
     * @var int
     */
    private $createdTime;

    /**
     * Comprehensive localized description of this channel.
     * Field: description
     * Scope: public
     * Sample value: "Everything about video-games!"
     *
     * @var string
     */
    private $description;

    /**
     * Unique object identifier (unique among all channels)
     * Field: id
     * Scope: public
     * Sample value: "xyx4qhs"
     *
     * @var string
     */
    private $id;

    /**
     * Graph type of this object (hopefully channel)
     * Field: item_type
     * Scope: public
     * Sample value: "channel"
     *
     * @var string
     */
    private $itemType;

    /**
     * Localized short name of this channel.
     * Field: name
     * Scope: public
     * Sample value: "Video Games"
     *
     * @var string
     */
    private $name;

    /**
     * Slug name of this channel.
     * Field: slug
     * Scope: public
     * Sample value: "video-games"
     *
     * @var string
     */
    private $slug;

    /**
     * Date and time when this channel was last updated.
     * Field: updated_time
     * Scope: public
     * Sample value: 1404129540
     *
     * @var int|null
     */
    private $updatedTime;

    /**
     * @return int
     */
    public function getCreatedTime(): int
    {
        return $this->createdTime;
    }

    /**
     * @param int $createdTime
     * @return Channel
     */
    public function setCreatedTime(int $createdTime): Channel
    {
        $this->createdTime = $createdTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Channel
     */
    public function setDescription(string $description): Channel
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Channel
     */
    public function setId(string $id): Channel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemType(): string
    {
        return $this->itemType;
    }

    /**
     * @param string $itemType
     * @return Channel
     */
    public function setItemType(string $itemType): Channel
    {
        $this->itemType = $itemType;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Channel
     */
    public function setName(string $name): Channel
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return Channel
     */
    public function setSlug(string $slug): Channel
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getUpdatedTime()
    {
        return $this->updatedTime;
    }

    /**
     * @param int|null $updatedTime
     * @return Channel
     */
    public function setUpdatedTime($updatedTime)
    {
        $this->updatedTime = $updatedTime;
        return $this;
    }
}
