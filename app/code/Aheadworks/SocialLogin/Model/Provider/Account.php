<?php
/**
 * Aheadworks Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://ecommerce.aheadworks.com/end-user-license-agreement/
 *
 * @package    SocialLogin
 * @version    1.6.3
 * @copyright  Copyright (c) 2020 Aheadworks Inc. (http://www.aheadworks.com)
 * @license    https://ecommerce.aheadworks.com/end-user-license-agreement/
 */
namespace Aheadworks\SocialLogin\Model\Provider;

/**
 * Class Account
 */
class Account extends \Magento\Framework\DataObject implements AccountInterface
{
    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return $this->getData(self::TYPE);
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        $this->setData(self::TYPE, $type);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstName()
    {
        return $this->getData(self::FIRST_NAME);
    }

    /**
     * {@inheritdoc}
     */
    public function setFirstName($name)
    {
        $this->setData(self::FIRST_NAME, $name);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastName()
    {
        return $this->getData(self::LAST_NAME);
    }

    /**
     * {@inheritdoc}
     */
    public function setLastName($name)
    {
        $this->setData(self::LAST_NAME, $name);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * {@inheritdoc}
     */
    public function setEmail($email)
    {
        $this->setData(self::EMAIL, $email);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getImageUrl()
    {
        return $this->getData(self::IMAGE_URL);
    }

    /**
     * {@inheritdoc}
     */
    public function setImageUrl($imageUrl)
    {
        $this->setData(self::IMAGE_URL, $imageUrl);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getSocialId()
    {
        return $this->getData(self::SOCIAL_ID);
    }

    /**
     * {@inheritdoc}
     */
    public function setSocialId($socialId)
    {
        $this->setData(self::SOCIAL_ID, $socialId);
        return $this;
    }
}
