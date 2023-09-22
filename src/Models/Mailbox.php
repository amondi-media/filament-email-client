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
        // Data cached for 5 min
        return Cache::remember('users', 300, function () {

            $client = Client::account('default');

            $client->connect();

            $folders = $client->getFolders();

            $data = [];

            foreach ($folders as $folder) {
                // Message limit and get all
                $messages = $folder->messages()->all()->limit(10)->get();
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
