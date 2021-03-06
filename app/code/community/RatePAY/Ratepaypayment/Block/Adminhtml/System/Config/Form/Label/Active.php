<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category RatePAY
 * @package RatePAY_Ratepaypayment
 * @copyright Copyright (c) 2015 RatePAY GmbH (https://www.ratepay.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

class RatePAY_Ratepaypayment_Block_Adminhtml_System_Config_Form_Label_Active
        extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected $_element = null;

    /**
     * Return element html
     *
     * @param  Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $elementData = $element->getData();
        $status = ((int) $elementData['value'] == 1);
        $text = ($status) ? 'Active' : 'Inactive';
        $color = ($status) ? 'green' : 'red';
        return '<p style="font-weight:bold; color: ' . $color . '">' . Mage::helper('ratepaypayment')->__($text) . '</p>';
    }
}
