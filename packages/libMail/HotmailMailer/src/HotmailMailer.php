<?php

namespace libMail\HotmailMailer;

use GuzzleHttp\Client;

class HotmailMailer
{
    protected $client;

    public function envioDoEmail($titulo, $mensagem, $emailEnviador, $emailRecebidor, $token)
    {
            $cliente = new Client();
            $response = $cliente->post('https://graph.microsoft.com/v1.0/me/sendMail', [
                'headers' => [
                    'Authorization' => "Bearer {$token}",
                    'Content-type' => 'application/json',
                ],
                'verify' => storage_path('certs/cacert.pem'),
                'json' => [
                    "message" => [
                        "subject" => "{$titulo}",
                        "body" => [
                            "contentType" => "Text",
                            "content" => "{$mensagem}"
                        ],
                        "toRecipients" => [
                            [
                                "emailAddress" => [
                                    "address" => "{$emailRecebidor}"
                                ]
                            ]
                        ],
                        "ccRecipients" => [
                            [
                                "emailAddress" => [
                                    "address" => "{$emailEnviador}"
                                ]
                            ]
                        ]
                    ],
                    "saveToSentItems" => "false"
                ]
            ]);

        return $response->getBody()->getContents();
    }
}