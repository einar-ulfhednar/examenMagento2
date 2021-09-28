<?php

namespace Hiberus\Ruiz\Block;

use Hiberus\Ruiz\Api\QualificationsRepositoryInterface;
use Hiberus\Ruiz\Api\Data\QualificationsInterfaceFactory;
use Hiberus\Ruiz\Model\Qualifications;

class Index extends \Magento\Framework\View\Element\Template
{

    protected $registry;
    protected $qualifications;
    protected $qualificationsRepository;
    protected $qualificationsInterfaceFactory;
    protected $qualificationsResource;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry                      $registry,
        Qualifications                                   $qualifications,
        QualificationsRepositoryInterface                $qualificationsRepository,
        QualificationsInterfaceFactory                   $qualificationsInterfaceFactory,
        \Hiberus\Ruiz\Model\ResourceModel\Qualifications $qualificationsResource,
        array                                            $data = []
    ) {
        $this->registry = $registry;
        $this->qualifications = $qualifications;
        $this->qualificationsRepository = $qualificationsRepository;
        $this->qualificationsInterfaceFactory = $qualificationsInterfaceFactory;
        $this->qualificationsResource = $qualificationsResource;
        parent::__construct($context, $data);
    }

    public function getQualifications() {
        $createQualification = $this->insertQualification('carlos', 'jimenez', 10);
        return $this->qualificationsRepository->getById($createQualification);

    }

    public function insertQualification($firstName, $lastName, $mark) {

        $qualification = $this->qualificationsInterfaceFactory->create();

        $qualification->setFirstName($firstName);
        $qualification->setLastName($lastName);
        $qualification->setMark($mark);

        $this->qualificationsResource->save($qualification);

        return $qualification->getIdExam();
    }

}
