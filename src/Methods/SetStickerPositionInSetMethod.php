<?php

namespace WeStacks\TeleBot\Methods;

use WeStacks\TeleBot\Helpers\TypeCaster;
use WeStacks\TeleBot\Interfaces\TelegramMethod;

class SetStickerPositionInSetMethod extends TelegramMethod
{
    protected function request()
    {
        return [
            'type' => 'POST',
            'url' => "https://api.telegram.org/bot{$this->token}/setStickerPositionInSet",
            'send' => $this->send(),
            'expect' => 'boolean',
        ];
    }

    private function send()
    {
        $parameters = [
            'sticker' => 'string',
            'position' => 'integer',
        ];

        $object = TypeCaster::castValues($this->arguments[0] ?? [], $parameters);

        return ['json' => TypeCaster::stripArrays($object)];
    }
}
