<?php

namespace Hiberus\Ruiz\Model;

use Hiberus\Ruiz\Api\Data\QualificationsInterface;
use Magento\Framework\Model\AbstractModel;

class Qualifications extends AbstractModel implements QualificationsInterface
{

    protected function _construct() {
        $this->_init(\Hiberus\Ruiz\Model\ResourceModel\Qualifications::class);
    }

    /**
     * @inheritDoc
     */
    public function getIdExam() {
        return $this->getData('id_exam');
    }

    /**
     * @inheritDoc
     */
    public function setIdExam($idExam) {
        return $this->setData('id_exam', $idExam);
    }

    /**
     * @inheritDoc
     */
    public function getFirstName()
    {
        return $this->getData('firstname');
    }

    /**
     * @inheritDoc
     */
    public function setFirstName($firstName)
    {
        return $this->setData('firstname', $firstName);
    }

    /**
     * @inheritDoc
     */
    public function getLastName()
    {
        return $this->getData('lastname');
    }

    /**
     * @inheritDoc
     */
    public function setLastName($lastName)
    {
        return $this->setData('lastname', $lastName);
    }

    /**
     * @inheritDoc
     */
    public function getMark()
    {
        return $this->getData('mark');
    }

    /**
     * @inheritDoc
     */
    public function setMark($mark)
    {
        return $this->setData('mark', $mark);
    }
}
