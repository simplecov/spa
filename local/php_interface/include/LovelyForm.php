<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

use \Bitrix\Main\Config\Option;

class LovelyForm
{
    private $request;
    private static $_instance = null;

    /**
     * LovelyForm constructor.
     */
    private function __construct()
    {
        $this->setRequest();
    }

    /**
     * @return LovelyForm instance
     */
    static public function getInstance() {
        if(is_null(self::$_instance))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Set $request integer
     */
    private function setRequest()
    {
        $postdata = file_get_contents("php://input");
        $this->request = json_decode($postdata);
    }

    /**
     * Get $request integer
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Send form data
     */
    public function sendForm()
    {
        $from = Option::get("main", "email_from");

        $to      = $this->request->email;
        $subject = '"ГРИНН-СПА" Сообщение от посетителя сайта';
        $message = $this->request->message;
        $headers = 'From: ' . $from . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if(mail($to, $subject, $message, $headers))
            echo 'y';
        else
            echo 'n';
    }
}

LovelyForm::getInstance()->sendForm();