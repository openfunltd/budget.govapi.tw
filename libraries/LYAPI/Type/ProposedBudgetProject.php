<?php

class LYAPI_Type_ProposedBudgetProject extends LYAPI_Type
{
    public static function getTypeSubject()
    {
        return '預算案-工作計畫';
    }

    public static function getFilterFieldsInfo(): array
    {
        return [
            '單位代碼' => [
                'es_field' => '單位代碼.keyword',
            ],
            '年度' => [
                'es_field' => '年度.keyword',
            ],
            '單位' => [
                'es_field' => '單位.keyword',
            ],
            '工作計畫編號' => [
                'es_field' => '工作計畫編號.keyword',
            ],
            '工作計畫名稱' => [
                'es_field' => '工作計畫名稱.keyword',
            ],
        ];
    }

    public static function getFieldMap()
    {
        return [
            '_id' => '_id',
        ];
    }

    public static function getIdFieldsInfo()
    {
        return [
            '_id' => [
            ],
        ];
    }

    public static function aggMap()
    {
        return [
            '單位代碼' => ['unit', ['機關編號', '機關名稱']],
        ];
    }

    public static function queryFields()
    {
        return [
            '工作計畫名稱',
            '計畫內容',
            '預期成果',
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
