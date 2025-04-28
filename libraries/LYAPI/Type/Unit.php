<?php

class LYAPI_Type_Unit extends LYAPI_Type
{
    public static function getTypeSubject()
    {
        return '預算單位';
    }

    public static function getFilterFieldsInfo(): array
    {
        return [];
    }

    public static function getIdFieldsInfo()
    {
        return [
            '_id' => [
            ],
        ];
    }

    public static function getFieldMap()
    {
        return [
        ];
    }

    public static function aggMap()
    {
        return [
        ];
    }

    public static function queryFields()
    {
        return [
            '機關名稱',
        ];
    }


    public static function sortFields()
    {
        return [
        ];
    }

    public static function getRelations()
    {
        return [];
    }
}
