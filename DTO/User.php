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
 * Class User
 *
 * Data Transfer Object for Dailymotion user object
 *
 * @author Alexey Samara <lion.samara@gmail.com>
 * @package WowApps\DailymotionBundle\DTO
 */
class User
{
    /**
     * Force user account active.
     * Field: active
     * Scope: public
     * Sample value: "y"
     * allowed values: y, n
     *
     * @var string|null
     */
    private $active;

    /**
     * Postal address of this user.
     * Field: address
     * Scope: private
     * Sample value: "715 5th Avenue"
     *
     * @var string|null
     */
    private $address;

    /**
     * URL of this user's avatar image (25px wide square).
     * Field: avatar_25_url
     * Scope: public
     * Sample value: "http:\/\/s1.dmcdn.net\/AVM\/25x25--w1.png"
     *
     * @var string|null
     */
    private $avatar25Url;

    /**
     * URL of this user's avatar image (60px wide square).
     * Field: avatar_60_url
     * Scope: public
     * Sample value: "http:\/\/s1.dmcdn.net\/AVM\/60x60-As1.png"
     *
     * @var string|null
     */
    private $avatar60Url;

    /**
     * URL of this user's avatar image (80px wide square).
     * Field: avatar_80_url
     * Scope: public
     * Sample value: "http:\/\/s1.dmcdn.net\/AVM\/80x80-Rf1.png"
     *
     * @var string|null
     */
    private $avatar80Url;

    /**
     * URL of this user's avatar image (120px wide square).
     * Field: avatar_120_url
     * Scope: public
     * Sample value: "http:\/\/s1.dmcdn.net\/AVM\/120x120-bn1.png"
     *
     * @var string|null
     */
    private $avatar120Url;

    /**
     * URL of this user's avatar image (190px wide square).
     * Field: avatar_190_url
     * Scope: public
     * Sample value: "http:\/\/s1.dmcdn.net\/AVM\/190x190-ma1.png"
     *
     * @var string|null
     */
    private $avatar190Url;

    /**
     * URL of this user's avatar image (240px wide square).
     * Field: avatar_240_url
     * Scope: public
     * Sample value: "http:\/\/s1.dmcdn.net\/AVM\/240x240-sU1.png"
     *
     * @var string|null
     */
    private $avatar240Url;

    /**
     * URL of this user's avatar image (360px wide square).
     * Field: avatar_360_url
     * Scope: public
     * Sample value: "http:\/\/s1.dmcdn.net\/AVM\/360x360-PM1.png"
     *
     * @var string|null
     */
    private $avatar360Url;

    /**
     * URL of this user's avatar image (480px wide square).
     * Field: avatar_480_url
     * Scope: public
     * Sample value: "http:\/\/s1.dmcdn.net\/AVM\/480x480-CD1.png"
     *
     * @var string|null
     */
    private $avatar480Url;

    /**
     * URL of this user's avatar image (720px wide square).
     * Field: avatar_720_url
     * Scope: public
     * Sample value: "http:\/\/s1.dmcdn.net\/AVM\/720x720-Gr1.png"
     *
     * @var string|null
     */
    private $avatar720Url;

    /**
     * URL of an image to change this user's avatar.
     * Field: avatar_url
     * Scope: private
     * Sample value: "http:\/\/www.example.org"
     *
     * @var string|null
     */
    private $avatarUrl;

    /**
     * Birthday date of this user.
     * Field: birthday
     * Scope: private
     * Sample value: 532652400
     *
     * @var int|null
     */
    private $birthday;

    /**
     * Total number of user children.
     * Field: children_total
     * Scope: public
     * Sample value: 10
     *
     * @var int
     */
    private $childrenTotal;

    /**
     * City of residence of this user.
     * Field: city
     * Scope: public
     * Sample value: "New York City"
     *
     * @var string|null
     */
    private $city;

    /**
     * Country of residence of this user.
     * Field: country
     * Scope: public
     * Sample value: "US"
     *
     * @var string|null
     */
    private $country;

    /**
     * URL of this user's cover image (height = 100px).
     * Field: cover_100_url
     * Scope: public
     * Sample value: "https:\/\/s2-ssl.dmcdn.net\/GJCWj\/x100-qZJ.jpg"
     *
     * @var string|null
     */
    private $cover100Url;

    /**
     * URL of this user's cover image (height = 150px).
     * Field: cover_150_url
     * Scope: public
     * Sample value: "https:\/\/s2-ssl.dmcdn.net\/GJCWj\/x150-KrI.jpg"
     *
     * @var string|null
     */
    private $cover150Url;

    /**
     * URL of this user's cover image (height = 200px).
     * Field: cover_200_url
     * Scope: public
     * Sample value: "https:\/\/s2-ssl.dmcdn.net\/GJCWj\/x200--y5.jpg"
     *
     * @var string|null
     */
    private $cover200Url;

    /**
     * URL of this user's cover image (height = 250px).
     * Field: cover_250_url
     * Scope: public
     * Sample value: "https:\/\/s2-ssl.dmcdn.net\/GJCWj\/x250-u-x.jpg"
     *
     * @var string|null
     */
    private $cover250Url;

    /**
     * URL of this user's cover image (original size).
     * Field: cover_url
     * Scope: public
     * Sample value: "http:\/\/www.example.org"
     *
     * @var string|null
     */
    private $coverUrl;

    /**
     * Date and time when this user joined the site.
     * Field: created_time
     * Scope: public
     * Sample value: 1287507036
     *
     * @var int|null
     */
    private $createdTime;

    /**
     * Comprehensive description of this user.
     * Field: description
     * Scope: public
     * Sample value: "Hi, I'm <i>John<\/i> and I'm here to break <b>everything<\/b>!"
     *
     * @var string|null
     */
    private $description;

    /**
     * Email address of this user.
     * Field: email
     * Scope: private
     * Sample value: "john.doe@provider.com"
     *
     * @var string|null
     */
    private $email;

    /**
     * Facebook profile URL of this user.
     * Field: facebook_url
     * Scope: public
     * Sample value: "https:\/\/www.facebook.com\/johndoe424"
     *
     * @var string|null
     */
    private $facebookUrl;

    /**
     * First name of this user.
     * Field: first_name
     * Scope: private
     * Sample value: "John"
     *
     * @var string|null
     */
    private $firstName;

    /**
     * Total amount of followers of this user.
     * Field: followers_total
     * Scope: public
     * Sample value: 42
     *
     * @var int
     */
    private $followersTotal;

    /**
     * Total amount of users this user is following.
     * Field: following_total
     * Scope: public
     * Sample value: 42
     *
     * @var int
     */
    private $followingTotal;

    /**
     * Full name of this user.
     * Field: fullname
     * Scope: private
     * Sample value: "John Doe"
     *
     * @var string|null
     */
    private $fullname;

    /**
     * Gender of this user.
     * Field: gender
     * Scope: public
     * Sample value: "male"
     *
     * @var string|null
     */
    private $gender;

    /**
     * Googleplus profile URL of this user.
     * Field: googleplus_url
     * Scope: public
     * Sample value: "https:\/\/plus.google.com\/u\/0\/johndoe424"
     *
     * @var string|null
     */
    private $googleplusUrl;

    /**
     * Unique object identifier (unique among all users)
     * Field: id
     * Scope: public
     * Sample value: "x1hra9e"
     *
     * @var string|null
     */
    private $id;

    /**
     * Instagram profile URL of this user.
     * Field: instagram_url
     * Scope: public
     * Sample value: "https:\/\/www.instagram.com\/johndoe424"
     *
     * @var string|null
     */
    private $instagramUrl;

    /**
     * True if the authenticated user is following this user. If no user is authentified, it will always return false
     * Field: is_following
     * Scope: public
     * Sample value: true
     *
     * @var bool
     */
    private $isFollowing;

    /**
     * Graph type of this object (hopefully user)
     * Field: item_type
     * Scope: public
     * Sample value: "user"
     *
     * @var string
     */
    private $itemType;

    /**
     * Language used by this user.
     * Field: language
     * Scope: public
     * Sample value: "en"
     *
     * @var string
     */
    private $language;

    /**
     * Last name of this user.
     * Field: last_name
     * Scope: private
     * Sample value: "Doe"
     *
     * @var string|null
     */
    private $lastName;

    /**
     * Returns the various user limits like the maximum allowed duration and size per uploaded video etc.
     * This property can only be obtained for the currently logged in user.
     * Field: limits
     * Scope: private
     * Sample value: {"video_duration":3600,"video_size":2147483648}
     *
     * @var array|null
     */
    private $limits;

    /**
     * LinkedIn profile URL of this user.
     * Field: linkedin_url
     * Scope: public
     * Sample value: "https:\/\/www.linkedin.com\/in\/johndoe424"
     *
     * @var string|null
     */
    private $linkedinUrl;

    /**
     * Identifier of this user's parent
     * Field: parent
     * Scope: public
     * Sample value: "xfv5aq"
     *
     * @var User|null
     */
    private $parent;

    /**
     * When the partner field is set, the user auto-accepts the T&Cs and becomes a partner.
     * Field: partner
     * Returns True if this user is a partner.
     * Scope: public
     * Sample value: true
     *
     * @var bool
     */
    private $partner;

    /**
     * Pinterest profile URL of this user.
     * Field: pinterest_url
     * Scope: public
     * Sample value: "https:\/\/pinterest.com\/dailymotionusa\/"
     *
     * @var string|null
     */
    private $pinterestUrl;

    /**
     * Total amount of playlists of this user.
     * Field: playlists_total
     * Scope: public
     * Sample value: 5
     *
     * @var int
     */
    private $playlistsTotal;

    /**
     * The number of videos reposted by the user.
     * Field: reposts_total
     * Scope: public
     * Sample value: 5
     *
     * @var int
     */
    private $repostsTotal;

    /**
     * Total amount of net revenues in USD generated through claim the last day.
     * Field: revenues_claim_last_day
     * Scope: private
     * Sample value: 12
     *
     * @var float|null
     */
    private $revenuesClaimLastDay;

    /**
     * Total amount of net revenues in USD generated through claim the last month.
     * Field: revenues_claim_last_month
     * Scope: private
     * Sample value: 310.2
     *
     * @var float|null
     */
    private $revenuesClaimLastMonth;

    /**
     * Total amount of net revenues in USD generated through claim in the last 7 sliding days.
     * Field: revenues_claim_last_week
     * Scope: private
     * Sample value: 80.7
     *
     * @var float|null
     */
    private $revenuesClaimLastWeek;

    /**
     * Total amount of net revenues in USD generated through claim since the beginning.
     * Field: revenues_claim_total
     * Scope: private
     * Sample value: 2502.37
     *
     * @var float|null
     */
    private $revenuesClaimTotal;

    /**
     * Total amount of net revenues in USD generated through the paid content the last day.
     * Field: revenues_paidcontent_last_day
     * Scope: private
     * Sample value: 12
     *
     * @var float|null
     */
    private $revenuesPaidcontentLastDay;

    /**
     * Total amount of net revenues in USD generated through the paid content the last month.
     * Field: revenues_paidcontent_last_month
     * Scope: private
     * Sample value: 310.2
     *
     * @var float|null
     */
    private $revenuesPaidcontentLastMonth;

    /**
     * Total amount of net revenues in USD generated through the paid content in the last 7 sliding days.
     * Field: revenues_paidcontent_last_week
     * Scope: private
     * Sample value: 80.7
     *
     * @var float|null
     */
    private $revenuesPaidcontentLastWeek;

    /**
     * Total amount of net revenues in USD generated through the paid content since the beginning.
     * Field: revenues_paidcontent_total
     * Scope: private
     * Sample value: 2502.37
     *
     * @var float|null
     */
    private $revenuesPaidcontentTotal;

    /**
     * Total amount of net revenues in USD generated through the video monetization the last day.
     * Field: revenues_video_last_day
     * Scope: private
     * Sample value: 12
     *
     * @var float|null
     */
    private $revenuesVideoLastDay;

    /**
     * Total amount of net revenues in USD generated through the video monetization the last month.
     * Field: revenues_video_last_month
     * Scope: private
     * Sample value: 310.2
     *
     * @var float|null
     */
    private $revenuesVideoLastMonth;

    /**
     * Total amount of net revenues in USD generated through the video monetization in the last 7 sliding days.
     * Field: revenues_video_last_week
     * Scope: private
     * Sample value: 80.7
     *
     * @var float|null
     */
    private $revenuesVideoLastWeek;

    /**
     * Total amount of net revenues in USD generated through the video monetization since the beginning.
     * Field: revenues_video_total
     * Scope: private
     * Sample value: 2502.37
     *
     * @var float|null
     */
    private $revenuesVideoTotal;

    /**
     * Total amount of net revenues in USD generated through the website monetization the last day.
     * Field: revenues_website_last_day
     * Scope: private
     * Sample value: 12
     *
     * @var float|null
     */
    private $revenuesWebsiteLastDay;

    /**
     * Total amount of net revenues in USD generated through the website monetization the last month.
     * Field: revenues_website_last_month
     * Scope: private
     * Sample value: 310.2
     *
     * @var float|null
     */
    private $revenuesWebsiteLastMonth;

    /**
     * Total amount of net revenues in USD generated through the website monetization in the last 7 sliding days.
     * Field: revenues_website_last_week
     * Scope: private
     * Sample value: 80.7
     *
     * @var float|null
     */
    private $revenuesWebsiteLastWeek;

    /**
     * Total amount of net revenues in USD generated through the website monetization since the beginning.
     * Field: revenues_website_total
     * Scope: private
     * Sample value: 2502.37
     *
     * @var float|null
     */
    private $revenuesWebsiteTotal;

    /**
     * Returns this user's full name or login depending on the user's preferences.
     * Field: screenname
     * Scope: public
     * Sample value: "johndoe424"
     *
     * @var string
     */
    private $screenname;

    /**
     * Current user account status.
     * Field: status
     * Scope: public
     * Allowed values: pending-activation, disabled, active, unknown
     * Sample value: "active"
     *
     * @var string
     */
    private $status;

    /**
     * Twitter profile URL of this user.
     * Field: twitter_url
     * Scope: public
     * Sample value: "https:\/\/twitter.com\/johndoe424"
     *
     * @var string|null
     */
    private $twitterUrl;

    /**
     * URL of this user's profile on Dailymotion.
     * Field: url
     * Scope: public
     * Sample value: "http:\/\/www.dailymotion.com\/johndoe424"
     *
     * @var string
     */
    private $url;

    /**
     * User account credentials login.
     * Field: username
     * Scope: public
     * Sample value: "johndoe424"
     *
     * @var string
     */
    private $username;

    /**
     * True if this user is a verified partner.
     * Field: verified
     * Scope: public
     * Sample value: true
     *
     * @var bool
     */
    private $verified;

    /**
     * Total amount of public videos of this user.
     * Field: videos_total
     * Scope: public
     * Sample value: 27
     *
     * @var int
     */
    private $videosTotal;

    /**
     * Showcased video of this user.
     * You can retrieve sub-fields of this video object using the dot-notation (e.g.: videostar.id).
     * Field: videostar
     * Scope: public
     * Sample value: "xfv5aq"
     *
     * @var User|null
     */
    private $videostar;

    /**
     * Total aggregated number of views on all of this user's videos.
     * Field: views_total
     * Scope: public
     * Sample value: 1239873
     *
     * @var int
     */
    private $viewsTotal;

    /**
     * Personal website URL of this user.
     * Field: website_url
     * Scope: public
     * Sample value: "http:\/\/www.johndoe424.net"
     *
     * @var string|null
     */
    private $websiteUrl;

    /**
     * @return null|string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param null|string $active
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param null|string $address
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAvatar25Url()
    {
        return $this->avatar25Url;
    }

    /**
     * @param null|string $avatar25Url
     * @return User
     */
    public function setAvatar25Url($avatar25Url)
    {
        $this->avatar25Url = $avatar25Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAvatar60Url()
    {
        return $this->avatar60Url;
    }

    /**
     * @param null|string $avatar60Url
     * @return User
     */
    public function setAvatar60Url($avatar60Url)
    {
        $this->avatar60Url = $avatar60Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAvatar80Url()
    {
        return $this->avatar80Url;
    }

    /**
     * @param null|string $avatar80Url
     * @return User
     */
    public function setAvatar80Url($avatar80Url)
    {
        $this->avatar80Url = $avatar80Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAvatar120Url()
    {
        return $this->avatar120Url;
    }

    /**
     * @param null|string $avatar120Url
     * @return User
     */
    public function setAvatar120Url($avatar120Url)
    {
        $this->avatar120Url = $avatar120Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAvatar190Url()
    {
        return $this->avatar190Url;
    }

    /**
     * @param null|string $avatar190Url
     * @return User
     */
    public function setAvatar190Url($avatar190Url)
    {
        $this->avatar190Url = $avatar190Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAvatar240Url()
    {
        return $this->avatar240Url;
    }

    /**
     * @param null|string $avatar240Url
     * @return User
     */
    public function setAvatar240Url($avatar240Url)
    {
        $this->avatar240Url = $avatar240Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAvatar360Url()
    {
        return $this->avatar360Url;
    }

    /**
     * @param null|string $avatar360Url
     * @return User
     */
    public function setAvatar360Url($avatar360Url)
    {
        $this->avatar360Url = $avatar360Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAvatar480Url()
    {
        return $this->avatar480Url;
    }

    /**
     * @param null|string $avatar480Url
     * @return User
     */
    public function setAvatar480Url($avatar480Url)
    {
        $this->avatar480Url = $avatar480Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAvatar720Url()
    {
        return $this->avatar720Url;
    }

    /**
     * @param null|string $avatar720Url
     * @return User
     */
    public function setAvatar720Url($avatar720Url)
    {
        $this->avatar720Url = $avatar720Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getAvatarUrl()
    {
        return $this->avatarUrl;
    }

    /**
     * @param null|string $avatarUrl
     * @return User
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param int|null $birthday
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
        return $this;
    }

    /**
     * @return int
     */
    public function getChildrenTotal(): int
    {
        return $this->childrenTotal;
    }

    /**
     * @param int $childrenTotal
     * @return User
     */
    public function setChildrenTotal(int $childrenTotal): User
    {
        $this->childrenTotal = $childrenTotal;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param null|string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param null|string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCover100Url()
    {
        return $this->cover100Url;
    }

    /**
     * @param null|string $cover100Url
     * @return User
     */
    public function setCover100Url($cover100Url)
    {
        $this->cover100Url = $cover100Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCover150Url()
    {
        return $this->cover150Url;
    }

    /**
     * @param null|string $cover150Url
     * @return User
     */
    public function setCover150Url($cover150Url)
    {
        $this->cover150Url = $cover150Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCover200Url()
    {
        return $this->cover200Url;
    }

    /**
     * @param null|string $cover200Url
     * @return User
     */
    public function setCover200Url($cover200Url)
    {
        $this->cover200Url = $cover200Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCover250Url()
    {
        return $this->cover250Url;
    }

    /**
     * @param null|string $cover250Url
     * @return User
     */
    public function setCover250Url($cover250Url)
    {
        $this->cover250Url = $cover250Url;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getCoverUrl()
    {
        return $this->coverUrl;
    }

    /**
     * @param null|string $coverUrl
     * @return User
     */
    public function setCoverUrl($coverUrl)
    {
        $this->coverUrl = $coverUrl;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * @param int|null $createdTime
     * @return User
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     * @return User
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null|string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getFacebookUrl()
    {
        return $this->facebookUrl;
    }

    /**
     * @param null|string $facebookUrl
     * @return User
     */
    public function setFacebookUrl($facebookUrl)
    {
        $this->facebookUrl = $facebookUrl;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param null|string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return int
     */
    public function getFollowersTotal(): int
    {
        return $this->followersTotal;
    }

    /**
     * @param int $followersTotal
     * @return User
     */
    public function setFollowersTotal(int $followersTotal): User
    {
        $this->followersTotal = $followersTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getFollowingTotal(): int
    {
        return $this->followingTotal;
    }

    /**
     * @param int $followingTotal
     * @return User
     */
    public function setFollowingTotal(int $followingTotal): User
    {
        $this->followingTotal = $followingTotal;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param null|string $fullname
     * @return User
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param null|string $gender
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getGoogleplusUrl()
    {
        return $this->googleplusUrl;
    }

    /**
     * @param null|string $googleplusUrl
     * @return User
     */
    public function setGoogleplusUrl($googleplusUrl)
    {
        $this->googleplusUrl = $googleplusUrl;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null|string $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getInstagramUrl()
    {
        return $this->instagramUrl;
    }

    /**
     * @param null|string $instagramUrl
     * @return User
     */
    public function setInstagramUrl($instagramUrl)
    {
        $this->instagramUrl = $instagramUrl;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFollowing(): bool
    {
        return $this->isFollowing;
    }

    /**
     * @param bool $isFollowing
     * @return User
     */
    public function setIsFollowing(bool $isFollowing): User
    {
        $this->isFollowing = $isFollowing;
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
     * @return User
     */
    public function setItemType(string $itemType): User
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
     * @return User
     */
    public function setLanguage(string $language): User
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param null|string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getLimits()
    {
        return $this->limits;
    }

    /**
     * @param array|null $limits
     * @return User
     */
    public function setLimits($limits)
    {
        $this->limits = $limits;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLinkedinUrl()
    {
        return $this->linkedinUrl;
    }

    /**
     * @param null|string $linkedinUrl
     * @return User
     */
    public function setLinkedinUrl($linkedinUrl)
    {
        $this->linkedinUrl = $linkedinUrl;
        return $this;
    }

    /**
     * @return null|User
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param null|User $parent
     * @return User
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPartner(): bool
    {
        return $this->partner;
    }

    /**
     * @param bool $partner
     * @return User
     */
    public function setPartner(bool $partner): User
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPinterestUrl()
    {
        return $this->pinterestUrl;
    }

    /**
     * @param null|string $pinterestUrl
     * @return User
     */
    public function setPinterestUrl($pinterestUrl)
    {
        $this->pinterestUrl = $pinterestUrl;
        return $this;
    }

    /**
     * @return int
     */
    public function getPlaylistsTotal(): int
    {
        return $this->playlistsTotal;
    }

    /**
     * @param int $playlistsTotal
     * @return User
     */
    public function setPlaylistsTotal(int $playlistsTotal): User
    {
        $this->playlistsTotal = $playlistsTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getRepostsTotal(): int
    {
        return $this->repostsTotal;
    }

    /**
     * @param int $repostsTotal
     * @return User
     */
    public function setRepostsTotal(int $repostsTotal): User
    {
        $this->repostsTotal = $repostsTotal;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesClaimLastDay()
    {
        return $this->revenuesClaimLastDay;
    }

    /**
     * @param float|null $revenuesClaimLastDay
     * @return User
     */
    public function setRevenuesClaimLastDay($revenuesClaimLastDay)
    {
        $this->revenuesClaimLastDay = $revenuesClaimLastDay;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesClaimLastMonth()
    {
        return $this->revenuesClaimLastMonth;
    }

    /**
     * @param float|null $revenuesClaimLastMonth
     * @return User
     */
    public function setRevenuesClaimLastMonth($revenuesClaimLastMonth)
    {
        $this->revenuesClaimLastMonth = $revenuesClaimLastMonth;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesClaimLastWeek()
    {
        return $this->revenuesClaimLastWeek;
    }

    /**
     * @param float|null $revenuesClaimLastWeek
     * @return User
     */
    public function setRevenuesClaimLastWeek($revenuesClaimLastWeek)
    {
        $this->revenuesClaimLastWeek = $revenuesClaimLastWeek;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesClaimTotal()
    {
        return $this->revenuesClaimTotal;
    }

    /**
     * @param float|null $revenuesClaimTotal
     * @return User
     */
    public function setRevenuesClaimTotal($revenuesClaimTotal)
    {
        $this->revenuesClaimTotal = $revenuesClaimTotal;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesPaidcontentLastDay()
    {
        return $this->revenuesPaidcontentLastDay;
    }

    /**
     * @param float|null $revenuesPaidcontentLastDay
     * @return User
     */
    public function setRevenuesPaidcontentLastDay($revenuesPaidcontentLastDay)
    {
        $this->revenuesPaidcontentLastDay = $revenuesPaidcontentLastDay;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesPaidcontentLastMonth()
    {
        return $this->revenuesPaidcontentLastMonth;
    }

    /**
     * @param float|null $revenuesPaidcontentLastMonth
     * @return User
     */
    public function setRevenuesPaidcontentLastMonth($revenuesPaidcontentLastMonth)
    {
        $this->revenuesPaidcontentLastMonth = $revenuesPaidcontentLastMonth;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesPaidcontentLastWeek()
    {
        return $this->revenuesPaidcontentLastWeek;
    }

    /**
     * @param float|null $revenuesPaidcontentLastWeek
     * @return User
     */
    public function setRevenuesPaidcontentLastWeek($revenuesPaidcontentLastWeek)
    {
        $this->revenuesPaidcontentLastWeek = $revenuesPaidcontentLastWeek;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesPaidcontentTotal()
    {
        return $this->revenuesPaidcontentTotal;
    }

    /**
     * @param float|null $revenuesPaidcontentTotal
     * @return User
     */
    public function setRevenuesPaidcontentTotal($revenuesPaidcontentTotal)
    {
        $this->revenuesPaidcontentTotal = $revenuesPaidcontentTotal;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesVideoLastDay()
    {
        return $this->revenuesVideoLastDay;
    }

    /**
     * @param float|null $revenuesVideoLastDay
     * @return User
     */
    public function setRevenuesVideoLastDay($revenuesVideoLastDay)
    {
        $this->revenuesVideoLastDay = $revenuesVideoLastDay;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesVideoLastMonth()
    {
        return $this->revenuesVideoLastMonth;
    }

    /**
     * @param float|null $revenuesVideoLastMonth
     * @return User
     */
    public function setRevenuesVideoLastMonth($revenuesVideoLastMonth)
    {
        $this->revenuesVideoLastMonth = $revenuesVideoLastMonth;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesVideoLastWeek()
    {
        return $this->revenuesVideoLastWeek;
    }

    /**
     * @param float|null $revenuesVideoLastWeek
     * @return User
     */
    public function setRevenuesVideoLastWeek($revenuesVideoLastWeek)
    {
        $this->revenuesVideoLastWeek = $revenuesVideoLastWeek;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesVideoTotal()
    {
        return $this->revenuesVideoTotal;
    }

    /**
     * @param float|null $revenuesVideoTotal
     * @return User
     */
    public function setRevenuesVideoTotal($revenuesVideoTotal)
    {
        $this->revenuesVideoTotal = $revenuesVideoTotal;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesWebsiteLastDay()
    {
        return $this->revenuesWebsiteLastDay;
    }

    /**
     * @param float|null $revenuesWebsiteLastDay
     * @return User
     */
    public function setRevenuesWebsiteLastDay($revenuesWebsiteLastDay)
    {
        $this->revenuesWebsiteLastDay = $revenuesWebsiteLastDay;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesWebsiteLastMonth()
    {
        return $this->revenuesWebsiteLastMonth;
    }

    /**
     * @param float|null $revenuesWebsiteLastMonth
     * @return User
     */
    public function setRevenuesWebsiteLastMonth($revenuesWebsiteLastMonth)
    {
        $this->revenuesWebsiteLastMonth = $revenuesWebsiteLastMonth;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesWebsiteLastWeek()
    {
        return $this->revenuesWebsiteLastWeek;
    }

    /**
     * @param float|null $revenuesWebsiteLastWeek
     * @return User
     */
    public function setRevenuesWebsiteLastWeek($revenuesWebsiteLastWeek)
    {
        $this->revenuesWebsiteLastWeek = $revenuesWebsiteLastWeek;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRevenuesWebsiteTotal()
    {
        return $this->revenuesWebsiteTotal;
    }

    /**
     * @param float|null $revenuesWebsiteTotal
     * @return User
     */
    public function setRevenuesWebsiteTotal($revenuesWebsiteTotal)
    {
        $this->revenuesWebsiteTotal = $revenuesWebsiteTotal;
        return $this;
    }

    /**
     * @return string
     */
    public function getScreenname(): string
    {
        return $this->screenname;
    }

    /**
     * @param string $screenname
     * @return User
     */
    public function setScreenname(string $screenname): User
    {
        $this->screenname = $screenname;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return User
     */
    public function setStatus(string $status): User
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getTwitterUrl()
    {
        return $this->twitterUrl;
    }

    /**
     * @param null|string $twitterUrl
     * @return User
     */
    public function setTwitterUrl($twitterUrl)
    {
        $this->twitterUrl = $twitterUrl;
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
     * @return User
     */
    public function setUrl(string $url): User
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return User
     */
    public function setUsername(string $username): User
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return bool
     */
    public function isVerified(): bool
    {
        return $this->verified;
    }

    /**
     * @param bool $verified
     * @return User
     */
    public function setVerified(bool $verified): User
    {
        $this->verified = $verified;
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
     * @return User
     */
    public function setVideosTotal(int $videosTotal): User
    {
        $this->videosTotal = $videosTotal;
        return $this;
    }

    /**
     * @return null|User
     */
    public function getVideostar()
    {
        return $this->videostar;
    }

    /**
     * @param null|User $videostar
     * @return User
     */
    public function setVideostar($videostar)
    {
        $this->videostar = $videostar;
        return $this;
    }

    /**
     * @return int
     */
    public function getViewsTotal(): int
    {
        return $this->viewsTotal;
    }

    /**
     * @param int $viewsTotal
     * @return User
     */
    public function setViewsTotal(int $viewsTotal): User
    {
        $this->viewsTotal = $viewsTotal;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getWebsiteUrl()
    {
        return $this->websiteUrl;
    }

    /**
     * @param null|string $websiteUrl
     * @return User
     */
    public function setWebsiteUrl($websiteUrl)
    {
        $this->websiteUrl = $websiteUrl;
        return $this;
    }
}
