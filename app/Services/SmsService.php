<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsService
{
    protected $apiKey;
    protected $senderId;
    protected $apiUrl;

    public function __construct()
    {
        $this->apiKey = config('services.sms.api_key');
        $this->senderId = config('services.sms.sender_id');
        $this->apiUrl = 'http://bulksmsbd.net/api/smsapi?api_key=VxS791jyKCe1xnFy9iGi&type=text&number=Receiver&senderid=8809617618553&message=TestSMS';
    }

    public function sendSms($number, $message)
    {
        $response = Http::get($this->apiUrl, [
            'api_key' => $this->apiKey,
            'type' => 'text',
            'number' => $number,
            'senderid' => $this->senderId,
            'message' => $message,
        ]);

        return $response->json();
    }
}
