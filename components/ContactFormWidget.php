<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class ContactFormWidget extends Widget {
	public $name;
    public $email;    
    public $enquiry;    

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'enquiry'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],            
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])                
                ->setTextBody($this->enquiry)
                ->send();

            return true;
        } else {
            return false;
        }
    }
}
?>