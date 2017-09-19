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
 * Class Subtitle
 *
 * Data Transfer Object for Dailymotion subtitle object
 *
 * @author Alexey Samara <lion.samara@gmail.com>
 * @package WowApps\DailymotionBundle\DTO
 */
class Subtitle
{
    /**
     * Unique object identifier (unique among all subtitles)
     * Field: id
     * Scope: public
     * Sample value: "xya1med"
     *
     * @var string
     */
    private $id;

    /**
     * Graph type of this object (hopefully subtitle)
     * Field: item_type
     * Scope: public
     * Sample value: "subtitle"
     *
     * @var string
     */
    private $itemType;

    /**
     * Language of these subtitles.
     * Field: language
     * Scope: public
     * Sample value: "en"
     *
     * @var string
     */
    private $language;

    /**
     * Subtitles's language in its own language.
     * Field: language_label
     * Scope: public
     * Sample value: "Fran\u00e7ais"
     *
     * @var string
     */
    private $languageLabel;

    /**
     * On GET, the URL pointing to the latest version of the subtitles. On POST, URL pointing to the subtitle data
     * in on of the valid formats. You don't need to host the file, you can use the GET /file/upload API ressource
     * to create a temporary URL to a file of your own, just like when you upload a video source file.
     * If you host your own file, the file will be fetched and the subtitles URL will point to a local copy.
     * Field: url
     * Scope: public
     * Sample value: "http:\/\/static2.dmcdn.net\/static\/video\/354\/170\/120453:subtitle_en.srt?22"
     * @var string
     */
    private $url;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Subtitle
     */
    public function setId(string $id): Subtitle
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
     * @return Subtitle
     */
    public function setItemType(string $itemType): Subtitle
    {
        $this->itemType = $itemType;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return Subtitle
     */
    public function setLanguage(string $language): Subtitle
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageLabel(): string
    {
        return $this->languageLabel;
    }

    /**
     * @param string $languageLabel
     * @return Subtitle
     */
    public function setLanguageLabel(string $languageLabel): Subtitle
    {
        $this->languageLabel = $languageLabel;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Subtitle
     */
    public function setUrl(string $url): Subtitle
    {
        $this->url = $url;
        return $this;
    }
}
