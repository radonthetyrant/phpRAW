<?php

namespace phpRAW;


class Live
{
    private $phpraw;
    private $thread_id;

    public function __construct($phpraw, $thread_id)
    {
        $this->phpraw = $phpraw;
        $this->thread_id = $thread_id;
    }

    public function getThreadId()
    {
        return $this->thread_id;
    }

    public function update($body)
    {
        $params = array(
            'api_type' => 'json',
            'body' => $body
        );
        $response = $this->phpraw->apiCall("/api/live/$this->thread_id/update", 'POST', $params);

        return $response;
    }

    public function close()
    {
        $params = array(
            'api_type' => 'json'
        );
        $response = $this->phpraw->apiCall("/api/live/$this->thread_id/close_thread", 'POST', $params);

        var_dump($response);
    }
}