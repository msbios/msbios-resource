<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Resource\Record;

use MSBios\Resource\Record;

/**
 * Class Setting
 * @package MSBios\Resource\Record
 */
class Setting extends Record implements TitleAwareInterface
{
    use TitleAwareTrait;

    /**
     * @var
     */
    private $identifier;

    /**
     * @var
     */
    private $baseUrl;

    /**
     * @var
     */
    private $sslBaseUrl;

    /**
     * @var
     */
    private $cdnUrl;

    /**
     * @var
     */
    private $sslCdnUrl;

    /**
     * @var bool
     */
    private $forcessl = false;

    /**
     * @var string
     */
    private $locale = 'en_US';

    /**
     * @var string
     */
    private $timezone = "America/New_York";

    /**
     * @var array
     */
    private $options = [];

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param $identifier
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @param $baseUrl
     * @return $this
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSslBaseUrl()
    {
        return $this->sslBaseUrl;
    }

    /**
     * @param $sslBaseUrl
     * @return $this
     */
    public function setSslBaseUrl($sslBaseUrl)
    {
        $this->sslBaseUrl = $sslBaseUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getCdnUrl()
    {
        return $this->cdnUrl;
    }

    /**
     * @param $cdnUrl
     * @return $this
     */
    public function setCdnUrl($cdnUrl)
    {
        $this->cdnUrl = $cdnUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getSslCdnUrl()
    {
        return $this->sslCdnUrl;
    }

    /**
     * @param $sslCdnUrl
     * @return $this
     */
    public function setSslCdnUrl($sslCdnUrl)
    {
        $this->sslCdnUrl = $sslCdnUrl;
        return $this;
    }

    /**
     * @return bool
     */
    public function isForcessl()
    {
        return $this->forcessl;
    }

    /**
     * @param $forcessl
     * @return $this
     */
    public function setForcessl($forcessl)
    {
        $this->forcessl = $forcessl;
        return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param $locale
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param $timezone
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }
}
