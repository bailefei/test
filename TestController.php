<?php
namespace company\controllers;

use yii\web\Controller;
use common\models\Product;

/**
 * CustomerController implements the CRUD actions for Customer model.
 */
class TestController extends Controller
{

    /**
     * test
     * @author bai
     */
    public function actionIndex()
    {
        pt('test',true);
    }
    
    public function actionNotice($id=0){
        $id =114;
        $model = $this->findModel($id);
        if (!$model){
            pt('错误',true);
        }
        pt($model->advanceNotice,true);
    }
    
    protected function findModel($id)
    {
        return Product::find()->where([
            'id' => $id,
        ])->one();
    }
}
