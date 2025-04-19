<?php

class LYAPI_Type_ProposedBudgetSubBranchProject extends LYAPI_Type
{
    public static function getTypeSubject()
    {
        return '預算案-子分支計畫';
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
            '分支計畫編號' => [
                'es_field' => '分支計畫編號.keyword',
            ],
            '分支計畫名稱' => [
                'es_field' => '分支計畫名稱.keyword',
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
            '母科目編號' => ['proposed_budget_branch_project', ['工作計畫編號', '工作計畫名稱']],
        ];
    }

    public static function queryFields()
    {
        return [
            '工作計畫名稱',
            '分支計畫名稱',
            '承辦單位',
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
