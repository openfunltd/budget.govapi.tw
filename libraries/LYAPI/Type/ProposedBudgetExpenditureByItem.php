<?php

class LYAPI_Type_ProposedBudgetExpenditureByItem extends LYAPI_Type
{
    public static function getTypeSubject()
    {
        return '預算案-各項費用彙計表';
    }

    public static function getFilterFieldsInfo(): array
    {
        return [
            '單位代碼' => [
                'es_field' => '單位代碼.keyword',
            ],
            '年度' => [
                'es_field' => '年度',
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
            '第一級用途別科目編號' => [
                'es_field' => '第一級用途別科目編號.keyword',
            ],
            '第一級用途別科目名稱' => [
                'es_field' => '第一級用途別科目名稱.keyword',
            ],
            '第二級用途別科目編號' => [
                'es_field' => '第二級用途別科目編號.keyword',
            ],
            '第二級用途別科目名稱' => [
                'es_field' => '第二級用途別科目名稱.keyword',
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
            '第一級用途別科目名稱',
            '第二級用途別科目名稱',
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
