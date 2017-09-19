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

namespace WowApps\DailymotionBundle\Service;

/**
 * Class DailymotionService
 *
 * @author Alexey Samara <lion.samara@gmail.com>
 * @package WowApps\DailymotionBundle\Service
 */
class DailymotionService
{
    /** @var array */
    private $config;

    /** @var array */
    private $fields;

    /**
     * DailymotionService constructor.
     *
     * @param array $config
     * @param array $fields
     */
    public function __construct(array $config, array $fields)
    {
        $this->config = $config;
        $this->fields = $fields;
    }
}
