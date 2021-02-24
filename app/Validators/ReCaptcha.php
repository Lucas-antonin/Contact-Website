<?php

namespace App\Validators;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ReCaptcha
{
    public function validate($attribute, $value, $parameters, $validator){

        $client = new Client();

        $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify',
            ['form_params'=>
                [
                    'secret'=>env('GOOGLE_RECAPTCHA_SECRET'),
                    'response'=>$value,
                    'recaptcha'=>'Please ensure that you are a human!'
                ]
            ]
        );

        $body = json_decode((string)$response->getBody());
        return $body->success;
    }

}
