<?php

namespace Emoji;

use Illuminate\Support\ServiceProvider;

class EmojiServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->singleton('emoji', function() {
			return new EmojiManager();
		});
	}
}
