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
 * Class Playlist
 *
 * Data Transfer Object for Dailymotion playlist object
 *
 * @author Alexey Samara <lion.samara@gmail.com>
 * @package WowApps\DailymotionBundle\DTO
 */
class Playlist
{
    /**
     * Date and time when this playlist was created.
     * Field: created_time
     * Scope: public
     * Sample value: 1287507036
     *
     * @var int
     */
    private $createdTime;

    /**
     * Comprehensive description of this playlist.
     * Field: description
     * Scope: public
     * Sample value: "Check out the top 10 best goals of this year's championship!"
     *
     * @var string
     */
    private $description;

    /**
     * Unique object identifier (unique among all playlists)
     * Field: id
     * Scope: public
     * Sample value: "xnpe9fx"
     *
     * @var string
     */
    private $id;

    /**
     * Graph type of this object (hopefully playlist)
     * Field: item_type
     * Scope: public
     * Sample value: "playlist"
     *
     * @var string
     */
    private $itemType;

    /**
     * Short descriptive name of this playlist.
     * Field: name
     * Scope: public
     * Sample value: "Best goals of the championship"
     *
     * @var string
     */
    private $name;

    /**
     * Author of this playlist. You can retrieve sub-fields of this user object using the dot-notation (e.g.: owner.id)
     * Field: owner
     * Scope: public
     * Sample value: "x6npnlk"
     *
     * @var User|null
     */
    private $owner;

    /**
     * URL of this playlist's first video's thumbnail image (60px height).
     * Field: thumbnail_60_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x60-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail60Url;

    /**
     * URL of this playlist's first video's thumbnail image (120px height).
     * Field: thumbnail_120_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x120-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail120Url;

    /**
     * URL of this playlist's first video's thumbnail image (180px height).
     * Field: thumbnail_180_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x180-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail180Url;

    /**
     * URL of this playlist's first video's thumbnail image (240px height).
     * Field: thumbnail_240_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x240-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail240Url;

    /**
     * URL of this playlist's first video's thumbnail image (360px height).
     * Field: thumbnail_360_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x360-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail360Url;

    /**
     * URL of this playlist's first video's thumbnail image (480px height).
     * Field: thumbnail_480_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x480-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail480Url;

    /**
     * URL of this playlist's first video's thumbnail image (720px height).
     * Field: thumbnail_720_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x720-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail720Url;

    /**
     * URL of this playlist's first video's thumbnail image (1080px height).
     * Field: thumbnail_1080_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x1080-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail1080Url;

    /**
     * URL of the thumbnail of this playlist's first video (raw, respecting full size ratio).
     * Field: thumbnail_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/CTrg1.jpg"
     *
     * @var string
     */
    private $thumbnailUrl;

    /**
     * Date and time when this playlist was last updated.
     * Field: updated_time
     * Scope: public
     * Sample value: 1404129540
     *
     * @var int|null
     */
    private $updatedTime;

    /**
     * Total amount of videos in this playlist.
     * Field: videos_total
     * Scope: public
     * Sample value: 14
     *
     * @var int
     */
    private $videosTotal;

    /**
     * @return int
     */
    public function getCreatedTime(): int
    {
        return $this->createdTime;
    }

    /**
     * @param int $createdTime
     * @return Playlist
     */
    public function setCreatedTime(int $createdTime): Playlist
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
     * @return Playlist
     */
    public function setDescription(string $description): Playlist
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
     * @return Playlist
     */
    public function setId(string $id): Playlist
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
     * @return Playlist
     */
    public function setItemType(string $itemType): Playlist
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
     * @return Playlist
     */
    public function setName(string $name): Playlist
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return null|User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param null|User $owner
     * @return Playlist
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail60Url(): string
    {
        return $this->thumbnail60Url;
    }

    /**
     * @param string $thumbnail60Url
     * @return Playlist
     */
    public function setThumbnail60Url(string $thumbnail60Url): Playlist
    {
        $this->thumbnail60Url = $thumbnail60Url;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail120Url(): string
    {
        return $this->thumbnail120Url;
    }

    /**
     * @param string $thumbnail120Url
     * @return Playlist
     */
    public function setThumbnail120Url(string $thumbnail120Url): Playlist
    {
        $this->thumbnail120Url = $thumbnail120Url;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail180Url(): string
    {
        return $this->thumbnail180Url;
    }

    /**
     * @param string $thumbnail180Url
     * @return Playlist
     */
    public function setThumbnail180Url(string $thumbnail180Url): Playlist
    {
        $this->thumbnail180Url = $thumbnail180Url;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail240Url(): string
    {
        return $this->thumbnail240Url;
    }

    /**
     * @param string $thumbnail240Url
     * @return Playlist
     */
    public function setThumbnail240Url(string $thumbnail240Url): Playlist
    {
        $this->thumbnail240Url = $thumbnail240Url;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail360Url(): string
    {
        return $this->thumbnail360Url;
    }

    /**
     * @param string $thumbnail360Url
     * @return Playlist
     */
    public function setThumbnail360Url(string $thumbnail360Url): Playlist
    {
        $this->thumbnail360Url = $thumbnail360Url;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail480Url(): string
    {
        return $this->thumbnail480Url;
    }

    /**
     * @param string $thumbnail480Url
     * @return Playlist
     */
    public function setThumbnail480Url(string $thumbnail480Url): Playlist
    {
        $this->thumbnail480Url = $thumbnail480Url;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail720Url(): string
    {
        return $this->thumbnail720Url;
    }

    /**
     * @param string $thumbnail720Url
     * @return Playlist
     */
    public function setThumbnail720Url(string $thumbnail720Url): Playlist
    {
        $this->thumbnail720Url = $thumbnail720Url;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail1080Url(): string
    {
        return $this->thumbnail1080Url;
    }

    /**
     * @param string $thumbnail1080Url
     * @return Playlist
     */
    public function setThumbnail1080Url(string $thumbnail1080Url): Playlist
    {
        $this->thumbnail1080Url = $thumbnail1080Url;
        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    /**
     * @param string $thumbnailUrl
     * @return Playlist
     */
    public function setThumbnailUrl(string $thumbnailUrl): Playlist
    {
        $this->thumbnailUrl = $thumbnailUrl;
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
     * @return Playlist
     */
    public function setUpdatedTime($updatedTime)
    {
        $this->updatedTime = $updatedTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getVideosTotal(): int
    {
        return $this->videosTotal;
    }

    /**
     * @param int $videosTotal
     * @return Playlist
     */
    public function setVideosTotal(int $videosTotal): Playlist
    {
        $this->videosTotal = $videosTotal;
        return $this;
    }
}
