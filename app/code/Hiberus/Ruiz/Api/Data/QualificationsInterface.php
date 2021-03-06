<?php

namespace Hiberus\Ruiz\Api\Data;

interface QualificationsInterface extends \Magento\Framework\Api\ExtensibleDataInterface {

    public const TABLE_NAME = 'hiberus_exam';
    public const COLUMN_ID = 'id_exam';

    /**
     * @return int
     */
    public function getIdExam();

    /**
     * @param int $idExam
     * @return $this
     */
    public function setIdExam($idExam);

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName);

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName);

    /**
     * @return double
     */
    public function getMark();

    /**
     * @param double $mark
     * @return $this
     */
    public function setMark($mark);

}
