<?php namespace App\Services;

use Illuminate\Support\Facades\Log;

class SmsMessage {

    protected string $username;

    protected string $passcode;

    protected string $baseUrl;

    protected string $from;

    protected string $to;

    protected array $inputs;

    protected string $pattern;


    public function __construct($inputs = [])
    {
        $this->inputs = $inputs;

        $this->username= env("SMS_USERNAME");
        $this->passcode= env("SMS_PASSCODE");
        $this->baseUrl = env("SMS_BASE_URL");
        $this->from    = env("SMS_FROM");
        $this->pattern = "3fiff2ridz2ti8s";
    }

    public function inputs($inputs = []): self
    {
        $this->inputs = $inputs;

        return $this;
    }

    public function to($to): self
    {
        $this->to = $to;

        return $this;
    }

    public function from($from): self
    {
        $this->from = $from;

        return $this;
    }

    public function send(): mixed
    {

        if (!$this->from || !$this->to || !count($this->inputs)) {
            throw new \Exception('SMS not correct');
        }

        try {
            $client = new \SoapClient($this->baseUrl);

            return $client->sendPatternSms(
                        $this->from, $this->to,
                        $this->username, $this->passcode, 
                        $this->pattern, $this->inputs
                    );

        } catch (\Exception $e) {
            throw $e;
        }

    }

}