<?php
/**
 * 表country的控制器.
 * User: weifengli
 * Date: 2015/1/6
 */

namespace app\controllers;


use yii\data\Pagination;
use yii\web\Controller;
use app\models\Country;

class CountryController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();
        $pageination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pageination->offset)
            ->limit($pageination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pageination,
        ]);
    }
} 