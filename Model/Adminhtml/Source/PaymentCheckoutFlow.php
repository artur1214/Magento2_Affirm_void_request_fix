<?php
/**
 * Astound
 * NOTICE OF LICENSE
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to codemaster@astoundcommerce.com so we can send you a copy immediately.
 *
 * @category  Affirm
 * @package   Astound_Affirm
 * @copyright Copyright (c) 2016 Astound, Inc. (http://www.astoundcommerce.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Astound\Affirm\Model\Adminhtml\Source;

use Magento\Framework\Option\ArrayInterface;
use Astound\Affirm\Model\CheckoutFlowType;

/**
 * Class PaymentCheckoutFlow
 * Source model for the system configuration
 * retrieve payment checkout flow options.
 *
 * @package Astound\Affirm\Model\Adminhtml\Source
 */
class PaymentCheckoutFlow implements ArrayInterface
{
    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => CheckoutFlowType::CHECKOUT_FLOW_REDIRECT,
                'label' => __('Redirect'),
            ],
            [
                'value' => CheckoutFlowType::CHECKOUT_FLOW_MODAL,
                'label' => __('Modal'),
            ]
        ];
    }
}
