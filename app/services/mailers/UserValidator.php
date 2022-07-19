<?php namespace Services\Mailers;

class UserValidator extends Mailer {

    public function accountActivation()
    {
        $this->subject = 'Active account';
        $this->view = 'emails.user.activate';

        return $this;
    }

    public function welcome()
    {
        $this->subject = 'Welcome ';
        $this->view = 'emails.user.welcome';

        return $this;
    }
}