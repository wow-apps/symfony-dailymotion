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
 * Class Video
 *
 * Data Transfer Object for Dailymotion video object
 *
 * @author Alexey Samara <lion.samara@gmail.com>
 * @package WowApps\DailymotionBundle\DTO
 */
class Video
{
    /**
     * True if the owner blocked instream ads on this video.
     * Field: advertising_instream_blocked
     * Scope: public
     * Sample value: true
     *
     * @var bool
     */
    private $advertisingInstreamBlocked;

    /**
     * True if this video can be embedded outside of Dailymotion.
     * Field: allow_embed
     * Scope: public
     * Sample value: true
     *
     * @var bool
     */
    private $allowEmbed;

    /**
     * True if this video can be added to playlists.
     * Field: allow_embed
     * Scope: public
     * Sample value: true
     *
     * @var bool
     */
    private $allowedInPlaylists;

    /**
     * Aspect ratio of this video (i.e.: 1.33333 for 4/3, 1.77777 for 16/9...).
     * Field: aspect_ratio
     * Scope: public
     * Sample value: 1.7777777
     *
     * @var float
     */
    private $aspectRatio;

    /**
     * Current live stream audience. null if the audience shouldn't be taken into consideration.
     * Field: audience
     * Scope: public
     * Sample value: 450
     *
     * @var int|null
     */
    private $audience;

    /**
     * Total live stream audience since stream creation. null if the audience shouldn't be taken into account.
     * Field: audience_total
     * Scope: public
     * Sample value: 2457
     *
     * @var int|null
     */
    private $audienceTotal;

    /**
     * List of available stream formats for this video.
     * Field: available_formats
     * Scope: public
     * Allowed values: l1, l2, ld, sd, hq, hd720, hd1080, uhd1440, uhd2160, drm
     * Sample value: ["ld","sd","hq","hd720","hd1080"]
     *
     * @var array
     */
    private $availableFormats;

    /**
     * Channel of this video. You can retrieve sub-fields of this channel object using the dot-notation
     * (e.g.: channel.id).
     * Field: channel
     * Scope: public
     * Sample value: "news"
     *
     * @var Channel|null
     */
    private $channel;

    /**
     * Video file hash.
     * Field: checksum
     * Scope: public
     * Sample value: "\"64f771f2fccff6cef46f2f34112a67ff8e940103\""
     *
     * @var string
     */
    private $checksum;

    /**
     * Country of this video (declarative, may be null).
     * Field: country
     * Scope: public
     * Sample value: "US"
     *
     * @var string|null
     */
    private $country;

    /**
     * Date and time when this video was uploaded.
     * Field: created_time
     * Scope: public
     * Sample value: 1287507036
     *
     * @var int|null
     */
    private $createdTime;

    /**
     * List of customizable values (maximum of 3 values)
     * Field: custom_classification
     * Scope: public
     * Sample value: ["ref1","ref2","ref3"]
     *
     * @var array
     */
    private $customClassification;

    /**
     * Comprehensive description of this video. Maximumm length is set to 3000 (5000 for partners).
     * Field: description
     * Scope: public
     * Sample value: "This is a sample description for my video."
     *
     * @var string
     */
    private $description;

    /**
     * Duration of this video in seconds.
     * Field: duration
     * Scope: public
     * Sample value: 423
     *
     * @var int
     */
    private $duration;

    /**
     * HTML embedding code.
     * Field: embed_html
     * Scope: public
     * Sample value: "<iframe frameborder=\"0\" src=\"http:\/\/www.dailymotion.com\/embed\/video\/x26m1j4\" ...
     *
     * @var string
     */
    private $embedHTML;

    /**
     * URL to embed this video.
     * Field: embed_url
     * Scope: public
     * Sample value: "http:\/\/www.dailymotion.com\/embed\/video\/x26m1j4"
     *
     * @var string
     */
    private $embedUrl;

    /**
     * When this video status field is set to processing, this parameter indicates a number
     * between 0 and 100 corresponding to the percentage of encoding already completed.
     * When this value reaches 100, it's possible for the owner to play his video.
     * For other statuses this parameter returns -1.
     * Field: encoding_progress
     * Scope: public
     * Sample value: 22
     *
     * @var int|null
     */
    private $encodingProgress;

    /**
     * End date and time of this live stream.
     * Field: end_time
     * Scope: public
     * Sample value: 1404129540
     *
     * @var int|null
     */
    private $endTime;

    /**
     * Date and time after which this video will be made private. Beware: if the video was originally
     * defined as private, setting this value will automatically make it public between its publish_date
     * and expiry_date. This setting only affects the visibility of the video, it will still be available
     * to anyone who knows how to access the video's private URL even after this date. Omitting this value
     * while setting a past publish_date never expires the video. Set to null (recommended) or a date after
     * Jan 19th 2038 to reset this parameter.
     * Note : Only verified partners are allowed to manage video availability and expiration dates.
     * Field: expiry_date
     * Scope: private
     * Sample value: 1287507036
     *
     * @var int|null
     */
    private $expiryDate;

    /**
     * By default, videos are deleted (after a grace period) when their expiry_date is reached.
     * Set this to false to disable this behavior.
     * Note : Only verified partners are allowed to manage video availability and expiration dates.
     * Field: expiry_date_deletion
     * Scope: private
     * Sample value: true
     *
     * @var int|null
     */
    private $expiryDateDeletion;

    /**
     * True if this video is explicit.
     * Field: explicit
     * Scope: public
     * Sample value: true
     *
     * @var bool
     */
    private $explicit;

    /**
     * List of genres of a given video.
     * Field: genres
     * Scope: public
     * Sample value: ["cuban","jazz","roots-reggae"]
     *
     * @var array
     */
    private $genres;

    /**
     * List of countries where this video is or isn't accessible.
     * A list of country codes (ISO 3166-1 alpha-2) starting with the deny or allow (default) keyword to define
     * if this is a black or a whitelist, e.g.: both ["allow", "fr", "us", "it"] and ["fr", "us", "it"] will allow
     * this video to be accessed in France, US and Italy and deny all other countries.
     * On the other hand, ["deny", "us", "fr"] will deny access to this video in the US and France and allow it
     * everywhere else. An empty list [] or simply ["allow"] (the default) will revert the behavior to allow
     * from everywhere. To set geoblocking on your videos, you have to be a Dailymotion partner.
     * Field: geoblocking
     * Scope: public
     * Sample value: ["allow","fr","us","it"]
     *
     * @var array
     */
    private $geoblocking;

    /**
     * Geolocalization for this video. Result is an array with the longitude and latitude using point notation.
     * Longitude range is from -180.0 (West) to 180.0 (East). Latitude range is from -90.0 (South) to 90.0 (North).
     * Field: geoloc
     * Scope: public
     * Sample value: [-122.40061283112,37.782112059896]
     *
     * @var array
     */
    private $geoloc;

    /**
     * Unique object identifier (unique among all videos)
     * Field: id
     * Scope: public
     * Sample value: "xyj5mps"
     *
     * @var string
     */
    private $id;

    /**
     * Graph type of this object (hopefully video)
     * Field: item_type
     * Scope: public
     * Sample value: "video"
     *
     * @var string
     */
    private $itemType;

    /**
     * Language of this video.
     * This value is declarative and corresponds to the user-declared spoken language of the video.
     * Field: language
     * Scope: public
     * Allowed values: af, AF, ak, AK, am, AM, ar, AR, an, AN, as, AS, av, AV, ae, AE, ay, AY, az, AZ, ba, BA, bm,
     *      BM, be, BE, bn, BN, bi, BI, bo, BO, bs, BS, br, BR, bg, BG, ca, CA, cs, CS, ch, CH, ce, CE, cu, CU,
     *      cv, CV, kw, KW, co, CO, cr, CR, cy, CY, da, DA, de, DE, dv, DV, dz, DZ, el, EL, en, EN, eo, EO, et,
     *      ET, eu, EU, ee, EE, fo, FO, fa, FA, fj, FJ, fi, FI, fr, FR, fy, FY, ff, FF, gd, GD, ga, GA, gl, GL,
     *      gv, GV, gn, GN, gu, GU, ht, HT, ha, HA, sh, SH, he, HE, hz, HZ, hi, HI, ho, HO, hr, HR, hu, HU, hy,
     *      HY, ig, IG, io, IO, ii, II, iu, IU, ie, IE, ia, IA, id, ID, ik, IK, is, IS, it, IT, jv, JV, ja, JA,
     *      kl, KL, kn, KN, ks, KS, ka, KA, kr, KR, kk, KK, km, KM, ki, KI, rw, RW, ky, KY, kv, KV, kg, KG, ko,
     *      KO, kj, KJ, ku, KU, lo, LO, la, LA, lv, LV, li, LI, ln, LN, lt, LT, lb, LB, lu, LU, lg, LG, mh, MH,
     *      ml, ML, mr, MR, mk, MK, mg, MG, mt, MT, mn, MN, mi, MI, ms, MS, my, MY, na, NA, nv, NV, nr, NR, nd,
     *      ND, ng, NG, ne, NE, nl, NL, nn, NN, nb, NB, no, NO, ny, NY, oc, OC, oj, OJ, or, OR, om, OM, os, OS,
     *      pa, PA, pi, PI, pl, PL, pt, PT, ps, PS, qu, QU, rm, RM, ro, RO, rn, RN, ru, RU, sg, SG, sa, SA, si,
     *      SI, sk, SK, sl, SL, se, SE, sm, SM, sn, SN, sd, SD, so, SO, st, ST, es, ES, sq, SQ, sc, SC, sr, SR,
     *      ss, SS, su, SU, sw, SW, sv, SV, ty, TY, ta, TA, tt, TT, te, TE, tg, TG, tl, TL, th, TH, ti, TI, to,
     *      TO, tn, TN, ts, TS, tk, TK, tr, TR, tw, TW, ug, UG, uk, UK, ur, UR, uz, UZ, ve, VE, vi, VI, vo, VO,
     *      wa, WA, wo, WO, xh, XH, yi, YI, yo, YO, za, ZA, zh, ZH, zu, ZU
     * Sample value: "en"
     *
     * @var string
     */
    private $language;

    /**
     * Date and time when this video was liked by the user.
     * Field: liked_at
     * Scope: public
     * Sample value: 1287507036
     *
     * @var int|null
     */
    private $likedAt;

    /**
     * Total amount of times this video has been liked.
     * Field: likes_total
     * Scope: public
     * Sample value: 102
     *
     * @var int
     */
    private $likesTotal;

    /**
     * Date and time when this live stream went on-air for the last time
     * Field: live_airing_time
     * Scope: public
     * Sample value: 1287507036
     *
     * @var int|null
     */
    private $liveAiringTime;

    /**
     * Live stream information: audio bitrate (b/s)
     * Field: live_audio_bitrate
     * Scope: public
     * Sample value: 125928
     *
     * @var int|null
     */
    private $liveAudioBitrate;

    /**
     * List of available live ingests.
     * Field: live_ingests
     * Scope: public
     * Sample value: {"Default":"publish.dailymotion.com"}
     *
     * @var string|null
     */
    private $liveIngests;

    /**
     * URL to publish the live source stream on.
     * The current logged in user need to own this video in order to retrieve this field.
     * Field: live_publish_url
     * Scope: public
     * Sample value: "rtmp:\/\/publish.dailymotion.com\/publish-dm\/x26m1j4?auth=..."
     *
     * @var string
     */
    private $livePublishUrl;

    /**
     * Media type of this content.
     * Field: media_type
     * Scope: public
     * Allowed values: audio, video
     * Sample value: "video"
     *
     * @var string
     */
    private $mediaType;

    /**
     * Stream mode.
     * Field: mode
     * Scope: public
     * Allowed values: vod, live
     * Sample value: "vod"
     *
     * @var string
     */
    private $mode;

    /**
     * List of moods of a given video.
     * Field: moods
     * Scope: public
     * Sample value: ["energizing","party-fun","upbeat"]
     *
     * @var array
     */
    private $moods;

    /**
     * True if this live stream is broadcasting and watchable in the player.
     * Field: onair
     * Scope: public
     * Sample value: true
     *
     * @var bool
     */
    private $onair;

    /**
     * Owner of this video. You can retrieve sub-fields of this user object using the dot-notation (e.g.: owner.id).
     * Field: owner
     * Scope: public
     * Sample value: "x63kn4f"
     *
     * @var User|null
     */
    private $owner;

    /**
     * True if the video is owned by a partner.
     * Field: partner
     * Scope: public
     * Sample value: true
     *
     * @var bool
     */
    private $partner;

    /**
     * If a video is protected by a password, this field contains the password.
     * When setting a value on this field, the video visibility changes to "password protected".
     * Setting it to NULL removes the password protection: the visibility is changed to "public".
     * Field: password
     * Scope: public
     * Sample value: "hdI76FGhwo3n"
     *
     * @var string|null
     */
    private $password;

    /**
     * True if this video is password-protected.
     * Field: password_protected
     * Scope: public
     * Sample value: true
     *
     * @var bool
     */
    private $passwordProtected;

    /**
     * A unique video picked by the owner, displayed when video's playback ends.
     * You can retrieve sub-fields of this video object using the dot-notation (e.g.: player_next_video.id).
     * Field: player_next_video
     * Scope: public
     * Sample value: "x63kn4f"
     *
     * @var Video|null
     */
    private $playerNextVideo;

    /**
     * True if this video is private.
     * Field: private
     * Scope: public
     * Sample value: true
     *
     * @var bool
     */
    private $private;

    /**
     * The private video id. Null if the authentificated user is not the owner of this video.
     * Although successive calls will generate different ids, a private id generated for a given video
     * will always be valid. Beware that if the video is private and you disclose this private id,
     * your video is no longer private.
     * Field: private_id
     * Scope: public
     * Sample value: "k1KqUqDdmllgej374a2"
     *
     * @var string|null
     */
    private $privateId;

    /**
     * Date and time after which this video will be made publicly available.
     * Beware: if the video was originally defined as private, setting this value will automatically make it public
     * after the publish_date. This setting only affects the visibility of the video, it will still be available
     * to anyone who knows how to access the video's private URL even before this date.
     * Omitting this value while setting a future expiry_date immediately publishes the video.
     * Set to null (recommended) or a date before Jan 1st 1990 to reset this parameter.
     * Note : Only verified partners are allowed to manage video availability and expiration dates.
     * Field: publish_date
     * Scope: private
     * Sample value: 1287507036
     *
     * @var int|null
     */
    private $publishDate;

    /**
     * True if this video is published (may still be waiting for encoding, see the status field for more information).
     * Field: published
     * Scope: public
     * Sample value: true
     * @var bool
     */
    private $published;

    /**
     * When this video status field is set to processing, this parameter indicates a number between 0 and 100
     * corresponding to the percentage of progress from the status waiting to ready. Unlike encoding_progress
     * that can reach 100 well before the switch from processing to ready, this value will not.
     * Field: publishing_progress
     * Scope: public
     * Sample value: 22
     *
     * @var int|null
     */
    private $publishingProgress;

    /**
     * Date and time when the video record was stopped.
     * Field: record_end_time
     * Scope: public
     * Sample value: 1287507036
     *
     * @var int|null
     */
    private $recordEndTime;

    /**
     * Date and time when the video record started.
     * Field: record_start_time
     * Scope: public
     * Sample value: 1287507036
     *
     * @var int|null
     */
    private $recordStartTime;

    /**
     * Current state of the recording process of this video.
     * starting: Recording video is going to start
     * started: Recording video is in progress
     * stopping: Recording video is going to stop
     * stopped: Recording video is stopped
     * Field: record_status
     * Scope: public
     * Allowed values: starting, started, stopping, stopped
     * Sample value: "started"
     *
     * @var string|null
     */
    private $recordStatus;

    /**
     * Recurrence of this live stream.
     * Field: recurrence
     * Scope: public
     * Allowed values: once, daily, weekly
     * Sample value: "daily"
     *
     * @var string|null
     */
    private $recurrence;

    /**
     * Price of renting this video as a float in the current currency or null if this video is not behind a paywall.
     * See the currency field of the /locale endpoint to retrieve the current currency.
     * Field: rental_price
     * Scope: public
     * Sample value: "1.95"
     *
     * @var float|null
     */
    private $rentalPrice;

    /**
     * Soundtrack popularity.
     * Field: soundtrack_popularity
     * Scope: public
     * Sample value: 100
     *
     * @var int|null
     */
    private $soundtrackPopularity;

    /**
     * Start date and time of this live stream.
     * Field: start_time
     * Scope: public
     * Sample value: 1287507036
     *
     * @var int|null
     */
    private $startTime;

    /**
     * Status of this video. A video requires the published status to be set to true to be watchable.
     * Field: status
     * Scope: public
     * Allowed values: waiting, processing, ready, published, rejected, deleted, encoding_error
     * Sample value: "processing"
     *
     * @var string|null
     */
    private $status;

    /**
     * List of tags attached to this video.
     * Field: tags
     * Scope: public
     * Sample value: ["party","John Doe"]
     *
     * @var array
     */
    private $tags;

    /**
     * URL of this video's thumbnail image (60px height).
     * Field: thumbnail_60_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x60-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail60Url;

    /**
     * URL of this video's thumbnail image (120px height).
     * Field: thumbnail_120_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x120-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail120Url;

    /**
     * URL of this video's thumbnail image (180px height).
     * Field: thumbnail_180_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x180-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail180Url;

    /**
     * URL of this video's thumbnail image (240px height).
     * Field: thumbnail_240_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x240-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail240Url;

    /**
     * URL of this video's thumbnail image (360px height).
     * Field: thumbnail_360_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x360-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail360Url;

    /**
     * URL of this video's thumbnail image (480px height).
     * Field: thumbnail_480_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x480-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail480Url;

    /**
     * URL of this video's thumbnail image (720px height).
     * Field: thumbnail_720_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x720-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail720Url;

    /**
     * URL of this video's thumbnail image (1080px height).
     * Field: thumbnail_1080_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/F83Oh\/x1080-sjB.jpg"
     *
     * @var string
     */
    private $thumbnail1080Url;

    /**
     * URL of this video's raw thumbnail (full size respecting ratio).
     * Some users have the permission to change this value by providing an URL to a custom thumbnail.
     * Note: for live streams, the thumbnail is automatically generated every 5 mn by default;
     * it is not possible anymore to manually refresh the preview.
     * Field: thumbnail_url
     * Scope: public
     * Sample value: "http:\/\/s2.dmcdn.net\/CTrg1.jpg"
     *
     * @var string
     */
    private $thumbnailUrl;

    /**
     * Tiny URL of this video.
     * Field: tiny_url
     * Scope: public
     * Sample value: "http:\/\/dai.ly\/sk2k3jd"
     *
     * @var string
     */
    private $tinyUrl;

    /**
     * Title of this video.
     * Field: title
     * Scope: public
     * Sample value: "My video title"
     *
     * @var string
     */
    private $title;

    /**
     * Date and time when this video was last updated.
     * Field: updated_time
     * Scope: public
     * Sample value: 1404129540
     *
     * @var int|null
     */
    private $updatedTime;

    /**
     * URL of this video on Dailymotion. Writing this parameter defines where to download the video source.
     * You may either use this parameter at video creation time or change this parameter later if you want to change
     * this video source afterward. To change an existing video, the authenticated user may need some additional
     * permissions. When replacing an existing source, the video will put offline for a few minutes during
     * the re-encoding. You may use the GET /file/upload API resource to upload a video file and create a URL
     * to provide to this method or use an existing URL pointing to your own video file. Writing to this parameter
     * is subject to rate limiting.
     * Field: url
     * Scope: public
     * Sample value: http://www.dailymotion.com/video/x616r9y
     *
     * @var string
     */
    private $url;

    /**
     * True if the video is owned by a verified partner.
     * Field: verified
     * Scope: public
     * Sample value: true
     *
     * @var bool
     */
    private $verified;

    /**
     * Total number of views on this video in the last 24 sliding hours.
     * Field: views_last_day
     * Scope: public
     * Sample value: 203
     *
     * @var int
     */
    private $viewsLastDay;

    /**
     * Total number of views on this video in the last sliding hour.
     * Field: views_last_hour
     * Scope: public
     * Sample value: 102
     *
     * @var int
     */
    private $viewsLastHour;

    /**
     * Total number of views on this video in the last 30 sliding days.
     * Field: views_last_month
     * Scope: public
     * Sample value: 4023
     *
     * @var int
     */
    private $viewsLastMonth;

    /**
     * Total number of views on this video in the last 7 sliding days.
     * Field: views_last_week
     * Scope: public
     * Sample value: 1030
     *
     * @var int
     */
    private $viewsLastWeek;

    /**
     * Total amount of views on this video since its publication.
     * Field: views_total
     * Scope: public
     * Sample value: 10203
     *
     * @var int
     */
    private $viewsTotal;

    /**
     * @return bool
     */
    public function isAdvertisingInstreamBlocked(): bool
    {
        return $this->advertisingInstreamBlocked;
    }

    /**
     * @param bool $advertisingInstreamBlocked
     * @return Video
     */
    public function setAdvertisingInstreamBlocked(bool $advertisingInstreamBlocked): Video
    {
        $this->advertisingInstreamBlocked = $advertisingInstreamBlocked;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowEmbed(): bool
    {
        return $this->allowEmbed;
    }

    /**
     * @param bool $allowEmbed
     * @return Video
     */
    public function setAllowEmbed(bool $allowEmbed): Video
    {
        $this->allowEmbed = $allowEmbed;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowedInPlaylists(): bool
    {
        return $this->allowedInPlaylists;
    }

    /**
     * @param bool $allowedInPlaylists
     * @return Video
     */
    public function setAllowedInPlaylists(bool $allowedInPlaylists): Video
    {
        $this->allowedInPlaylists = $allowedInPlaylists;
        return $this;
    }

    /**
     * @return float
     */
    public function getAspectRatio(): float
    {
        return $this->aspectRatio;
    }

    /**
     * @param float $aspectRatio
     * @return Video
     */
    public function setAspectRatio(float $aspectRatio): Video
    {
        $this->aspectRatio = $aspectRatio;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * @param int|null $audience
     * @return Video
     */
    public function setAudience($audience)
    {
        $this->audience = $audience;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getAudienceTotal()
    {
        return $this->audienceTotal;
    }

    /**
     * @param int|null $audienceTotal
     * @return Video
     */
    public function setAudienceTotal($audienceTotal)
    {
        $this->audienceTotal = $audienceTotal;
        return $this;
    }

    /**
     * @return array
     */
    public function getAvailableFormats(): array
    {
        return $this->availableFormats;
    }

    /**
     * @param array $availableFormats
     * @return Video
     */
    public function setAvailableFormats(array $availableFormats): Video
    {
        $this->availableFormats = $availableFormats;
        return $this;
    }

    /**
     * @return null|Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param null|Channel $channel
     * @return Video
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return string
     */
    public function getChecksum(): string
    {
        return $this->checksum;
    }

    /**
     * @param string $checksum
     * @return Video
     */
    public function setChecksum(string $checksum): Video
    {
        $this->checksum = $checksum;
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
     * @return Video
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * @return Video
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
        return $this;
    }

    /**
     * @return array
     */
    public function getCustomClassification(): array
    {
        return $this->customClassification;
    }

    /**
     * @param array $customClassification
     * @return Video
     */
    public function setCustomClassification(array $customClassification): Video
    {
        $this->customClassification = $customClassification;
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
     * @return Video
     */
    public function setDescription(string $description): Video
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return Video
     */
    public function setDuration(int $duration): Video
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmbedHTML(): string
    {
        return $this->embedHTML;
    }

    /**
     * @param string $embedHTML
     * @return Video
     */
    public function setEmbedHTML(string $embedHTML): Video
    {
        $this->embedHTML = $embedHTML;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmbedUrl(): string
    {
        return $this->embedUrl;
    }

    /**
     * @param string $embedUrl
     * @return Video
     */
    public function setEmbedUrl(string $embedUrl): Video
    {
        $this->embedUrl = $embedUrl;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEncodingProgress()
    {
        return $this->encodingProgress;
    }

    /**
     * @param int|null $encodingProgress
     * @return Video
     */
    public function setEncodingProgress($encodingProgress)
    {
        $this->encodingProgress = $encodingProgress;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param int|null $endTime
     * @return Video
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param int|null $expiryDate
     * @return Video
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getExpiryDateDeletion()
    {
        return $this->expiryDateDeletion;
    }

    /**
     * @param int|null $expiryDateDeletion
     * @return Video
     */
    public function setExpiryDateDeletion($expiryDateDeletion)
    {
        $this->expiryDateDeletion = $expiryDateDeletion;
        return $this;
    }

    /**
     * @return bool
     */
    public function isExplicit(): bool
    {
        return $this->explicit;
    }

    /**
     * @param bool $explicit
     * @return Video
     */
    public function setExplicit(bool $explicit): Video
    {
        $this->explicit = $explicit;
        return $this;
    }

    /**
     * @return array
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    /**
     * @param array $genres
     * @return Video
     */
    public function setGenres(array $genres): Video
    {
        $this->genres = $genres;
        return $this;
    }

    /**
     * @return array
     */
    public function getGeoblocking(): array
    {
        return $this->geoblocking;
    }

    /**
     * @param array $geoblocking
     * @return Video
     */
    public function setGeoblocking(array $geoblocking): Video
    {
        $this->geoblocking = $geoblocking;
        return $this;
    }

    /**
     * @return array
     */
    public function getGeoloc(): array
    {
        return $this->geoloc;
    }

    /**
     * @param array $geoloc
     * @return Video
     */
    public function setGeoloc(array $geoloc): Video
    {
        $this->geoloc = $geoloc;
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
     * @return Video
     */
    public function setId(string $id): Video
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
     * @return Video
     */
    public function setItemType(string $itemType): Video
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
     * @return Video
     */
    public function setLanguage(string $language): Video
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLikedAt()
    {
        return $this->likedAt;
    }

    /**
     * @param int|null $likedAt
     * @return Video
     */
    public function setLikedAt($likedAt)
    {
        $this->likedAt = $likedAt;
        return $this;
    }

    /**
     * @return int
     */
    public function getLikesTotal(): int
    {
        return $this->likesTotal;
    }

    /**
     * @param int $likesTotal
     * @return Video
     */
    public function setLikesTotal(int $likesTotal): Video
    {
        $this->likesTotal = $likesTotal;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLiveAiringTime()
    {
        return $this->liveAiringTime;
    }

    /**
     * @param int|null $liveAiringTime
     * @return Video
     */
    public function setLiveAiringTime($liveAiringTime)
    {
        $this->liveAiringTime = $liveAiringTime;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getLiveAudioBitrate()
    {
        return $this->liveAudioBitrate;
    }

    /**
     * @param int|null $liveAudioBitrate
     * @return Video
     */
    public function setLiveAudioBitrate($liveAudioBitrate)
    {
        $this->liveAudioBitrate = $liveAudioBitrate;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getLiveIngests()
    {
        return $this->liveIngests;
    }

    /**
     * @param null|string $liveIngests
     * @return Video
     */
    public function setLiveIngests($liveIngests)
    {
        $this->liveIngests = $liveIngests;
        return $this;
    }

    /**
     * @return string
     */
    public function getLivePublishUrl(): string
    {
        return $this->livePublishUrl;
    }

    /**
     * @param string $livePublishUrl
     * @return Video
     */
    public function setLivePublishUrl(string $livePublishUrl): Video
    {
        $this->livePublishUrl = $livePublishUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getMediaType(): string
    {
        return $this->mediaType;
    }

    /**
     * @param string $mediaType
     * @return Video
     */
    public function setMediaType(string $mediaType): Video
    {
        $this->mediaType = $mediaType;
        return $this;
    }

    /**
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     * @return Video
     */
    public function setMode(string $mode): Video
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return array
     */
    public function getMoods(): array
    {
        return $this->moods;
    }

    /**
     * @param array $moods
     * @return Video
     */
    public function setMoods(array $moods): Video
    {
        $this->moods = $moods;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOnair(): bool
    {
        return $this->onair;
    }

    /**
     * @param bool $onair
     * @return Video
     */
    public function setOnair(bool $onair): Video
    {
        $this->onair = $onair;
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
     * @return Video
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
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
     * @return Video
     */
    public function setPartner(bool $partner): Video
    {
        $this->partner = $partner;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param null|string $password
     * @return Video
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPasswordProtected(): bool
    {
        return $this->passwordProtected;
    }

    /**
     * @param bool $passwordProtected
     * @return Video
     */
    public function setPasswordProtected(bool $passwordProtected): Video
    {
        $this->passwordProtected = $passwordProtected;
        return $this;
    }

    /**
     * @return null|Video
     */
    public function getPlayerNextVideo()
    {
        return $this->playerNextVideo;
    }

    /**
     * @param null|Video $playerNextVideo
     * @return Video
     */
    public function setPlayerNextVideo($playerNextVideo)
    {
        $this->playerNextVideo = $playerNextVideo;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrivate(): bool
    {
        return $this->private;
    }

    /**
     * @param bool $private
     * @return Video
     */
    public function setPrivate(bool $private): Video
    {
        $this->private = $private;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPrivateId()
    {
        return $this->privateId;
    }

    /**
     * @param null|string $privateId
     * @return Video
     */
    public function setPrivateId($privateId)
    {
        $this->privateId = $privateId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * @param int|null $publishDate
     * @return Video
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate = $publishDate;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPublished(): bool
    {
        return $this->published;
    }

    /**
     * @param bool $published
     * @return Video
     */
    public function setPublished(bool $published): Video
    {
        $this->published = $published;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getPublishingProgress()
    {
        return $this->publishingProgress;
    }

    /**
     * @param int|null $publishingProgress
     * @return Video
     */
    public function setPublishingProgress($publishingProgress)
    {
        $this->publishingProgress = $publishingProgress;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRecordEndTime()
    {
        return $this->recordEndTime;
    }

    /**
     * @param int|null $recordEndTime
     * @return Video
     */
    public function setRecordEndTime($recordEndTime)
    {
        $this->recordEndTime = $recordEndTime;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRecordStartTime()
    {
        return $this->recordStartTime;
    }

    /**
     * @param int|null $recordStartTime
     * @return Video
     */
    public function setRecordStartTime($recordStartTime)
    {
        $this->recordStartTime = $recordStartTime;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRecordStatus()
    {
        return $this->recordStatus;
    }

    /**
     * @param null|string $recordStatus
     * @return Video
     */
    public function setRecordStatus($recordStatus)
    {
        $this->recordStatus = $recordStatus;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }

    /**
     * @param null|string $recurrence
     * @return Video
     */
    public function setRecurrence($recurrence)
    {
        $this->recurrence = $recurrence;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getRentalPrice()
    {
        return $this->rentalPrice;
    }

    /**
     * @param float|null $rentalPrice
     * @return Video
     */
    public function setRentalPrice($rentalPrice)
    {
        $this->rentalPrice = $rentalPrice;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getSoundtrackPopularity()
    {
        return $this->soundtrackPopularity;
    }

    /**
     * @param int|null $soundtrackPopularity
     * @return Video
     */
    public function setSoundtrackPopularity($soundtrackPopularity)
    {
        $this->soundtrackPopularity = $soundtrackPopularity;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param int|null $startTime
     * @return Video
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     * @return Video
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * @param array $tags
     * @return Video
     */
    public function setTags(array $tags): Video
    {
        $this->tags = $tags;
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
     * @return Video
     */
    public function setThumbnail60Url(string $thumbnail60Url): Video
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
     * @return Video
     */
    public function setThumbnail120Url(string $thumbnail120Url): Video
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
     * @return Video
     */
    public function setThumbnail180Url(string $thumbnail180Url): Video
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
     * @return Video
     */
    public function setThumbnail240Url(string $thumbnail240Url): Video
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
     * @return Video
     */
    public function setThumbnail360Url(string $thumbnail360Url): Video
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
     * @return Video
     */
    public function setThumbnail480Url(string $thumbnail480Url): Video
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
     * @return Video
     */
    public function setThumbnail720Url(string $thumbnail720Url): Video
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
     * @return Video
     */
    public function setThumbnail1080Url(string $thumbnail1080Url): Video
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
     * @return Video
     */
    public function setThumbnailUrl(string $thumbnailUrl): Video
    {
        $this->thumbnailUrl = $thumbnailUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTinyUrl(): string
    {
        return $this->tinyUrl;
    }

    /**
     * @param string $tinyUrl
     * @return Video
     */
    public function setTinyUrl(string $tinyUrl): Video
    {
        $this->tinyUrl = $tinyUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Video
     */
    public function setTitle(string $title): Video
    {
        $this->title = $title;
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
     * @return Video
     */
    public function setUpdatedTime($updatedTime)
    {
        $this->updatedTime = $updatedTime;
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
     * @return Video
     */
    public function setUrl(string $url): Video
    {
        $this->url = $url;
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
     * @return Video
     */
    public function setVerified(bool $verified): Video
    {
        $this->verified = $verified;
        return $this;
    }

    /**
     * @return int
     */
    public function getViewsLastDay(): int
    {
        return $this->viewsLastDay;
    }

    /**
     * @param int $viewsLastDay
     * @return Video
     */
    public function setViewsLastDay(int $viewsLastDay): Video
    {
        $this->viewsLastDay = $viewsLastDay;
        return $this;
    }

    /**
     * @return int
     */
    public function getViewsLastHour(): int
    {
        return $this->viewsLastHour;
    }

    /**
     * @param int $viewsLastHour
     * @return Video
     */
    public function setViewsLastHour(int $viewsLastHour): Video
    {
        $this->viewsLastHour = $viewsLastHour;
        return $this;
    }

    /**
     * @return int
     */
    public function getViewsLastMonth(): int
    {
        return $this->viewsLastMonth;
    }

    /**
     * @param int $viewsLastMonth
     * @return Video
     */
    public function setViewsLastMonth(int $viewsLastMonth): Video
    {
        $this->viewsLastMonth = $viewsLastMonth;
        return $this;
    }

    /**
     * @return int
     */
    public function getViewsLastWeek(): int
    {
        return $this->viewsLastWeek;
    }

    /**
     * @param int $viewsLastWeek
     * @return Video
     */
    public function setViewsLastWeek(int $viewsLastWeek): Video
    {
        $this->viewsLastWeek = $viewsLastWeek;
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
     * @return Video
     */
    public function setViewsTotal(int $viewsTotal): Video
    {
        $this->viewsTotal = $viewsTotal;
        return $this;
    }
}
