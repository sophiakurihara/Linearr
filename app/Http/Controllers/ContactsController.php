<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact;
use Auth;

class ContactsController extends Controller
{
    public function importGoogleContact()
    {
        // get data from request
        $code = Request::get('code');

        // get google service
        $googleService = \OAuth::consumer('Google');

        // check if code is valid

        // if code is provided get user data and sign in
        if ( ! is_null($code)) {
            // This was a callback request from google, get the token
            $token = $googleService->requestAccessToken($code);

            // Send a request with it
            $result = json_decode($googleService->request('https://www.google.com/m8/feeds/contacts/default/full?alt=json&max-results=400'), true);

            // Going through the array to clear it and create a new clean array with only the email addresses
            $emails = []; // initialize the new array
            foreach ($result['feed']['entry'] as $contact) {
                if (isset($contact['gd$email'])) { // Sometimes, a contact doesn't have email address
                    $emails[] = $contact['gd$email'][0]['address'];
                }
            }
            
            return $emails;

        }
        
        // if not ask for permission first
        else {
            // get googleService authorization
            $url = $googleService->getAuthorizationUri();

            // return to google login url
            return redirect((string)$url);
        }
    }

    public function showContactsPage() {
        if(Auth::check()) {
            $contacts = Contact::where('belongs_to', '=', Auth::id())->get();

            return view('loggedin.contacts')->with(['contacts' => $contacts]);
        }
        return redirect()->action('UsersController@displayHomepage');
    }
}
