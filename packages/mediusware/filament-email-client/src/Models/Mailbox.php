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
        // $client = Client::account('default');

        // $client->connect();

        // $folders = $client->getFolders();

        // $messages = [];

        // foreach ($folders as $folder) {
        //     $messages[] = $folder->messages()->all()->get();

        //     // foreach ($messages as $message) {
        //     //     echo $message->getSubject().'<br />';
        //     //     echo 'Attachments: '.$message->getAttachments()->count().'<br />';
        //     //     echo $message->getHTMLBody();

        //     //     //Move the current Message to 'INBOX.read'
        //     //     // if ($message->move('INBOX.read') == true) {
        //     //     //     echo 'Message has ben moved';
        //     //     // } else {
        //     //     //     echo 'Message could not be moved';
        //     //     // }
        //     // }
        // }

        // dd($messages);

        // API
        $products = Http::get('https://dummyjson.com/products')->json();

        // filtering some attributes
        $products = Arr::map($products['products'], function ($item) {
            return Arr::only($item,
                [
                    'id',
                    'title',
                    'description',
                    'price',
                    'rating',
                    'brand',
                    'category',
                    'thumbnail',
                ]
            );
        });

        return $products;
    }
}
