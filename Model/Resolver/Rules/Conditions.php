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

namespace Mageplaza\AutoRelatedGraphQl\Model\Resolver\Rules;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Mageplaza\AutoRelated\Model\Rule;

/**
 * Class Conditions
 * @package Mageplaza\AutoRelatedGraphQl\Model\Resolver\Rules
 */
class Conditions implements ResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        if (!isset($value['model'])) {
            throw new LocalizedException(__('"model" value should be specified'));
        }

        /** @var Rule $rule */
        $rule = $value['model'];

        return $rule->arrayToDataModel($this->asArray($rule->getConditions()->asArray()));
    }

    /**
     * @param array $actions
     *
     * @return array
     */
    public function asArray(array $actions)
    {
        foreach ($actions as $key => $value) {
            if ($key === 'value' && is_array($value)) {
                $actions[$key] = implode(',', $value);
            }
            if (isset($value['value']) && is_array($value['value'])) {
                $actions[$key]['value'] = implode(',', $value['value']);
            }
            if ($key === 'conditions') {
                $actions[$key] = $this->asArray($value);
            }
        }

        return $actions;
    }
}
