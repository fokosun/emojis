<?php

namespace Emoji;

class EmojiManager {

	protected $emojis = array(
		'eyes' => '�',
		'plus1' => '👍'
	);

	public function get($hint)
	{
		return array_key_exists($hint, $this->emojis) ? $this->emojis[$hint] : null;
	}

	/**
	 * @return array
	 */
	public function getEmojis()
	{
		return $this->emojis;
	}
}
