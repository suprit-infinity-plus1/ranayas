<?php
namespace App\Model;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use \GuzzleHttp\Client;

class SMS implements ShouldQueue
{
    public static $user;
    public static $password;
    public static $senderid;
    public static $route;
    public static $peid;

    public static function init()
    {
        self::$user = config('services.sms.user');
        self::$password = config('services.sms.password');
        self::$senderid = config('services.sms.senderid');
        self::$route = config('services.sms.route');
        self::$peid = config('services.sms.peid');
    }

    public static function send($mobile, $text, $templateid = '')
    {
        self::init();
        $val = Validator::make(['mobile' => $mobile, 'text' => $text], [
            'mobile' => 'required|digits:10',
            'text' => 'required|string|max:250',
        ]);
        if ($val->fails()) {
            Log::info($val->errors());
            return;
        } else {
            try {
                $baseUrl = 'http://login.businesslead.co.in/api/mt/SendSMS?user=' . self::$user . '&password=' . self::$password . '&senderid=' . self::$senderid . '&channel=Trans&DCS=0&flashsms=0&number=' . $mobile . '&text=' . $text . '&route=' . self::$route . '&peid=' . self::$peid . '&dlttemplateid=' . $templateid;

                $client = new \GuzzleHttp\Client([
                    'http_errors' => false,
                ]);
                $res = $client->get($baseUrl);
                return;
            } catch (\Exception $ex) {
                Log::info('Error : ' . $ex->getMessage());
                return;
            }
        }
    }
}
