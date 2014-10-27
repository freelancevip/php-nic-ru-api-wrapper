<?php

namespace Nic\Api;

class Contacts extends AbstractApi
{
    public function create($params)
    {
        return $this->post(array_merge(array(
			'request' => 'contact',
			'operation' => 'create',
		), $params));
    }
    public function search($params)
    {
        return $this->post(array_merge(array(
			'request' => 'contact',
			'operation' => 'search',
		), $params));
    }
    public function update($params)
    {
        return $this->post(array_merge(array(
			'request' => 'contact',
			'operation' => 'update',
		), $params));
    }
    public function delete($params)
    {
        return $this->post(array_merge(array(
			'request' => 'contact',
			'operation' => 'delete',
		), $params));
    }
    public function domainSearch($params)
    {
        return $this->post(array_merge(array(
			'request' => 'contact',
			'operation' => 'domain-search',
		), $params));
    }
}
