<?php   
    namespace app\models;   
    use yii\base\Model;
     use Yii;   
       
    class Userdetails extends Model   
    {   
        /**  
         * @inheritdoc  
         */   
        public static function tableName()   
        {   
            return 'Userdetails';   
        }   
           
        /**  
         * @inheritdoc  
         */   
        public function rules()   
        {   
            return [   
                [['name1'], 'string'],   
                [['email'], 'email']
            ];   
        }   
    }  