<?php

namespace Mediusware\FilamentEmailClient\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Sushi\Sushi;
use Webklex\IMAP\Facades\Client;

class Mailbox extends Model
{
    use Sushi;

    public function getRows()
    {
        return Cache::remember('users', 3600, function () {

            $client = Client::account('default');

            $client->connect();

            $folders = $client->getFolders();

            $data = [];

            foreach ($folders as $folder) {
                $messages = $folder->messages()->all()->limit(5)->get();
                if ($folder->name == 'INBOX') {
                    foreach ($messages as $message) {
                        $data[] = [
                            'id' => $message->getUid(),
                            'from' => $message->getFrom()[0]->mail,
                            'subject' => $message->getSubject()[0],
                            'message' => $message->getTextBody(),
                            'attachment' => $message->getAttachments()->count(),
                        ];
                    }
                }
            }

            return $data;
        });
    }
}
