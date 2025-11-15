<?php

namespace Site\Feedback;

use Bitrix\Main\Entity;
use Bitrix\Main\Type;


class FeedbackTable extends Entity\DataManager
{
    public static function getTableName()
    {
        return 'site_feedback';
    }

    public static function getMap()
    {
 
        return [

                new Entity\IntegerField('ID',
                    
                        ['primary' => true,
                            'autocomplete' => true,
                            ]),
                new Entity\StringField('USER_NAME'),
                new Entity\TextField('MESSAGE'),
                new Entity\IntegerField('RATING'),
                new Entity\BooleanField('ACTIVE', [
                    'values' => ['N','Y'],
                    'default_value' => 'Y',

                ]),

                new Entity\DatetimeField('DATE_CREATE',[
                    'default_value' => function() {
                        return new Type\DateTime();
                    }
                ]),

                    ];

    }
}