<?php
/**
 * Developer: Hemant Kumar Singh Magento Developer
 * Website: http://www.wishusucess.com/
 */
namespace Wishusucess\CustomClass\Model\Plugin;

class AttributeMergerPlugin
{
    public function afterMerge(\Magento\Checkout\Block\Checkout\AttributeMerger $subject, $result)
    {
        if (array_key_exists('telephone', $result)) {
            $result['telephone']['additionalClasses'] = 'teliphone_number';
        }

        return $result;
    }
}