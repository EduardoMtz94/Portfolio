<?php
namespace App\Traits;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Log;

trait FacebookTrait {
    public $client;

    public function getTimeline()
    {
        $response = ['error' => false];
        $token = $this->generateToken();

        if ($token['error']){
            $response['error'] = true;
            return $response;
        }
            
        $timeLine = $this->retrieveTimeline($token['access_token']);

        if ($timeLine['error']){
            $response['error'] = true;
            return $response;
        }

        return $timeLine;
        
    }

    protected function generateToken()
    {
        $this->client = new Client();

        $response = ['error' => false];

        try {
            $requestToken = $this->client->request('GET','https://graph.facebook.com/oauth/access_token',[
                'query' => [
                    'client_id'=>440658350453867,
                    'client_secret'=>'a07888f75c4fa6177694fd5f4a4a21b5',
                    'grant_type'=>'client_credentials'
                ]
            ]);
            if ($requestToken->getStatusCode() == 200){
                $response['access_token'] = json_decode($requestToken->getBody())->access_token;
            } else {
                $response = [
                    'error' => true, 
                    'message' => 'Error en la petición del token'
                ];
                Log::error(print_r($response,true));
                Log::debug(print_r($response,true));
            }

        } catch (BadResponseException $e) {
            $response = [
                'error' => true,
                'message' => 'Bad response: ' . $e->getMessage()
            ];
            Log::error('Bad response - Error al generar el token: ' . $e->getMessage());
            Log::debug('Bad response - Error al generar el token: ' . $e->getMessage());
        } catch (RequestException $e) {
            $response = [
                'error' => true, 
                'message' => 'Request exception: ' . $e->getMessage()
            ];
            Log::error('Request exception - Error al generar el token: ' . $e->getMessage());
            Log::debug(' Request exception - Error al generar el token: ' . $e->getMessage());
        } catch (Exception $e) {
            $response = [
                'error' => true, 
                'message' => 'Exception: ' . $e->getMessage()
            ];
            Log::error('Error al generar el token: ' . $e->getMessage());
            Log::debug('Error al generar el token: ' . $e);
        }

        return $response;
    }

    protected function retrieveTimeline($token)
    {
        $response = ['error' => false];

        try {
            $requestTimeline = $this->client->request('GET','https://graph.facebook.com/v9.0/instagram_oembed',[
                'query' => [
                    'url'=>'https://www.instagram.com/el_aleman_mma/',
                    'access_token'=>'bearer'.$token
                ]
            ]);

            if ($requestTimeline->getStatusCode() == 200){
                $response['timeline'] = json_decode($requestTimeline->getBody());
            } else {
                $response = [
                    'error' => true, 
                    'message' => 'Error en la petición del token'
                ];
                Log::error(print_r($response,true));
                Log::debug(print_r($response,true));
            }

        } catch (BadResponseException $e) {
            $response = [
                'error' => true,
                'message' => 'Bad response: ' . $e->getMessage()
            ];
            Log::error('Bad response - Error al traer el timeline: ' . $e->getMessage());
            Log::debug('Bad response - Error al traer el timeline: ' . $e->getMessage());
        } catch (RequestException $e) {
            $response = [
                'error' => true, 
                'message' => 'Request exception: ' . $e->getMessage()
            ];
            Log::error('Request exception - Error al traer el timeline: ' . $e->getMessage());
            Log::debug(' Request exception - Error al traer el timeline: ' . $e->getMessage());
        } catch (Exception $e) {
            $response = [
                'error' => true, 
                'message' => 'Exception: ' . $e->getMessage()
            ];
            Log::error('Error al traer el timeline: ' . $e->getMessage());
            Log::debug('Error al traer el timeline: ' . $e);
        }

        return $response;
    }
}