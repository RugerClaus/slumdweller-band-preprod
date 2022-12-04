<?php



class Mail {
    public string $name;
    public string $email;
    public string $subject;
    public string $message;
    public bool $post;

    public function __construct($name,$email,$subject,$message,$post){
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
        $this->post = $post;
    }
    public function send() {
        if($this->post === true) {
            $to = 'slumdweller@slumdweller.band';
            $subject = $this->subject;
            $message = '<p>' . $this->message . '</p>';
            $headers  = "From: " . strip_tags($this->name) . "\r\n";
            $headers .= "Reply-To: " . strip_tags($this->email) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            
            if(preg_match("/^[a-zA-Z-' ]*$/", $this->name)) {
                if(filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                    if(preg_match("/^[a-zA-Z-' ]*$/", $this->subject)) {
                        mail($to,$subject,$message,$headers);
                        $this->save();
                    }
                    else {
                        echo "invalid characters in 'Subject' field";
                    }
                }else {
                    echo "Invalid characters in 'Email' field";
                }
            }
            else {
                echo "Invalid Characters in 'Name' field";
            }
        }
        return "message did not send";
        
    }
    
    protected function save() {
        include 'connection.php';
        $name = $this->name;
        $email = $this->email;
        $subject = $this->subject;
        $message = $this->message;


        $slumdweller->query("INSERT INTO submissions (name,email,subject,message) values('$name','$email','$subject','$message')");
    }
}