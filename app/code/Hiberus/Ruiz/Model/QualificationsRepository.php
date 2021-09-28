<?php

namespace Hiberus\Ruiz\Model;

use Hiberus\Ruiz\Api\QualificationsRepositoryInterface;
use Hiberus\Ruiz\Api\Data\QualificationsInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Tests\NamingConvention\true\mixed;

class QualificationsRepository implements QualificationsRepositoryInterface
{

    /**
     * @var ResourceModel\Qualifications
     */
    protected ResourceModel\Qualifications $qualificationsResource;
    /**
     * @var \Hiberus\Ruiz\Api\Data\QualificationsInterfaceFactory
     */
    protected \Hiberus\Ruiz\Api\Data\QualificationsInterfaceFactory $qualificationsInterfaceFactory;

    /**
     * @param ResourceModel\Qualifications $qualificationsResource
     * @param \Hiberus\Ruiz\Api\Data\QualificationsInterfaceFactory $qualificationsInterfaceFactory
     */
    public function __construct(
        \Hiberus\Ruiz\Model\ResourceModel\Qualifications $qualificationsResource,
        \Hiberus\Ruiz\Api\Data\QualificationsInterfaceFactory $qualificationsInterfaceFactory
    ) {
        $this->qualificationsResource = $qualificationsResource;
        $this->qualificationsInterfaceFactory = $qualificationsInterfaceFactory;
    }


    /**
     * @param QualificationsInterface $qualificationsInterface
     * @return QualificationsInterface
     * @throws CouldNotSaveException
     */
    public function save(
        QualificationsInterface $qualificationsInterface
    ) {
        try {
            $this->qualificationsResource->save($qualificationsInterface);
        } catch(\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }

        return $qualificationsInterface;

    }

    /**
     * @param int $idExam
     * @return mixed
     */
    public function getById($idExam)
    {
        try {
            $qualificationsInterface = $this->qualificationsInterfaceFactory->create();
            $qualificationsInterface->setIdExam($idExam);
            $this->qualificationsResource->load($qualificationsInterface, $idExam);
        } catch (\Exception $e) {
            $qualificationsInterface = $this->qualificationsInterfaceFactory->create();
        }

        return $qualificationsInterface;
    }

    /**
     * @param QualificationsInterface $qualificationsInterface
     * @return bool
     */
    public function delete(\Hiberus\Ruiz\Api\Data\QualificationsInterface $qualificationsInterface)
    {
        try {
            $this->qualificationsResource->delete($$qualificationsInterface);
        } catch (\Exception $e) {
            return false;
        }
        return true;
    }

    /**
     * @param int $idExam
     * @return bool
     */
    public function deleteById($idExam)
    {
        return $this->delete($this->getById($idExam));
    }

}
