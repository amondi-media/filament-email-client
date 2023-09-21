<?php

namespace Mediusware\FilamentEmailClient\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;
use Webklex\IMAP\Facades\Client;

class Mailbox extends Model
{
    use Sushi;

    public function getRows()
    {
        // // API
        // $products = Http::get('https://dummyjson.com/products')->json();

        // // filtering some attributes
        // $products = Arr::map($products['products'], function ($item) {
        //     return Arr::only($item,
        //         [
        //             'id',
        //             'title',
        //             'description',
        //             'price',
        //             'rating',
        //             'brand',
        //             'category',
        //             'thumbnail',
        //         ]
        //     );
        // });

        // return $products;

        $client = Client::account('default');

        $client->connect();

        $folders = $client->getFolders();

        $data = [];

        foreach ($folders as $folder) {
            $messages = $folder->messages()->all()->limit(10)->get();
            if ($folder->name == 'INBOX') {
                foreach ($messages as $key => $message) {
                    $data[] = [
                        'id' => $key + 1,
                        'subject' => $message->getSubject()->toArray()[0],
                        'message' => $message->getHTMLBody(),
                        'attachment' => $message->getAttachments()->count(),
                    ];

                    //Move the current Message to 'INBOX.read'
                    // if ($message->move('INBOX.read') == true) {
                    //     echo 'Message has ben moved';
                    // } else {
                    //     echo 'Message could not be moved';
                    // }
                }
            }
        }

        // dd($data);
        // $data = Arr::map($messages, function ($item) {
        //     return Arr::only($item,
        //         [
        //             'id',
        //             'subject',
        //             'htmlBody',
        //             'price',
        //             'rating',
        //             'brand',
        //             'category',
        //             'thumbnail',
        //         ]
        //     );
        // });

        return $data;
    }
}
