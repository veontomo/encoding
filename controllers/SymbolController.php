<?php

namespace app\controllers;

use Yii;
use app\models\Symbol;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
use yii\filters\AccessControl;

/**
 * SymbolController implements the CRUD actions for Symbol model.
 */
class SymbolController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true, // Has access
                        'roles' => ['@'], // '@' All logged in users / or your access role e.g. 'admin', 'user'
                    ],
                    [
                        'actions' => ['update', 'create'],
                        'allow' => false, // Do not have access
                        'roles'=>['?'], // Guests '?'
                    ],
                    [
                        'actions' => ['view', 'index'],
                        'allow' => true,
                        'roles'=>['?'], // Guests '?'
                    ],
                ],
            ],

        ];
        // return [
        //          'access' => [
        //              'class' => AccessControl::className(),
        //              'rules' => [
        //                  [
        //                      // 'actions' => ['login', 'error'], // Define specific actions
        //                      'allow' => true, // Has access
        //                      'roles' => ['@'], // '@' All logged in users / or your access role e.g. 'admin', 'user'
        //                  ],
        //                  [
        //                      'allow' => false, // Do not have access
        //                      'roles'=>['?'], // Guests '?'
        //                  ],
        //              ],
        //          ],
        //      ];
    }

    /**
     * Lists all Symbol models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Symbol::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Symbol model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Symbol model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Symbol;
        $post = Yii::$app->request->post();
        if (array_key_exists('Symbol', $post)){
            $attrs = $model->attributeLabels();
            foreach ($attrs as $attr => $value) {
                if (array_key_exists($attr, $post['Symbol']) && $post['Symbol'][$attr] == ''){
                    $post['Symbol'][$attr] = null;
                }
            }
        }

        if ($model->load($post)) {
            if ($model->save()){
                $idToInsert = [];
                $key = 'category';  // key name corresponding to checked categories in the post array
                if (array_key_exists($key, $post)){
                    $categoryIds = $post[$key];
                    if ($categoryIds){
                        foreach ($categoryIds as $categoryId => $value) {
                            $idToInsert[] = $categoryId;
                        }
                    }
                }
                $model->setLinksToCategories($idToInsert);
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Symbol model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $post = Yii::$app->request->post();

        if (array_key_exists('Symbol', $post)){
            $attrs = $model->attributeLabels();
            foreach ($attrs as $attr => $value) {
                if (array_key_exists($attr, $post['Symbol']) && $post['Symbol'][$attr] == ''){
                    $post['Symbol'][$attr] = null;
                }
            }
        }

        if ($model->load($post)) {
            // print_r($post);
            // die();
            if ($model->save()){
                $idToInsert = [];
                $key = 'category';  // key name corresponding to checked categories in the post array
                if (array_key_exists($key, $post)){
                    $categoryIds = $post[$key];

                    if ($categoryIds){
                        foreach ($categoryIds as $categoryId => $value) {
                            $idToInsert[] = $categoryId;
                        }
                    }
                }
                $model->setLinksToCategories($idToInsert);
                return $this->redirect(['view', 'id' => $model->id]);
            }
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model
            ]);
        }
    }

    /**
     * Deletes an existing Symbol model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $id = $model->id;

        if (isset($id)){
            /// remove records from category_symbol table
            Yii::$app->db->createCommand('
                DELETE FROM category_symbol WHERE
                symbol_id = :sId', [
                    ':sId' => $id
            ])->execute();
            $model->delete();
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the Symbol model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Symbol the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Symbol::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
