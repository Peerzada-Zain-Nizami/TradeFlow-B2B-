<?php

namespace App\Traits;

use App\Events\MessageReceivedEvent;
use App\Models\Challan;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

trait ChatTrait {

    public static function createConversation(User $buyer, User $seller, $data = [])
    {
        // Chat functionality disabled - Musonza Chat package removed
        return null;
    }

    /**
    * Function responsible for sending message against an conversation
    *
    * @param Integer $conversationId
    * @param \App\Models\User $from
    * @param String $message
    * @param String $type
    */
    public static function sendMessage($conversation, User $from, $message, $type = 'text')
    {
      // Chat functionality disabled - Musonza Chat package removed
      return null;
    }

    public static function getConversation($conversationId)
    {
        // Chat functionality disabled - Musonza Chat package removed
        return null;
    }

    public static function getParticipantsConversation(User $participantModel1, User $participantModel2)
    {
        // Chat functionality disabled - Musonza Chat package removed
        return null;
    }

    public static function getUserConversations(User $user, $limit = 0, $pageNo = 0)
    {
      // Chat functionality disabled - Musonza Chat package removed
      return collect([]);
    }

    public static function sendQuotation($conversation, $quotationPath, User $from)
    {
      $sentMessage[] = '<div class="bg-white p-2"><a href="' . url(Storage::url($quotationPath)) . '" target="_blank"><img class="attachment" src="' . asset('/img/docs.png') . '"/></a></div>';
      self::sendMessage($conversation, $from, $quotationPath, 'quotation');

      $sentMessage[] = $lastMessage = __('Please find the quotation');
      self::sendMessage($conversation, $from, $lastMessage, 'text');

      return [
        'sent_message' => $sentMessage,
        'last_message' => $lastMessage
      ];
    }

    public static function markAsReadAll($conversation, User $user)
    {
      return ChatFacade::conversation($conversation)->setParticipant($user)->readAll();
    }

}
