<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_AutoRelatedGraphQl
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */
declare(strict_types=1);

namespace Mageplaza\AutoRelatedGraphQl\Model\Resolver\Rules\FilterArgument;

use Magento\Framework\GraphQl\ConfigInterface;
use Magento\Framework\GraphQl\Query\Resolver\Argument\FieldEntityAttributesInterface;

/**
 * Class EntityAttributesForAst
 * @package Mageplaza\AutoRelatedGraphQl\Model\Resolver\Rules\FilterArgument
 */
class EntityAttributesForAst implements FieldEntityAttributesInterface
{

    /**
     * @var ConfigInterface
     */
    protected $config;

    /**
     * EntityAttributesForAst constructor.
     *
     * @param ConfigInterface $config
     */
    public function __construct(ConfigInterface $config)
    {
        $this->config = $config;
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityAttributes(): array
    {
        $fields = [];
        foreach ($this->config->getConfigElement('MageplazaAutoRelatedRules')->getFields() as $field) {
            $fieldName          = $field->getName();
            $fields[$fieldName] = $fieldName;
        }

        return $fields;
    }
}
