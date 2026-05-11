<?php

namespace EasyDingTalk\Kernel\Concerns;

trait HttpClientTrait
{
    /**
     * JSON request.
     *
     * @param string       $url
     * @param string|array $data
     * @param array        $query
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Psr\Http\Message\ResponseInterface|\Overtrue\Http\Support\Collection|array|object|string
     */
    public function postJson(string $url, array $data = [], array $query = [])
    {
        return $this->request($url, 'POST', ['query' => $query, 'json' => $data]);
    }

    /**
     * GET request with custom options.
     *
     * @param string $url
     * @param array  $options Guzzle 请求选项（headers, query 等）
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Psr\Http\Message\ResponseInterface|\Overtrue\Http\Support\Collection|array|object|string
     */
    public function getWith(string $url, array $options = [])
    {
        return $this->request($url, 'GET', $options);
    }
}