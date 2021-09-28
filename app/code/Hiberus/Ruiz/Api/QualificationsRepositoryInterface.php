<?php

namespace Hiberus\Ruiz\Api;

interface QualificationsRepositoryInterface {



    /**
     * @param \Hiberus\Ruiz\Api\Data\QualificationsInterface $qualificationsInterface
     * @return \Hiberus\Ruiz\Api\Data\QualificationsInterface
     */
    public function save(\Hiberus\Ruiz\Api\Data\QualificationsInterface $qualificationsInterface);

    /**
     * @param $idExam
     * @return \Hiberus\Ruiz\Api\Data\QualificationsInterface
     */
    public function getById($idExam);

    /**
     * @param \Hiberus\Ruiz\Api\Data\QualificationsInterface $qualificationsInterface
     * @return bool
     */
    public function delete(\Hiberus\Ruiz\Api\Data\QualificationsInterface $qualificationsInterface);

    /**
     * @param $idExam
     * @return bool
     */
    public function deleteById($idExam);
}
