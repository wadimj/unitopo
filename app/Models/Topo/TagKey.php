<?php


namespace App\Models\Topo;


class TagKey
{
    //Concrete tags
    public const TYPE = 'type';
    public const LENGTH = 'length';
    public const LOOSE = 'loose';
    public const TOP_PICK = 'top-pick';

    public const CONCRETE_TAGS = [
        self::TYPE => 'Type',
        self::LENGTH => 'Length',
        self::LOOSE => 'Is loose',
        self::TOP_PICK => 'Top Pick',
    ];


    //Virtual tags
    public const ASCENTS = 'ascents';
    public const MARKS = 'marks';

    public const VIRTUAL_TAGS = [
        self::ASCENTS => 'No. of registered ascents',
        self::MARKS => 'Users mark'
    ];

    /**
     * @return array
     */
    public static function allTags()
    {
        return array_merge(self::CONCRETE_TAGS, self::VIRTUAL_TAGS);
    }
}
