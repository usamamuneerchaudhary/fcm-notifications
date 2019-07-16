<?php

namespace App\Libraries;

class Push {

	private $title;
	private $message;
	private $data;

	/**
	 * @param $title
	 */
	public function setTitle( $title ) {
		$this->title = $title;
	}

	/**
	 * @param $message
	 */
	public function setMessage( $message ) {
		$this->message = $message;
	}

	/**
	 * @param $data
	 */
	public function setPayload( $data ) {
		$this->data = $data;
	}

	/**
	 * @return array
	 */
	public function getPush() {
		$res                      = array();
		$res['data']['title']     = $this->title;
		$res['data']['message']   = $this->message;
		$res['data']['payload']   = $this->data;
		$res['data']['timestamp'] = date( 'Y-m-d G:i:s' );

		return $res;
	}

}
