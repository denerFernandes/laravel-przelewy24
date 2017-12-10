<?php
/**
 * Created by PhpStorm.
 * User: netborg
 * Date: 10.12.17
 * Time: 14:03
 */

namespace NetborgTeam\P24;


class TransactionShortResult extends P24Response
{

    function parseResult($result)
    {
        if (is_object($result)) {
            return new TransactionShort($result);
        }

        return null;
    }

}