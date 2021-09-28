<?php

namespace Hiberus\Ruiz\Plugin\Ruiz;

class QualificationsPlugin
{
    public function afterGetMark(
        \Hiberus\Ruiz\Model\Qualifications $subject,
        $result
    ) {
        if ($result < 5) {
            $result = 4.9;
        }
        return $result;
    }
}
