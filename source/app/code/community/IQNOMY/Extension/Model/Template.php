<?php
/**
 * @category    IQNOMY
 * @package     IQNOMY_Extension
 * @copyright   Copyright (c) 2013-2015 IQNOMY (http://www.iqnomy.com)
 * @license     http://opensource.org/licenses/MIT The MIT License (MIT)
 */
class IQNOMY_Extension_Model_Template extends Mage_Core_Model_Abstract
{        
    protected function _construct()
    {
        $this->_init("iqnomy_extension/template");
    }
}