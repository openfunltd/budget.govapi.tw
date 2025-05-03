<?php

class LYAPI_Type_ProposedBudgetExpenditureByAgency extends LYAPI_Type
{
    public static function getTypeSubject()
    {
        return '預算案-歲出機關別預算表';
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
            '編號' => [
                'es_field' => '編號.keyword',
            ],
            '款' => [
                'es_field' => '款.keyword',
            ],
            '款名' => [
                'es_field' => '款名.keyword',
            ],
            '項' => [
                'es_field' => '項.keyword',
            ],
            '項名' => [
                'es_field' => '項名.keyword',
            ],
            '目' => [
                'es_field' => '目.keyword',
            ],
            '目名' => [
                'es_field' => '目名.keyword',
            ],
            '節' => [
                'es_field' => '節.keyword',
            ],
            '節名' => [
                'es_field' => '節名.keyword',
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
            '款名',
            '項名',
            '目名',
            '節名',
            '說明',
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
