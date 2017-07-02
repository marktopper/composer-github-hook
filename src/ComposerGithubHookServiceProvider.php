<?php

namespace ComposerGithubHook;

use Illuminate\Support\ServiceProvider;

class ComposerGithubHookServiceProvider extends ServiceProvider
{
  public static $isBooted = false;
  public static $isRegistered = false;
  
  public function boot()
  {
    static::$isBooted = true;
  }
  
  public function register()
  {
    static::$isRegistered = true;
  }
}
