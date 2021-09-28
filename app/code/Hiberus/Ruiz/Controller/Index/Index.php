<?php

namespace Hiberus\Ruiz\Controller\Index;

use Hiberus\Ruiz\Api\QualificationsRepositoryInterface;
use Hiberus\Ruiz\Api\Data\QualificationsInterfaceFactory;
use Hiberus\Ruiz\Model\ResourceModel\Qualifications;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResponseInterface;

class Index implements HttpGetActionInterface
{

    protected \Magento\Framework\View\Result\PageFactory $pageFactory;
    protected QualificationsRepositoryInterface $qualificationsRepository;
    protected QualificationsInterfaceFactory $qualificationsInterfaceFactory;
    protected Qualifications $qualificationsResource;

    public function __construct(
        \Magento\Framework\App\Action\Context      $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        QualificationsRepositoryInterface          $qualificationsRepository,
        QualificationsInterfaceFactory             $qualificationsInterfaceFactory,
        Qualifications                             $qualificationsResource

    ) {
        $this->pageFactory = $pageFactory;
        $this->qualificationsRepository = $qualificationsRepository;
        $this->qualificationsInterfaceFactory = $qualificationsInterfaceFactory;
        $this->qualificationsResource = $qualificationsResource;
    }

    public function execute()
    {
        return $this->pageFactory->create();
    }
}
