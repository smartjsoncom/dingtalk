<?php

namespace SmartJson;

interface SendClient
{
    public function send($params): array;
}
