<?php

namespace Emoji;

use Illuminate\Support\ServiceProvider;

class EmojiServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->singleton('EmojiManager', function() {
			return new EmojiManager();
		});
	}
}
