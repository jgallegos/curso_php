<?

class EmailService(){

	public __construct($data){

	}

	public function sendEmail(){

	}
}

class TwitterService(){

	public __construct($data){

	}

	public function sendTweet(){
		
	}
}

class SmsService(){

	public __construct($data){

	}

	public function sendText(){
		
	}
}



class NotificationManager {
 
  public function sendNotification($type = '', $data)
  {
    switch($type){
      case "email": 
        $notification = new EmailService($data);
        $notification->sendEmail();
        break;
      case "twitter":
        $notification = new TwitterService($data);
        $notification->sendTweet();
        break;
      case "sms":
        $notification = new SmsService($data);
        $notification->sendText();
        break;
      default:
        break;
    }
  }
}


interface NotificationInterface {
 public function setData($data);
 public function sendNotification();
}


class TwitterAdapter implements NotificationInterface
{
	protected $_data;

	public function setData($data){
		$this->_data = $data;
	}

	public function sendNotification()
	{
		$twitterClient = new TwitterService();
		$twitterClient->setMessage($this->_data['message']);
		$twitterClient->sendTweet();
	}
}

class EmailAdapter implements NotificationInterface 
{
	protected $_data;

	public function setData($data){
		$this->_data = $data;
	}

	public function sendNotification()
	{
		$emailClient = new EmailService();
		$emailClient->setTitle($this->_data['title']);
		$emailClient->setMessage($this->_data['message']);
		$emailClient->setFrom($this->_data['from']);
		$emailClient->setTo($this->_data['to']);
		$emailClient->sendEmail();
	}
}

class SmsAdapter implements NotificationInterface
{
	protected $_data;

	public function setData($data){
		$this->_data = $data;
	}

	public function sendNotification()
	{
		$smsClient = new SmsService();
		$smsClient->setRecipient($this->_data['recipient']);
		$smsClient->setMessage($this->_data['message']);
		$smsClient->sendText();
	}
}


class NotificationManager2 {
 
  public function sendNotification(NotificationInterface $notification, $data)
  {
    $notification->setData($data);
    $notification->sendNotification();
  }
}





