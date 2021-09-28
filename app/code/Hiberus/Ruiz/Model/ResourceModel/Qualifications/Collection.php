<?php

namespace Hiberus\Ruiz\Model\ResourceModel\Qualifications;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Hiberus\Ruiz\Model\Qualifications', 'Hiberus\Ruiz\Model\ResourceModel\Qualifications');
    }
}
