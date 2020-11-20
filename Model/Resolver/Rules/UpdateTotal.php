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
 * @package     Mageplaza_AutoRelatedGraphQL
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */
declare(strict_types=1);

namespace Mageplaza\AutoRelatedGraphQL\Model\Resolver\Rules;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Mageplaza\AutoRelated\Api\AutoRelatedRepositoryInterface;

/**
 * Class UpdateTotal
 * @package Mageplaza\AutoRelatedGraphQL\Model\Resolver\Rules
 */
class UpdateTotal implements ResolverInterface
{

    /**
     * @var AutoRelatedRepositoryInterface
     */
    protected $autoRelatedRepository;

    /**
     * UpdateTotal constructor.
     *
     * @param AutoRelatedRepositoryInterface $autoRelatedRepository
     */
    public function __construct(AutoRelatedRepositoryInterface $autoRelatedRepository)
    {
        $this->autoRelatedRepository = $autoRelatedRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        if (!isset($args['ruleId']) || empty($args['ruleId'])) {
            throw new GraphQlInputException(__('The ruleId field is required'));
        }

        try {
            return $this->autoRelatedRepository->updateTotal($args['ruleId']);
        } catch (\Magento\Framework\Exception\InputException $e) {
            throw new GraphQlInputException(__('%1', $e->getMessage()));
        } catch (\Magento\Framework\Exception\NoSuchEntityException $e) {
            throw new GraphQlNoSuchEntityException(__('%1', $e->getMessage()));
        }
    }
}
