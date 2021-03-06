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
        $createQualification = $this->qualificationsInterfaceFactory->create();
        return $createQualification->getCollection();
    }

    public function getHighestNote() {
        $createQualification = $this->qualificationsInterfaceFactory->create();
        $qualifications = $createQualification->getCollection()->getData();
        $highestNote = 0;

        foreach ($qualifications as $qualification) {
            if ($qualification['mark'] > $highestNote) {
                $highestNote = $qualification['mark'];
            }
        }
        return $highestNote;
    }

    public function getHighestThreeNotes() {
        $createQualification = $this->qualificationsInterfaceFactory->create();
        $qualifications = $createQualification->getCollection()->getData();

        uasort($qualifications, function ($a, $b) {
            if ($a['mark'] == $b['mark'])
                return 0;
            return (($a['mark'] < $b['mark']) ? 1 : -1);
        });

        return array_slice($qualifications, 0, 3);
    }
}
