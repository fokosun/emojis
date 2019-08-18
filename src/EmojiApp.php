<?php
/**
 * Created by PhpStorm.
 * User: florenceokosun
 * Date: 2019-08-18
 * Time: 07:49
 */

namespace Emoji;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class EmojiApp implements Application
{

	/**
	 * Get the version number of the application.
	 *
	 * @return string
	 */
	public function version()
	{
		return '1.0';
	}

	/**
	 * Get the base path of the Laravel installation.
	 *
	 * @return string
	 */
	public function basePath()
	{
		// TODO: Implement basePath() method.
	}

	/**
	 * Get the path to the bootstrap directory.
	 *
	 * @param  string $path Optionally, a path to append to the bootstrap path
	 * @return string
	 */
	public function bootstrapPath($path = '')
	{
		// TODO: Implement bootstrapPath() method.
	}

	/**
	 * Get the path to the application configuration files.
	 *
	 * @param  string $path Optionally, a path to append to the config path
	 * @return string
	 */
	public function configPath($path = '')
	{
		// TODO: Implement configPath() method.
	}

	/**
	 * Get the path to the database directory.
	 *
	 * @param  string $path Optionally, a path to append to the database path
	 * @return string
	 */
	public function databasePath($path = '')
	{
		// TODO: Implement databasePath() method.
	}

	/**
	 * Get the path to the environment file directory.
	 *
	 * @return string
	 */
	public function environmentPath()
	{
		// TODO: Implement environmentPath() method.
	}

	/**
	 * Get the path to the resources directory.
	 *
	 * @param  string $path
	 * @return string
	 */
	public function resourcePath($path = '')
	{
		// TODO: Implement resourcePath() method.
	}

	/**
	 * Get the path to the storage directory.
	 *
	 * @return string
	 */
	public function storagePath()
	{
		// TODO: Implement storagePath() method.
	}

	/**
	 * Get or check the current application environment.
	 *
	 * @param  string|array $environments
	 * @return string|bool
	 */
	public function environment(...$environments)
	{
		// TODO: Implement environment() method.
	}

	/**
	 * Determine if the application is running in the console.
	 *
	 * @return bool
	 */
	public function runningInConsole()
	{
		// TODO: Implement runningInConsole() method.
	}

	/**
	 * Determine if the application is running unit tests.
	 *
	 * @return bool
	 */
	public function runningUnitTests()
	{
		// TODO: Implement runningUnitTests() method.
	}

	/**
	 * Determine if the application is currently down for maintenance.
	 *
	 * @return bool
	 */
	public function isDownForMaintenance()
	{
		// TODO: Implement isDownForMaintenance() method.
	}

	/**
	 * Register all of the configured providers.
	 *
	 * @return void
	 */
	public function registerConfiguredProviders()
	{
		// TODO: Implement registerConfiguredProviders() method.
	}

	/**
	 * Register a service provider with the application.
	 *
	 * @param  \Illuminate\Support\ServiceProvider|string $provider
	 * @param  bool $force
	 * @return \Illuminate\Support\ServiceProvider
	 */
	public function register($provider, $force = false)
	{
		// TODO: Implement register() method.
	}

	/**
	 * Register a deferred provider and service.
	 *
	 * @param  string $provider
	 * @param  string|null $service
	 * @return void
	 */
	public function registerDeferredProvider($provider, $service = null)
	{
		// TODO: Implement registerDeferredProvider() method.
	}

	/**
	 * Resolve a service provider instance from the class name.
	 *
	 * @param  string $provider
	 * @return \Illuminate\Support\ServiceProvider
	 */
	public function resolveProvider($provider)
	{
		// TODO: Implement resolveProvider() method.
	}

	/**
	 * Boot the application's service providers.
	 *
	 * @return void
	 */
	public function boot()
	{
		// TODO: Implement boot() method.
	}

	/**
	 * Register a new boot listener.
	 *
	 * @param  callable $callback
	 * @return void
	 */
	public function booting($callback)
	{
		// TODO: Implement booting() method.
	}

	/**
	 * Register a new "booted" listener.
	 *
	 * @param  callable $callback
	 * @return void
	 */
	public function booted($callback)
	{
		// TODO: Implement booted() method.
	}

	/**
	 * Run the given array of bootstrap classes.
	 *
	 * @param  array $bootstrappers
	 * @return void
	 */
	public function bootstrapWith(array $bootstrappers)
	{
		// TODO: Implement bootstrapWith() method.
	}

	/**
	 * Determine if the application configuration is cached.
	 *
	 * @return bool
	 */
	public function configurationIsCached()
	{
		// TODO: Implement configurationIsCached() method.
	}

	/**
	 * Detect the application's current environment.
	 *
	 * @param  \Closure $callback
	 * @return string
	 */
	public function detectEnvironment(Closure $callback)
	{
		// TODO: Implement detectEnvironment() method.
	}

	/**
	 * Get the environment file the application is using.
	 *
	 * @return string
	 */
	public function environmentFile()
	{
		// TODO: Implement environmentFile() method.
	}

	/**
	 * Get the fully qualified path to the environment file.
	 *
	 * @return string
	 */
	public function environmentFilePath()
	{
		// TODO: Implement environmentFilePath() method.
	}

	/**
	 * Get the path to the configuration cache file.
	 *
	 * @return string
	 */
	public function getCachedConfigPath()
	{
		// TODO: Implement getCachedConfigPath() method.
	}

	/**
	 * Get the path to the cached services.php file.
	 *
	 * @return string
	 */
	public function getCachedServicesPath()
	{
		// TODO: Implement getCachedServicesPath() method.
	}

	/**
	 * Get the path to the cached packages.php file.
	 *
	 * @return string
	 */
	public function getCachedPackagesPath()
	{
		// TODO: Implement getCachedPackagesPath() method.
	}

	/**
	 * Get the path to the routes cache file.
	 *
	 * @return string
	 */
	public function getCachedRoutesPath()
	{
		// TODO: Implement getCachedRoutesPath() method.
	}

	/**
	 * Get the current application locale.
	 *
	 * @return string
	 */
	public function getLocale()
	{
		// TODO: Implement getLocale() method.
	}

	/**
	 * Get the application namespace.
	 *
	 * @return string
	 *
	 * @throws \RuntimeException
	 */
	public function getNamespace()
	{
		// TODO: Implement getNamespace() method.
	}

	/**
	 * Get the registered service provider instances if any exist.
	 *
	 * @param  \Illuminate\Support\ServiceProvider|string $provider
	 * @return array
	 */
	public function getProviders($provider)
	{
		// TODO: Implement getProviders() method.
	}

	/**
	 * Determine if the application has been bootstrapped before.
	 *
	 * @return bool
	 */
	public function hasBeenBootstrapped()
	{
		// TODO: Implement hasBeenBootstrapped() method.
	}

	/**
	 * Load and boot all of the remaining deferred providers.
	 *
	 * @return void
	 */
	public function loadDeferredProviders()
	{
		// TODO: Implement loadDeferredProviders() method.
	}

	/**
	 * Set the environment file to be loaded during bootstrapping.
	 *
	 * @param  string $file
	 * @return $this
	 */
	public function loadEnvironmentFrom($file)
	{
		// TODO: Implement loadEnvironmentFrom() method.
	}

	/**
	 * Determine if the application routes are cached.
	 *
	 * @return bool
	 */
	public function routesAreCached()
	{
		// TODO: Implement routesAreCached() method.
	}

	/**
	 * Set the current application locale.
	 *
	 * @param  string $locale
	 * @return void
	 */
	public function setLocale($locale)
	{
		// TODO: Implement setLocale() method.
	}

	/**
	 * Determine if middleware has been disabled for the application.
	 *
	 * @return bool
	 */
	public function shouldSkipMiddleware()
	{
		// TODO: Implement shouldSkipMiddleware() method.
	}

	/**
	 * Terminate the application.
	 *
	 * @return void
	 */
	public function terminate()
	{
		// TODO: Implement terminate() method.
	}

	/**
	 * Determine if the given abstract type has been bound.
	 *
	 * @param  string $abstract
	 * @return bool
	 */
	public function bound($abstract)
	{
		// TODO: Implement bound() method.
	}

	/**
	 * Alias a type to a different name.
	 *
	 * @param  string $abstract
	 * @param  string $alias
	 * @return void
	 *
	 * @throws \LogicException
	 */
	public function alias($abstract, $alias)
	{
		// TODO: Implement alias() method.
	}

	/**
	 * Assign a set of tags to a given binding.
	 *
	 * @param  array|string $abstracts
	 * @param  array|mixed ...$tags
	 * @return void
	 */
	public function tag($abstracts, $tags)
	{
		// TODO: Implement tag() method.
	}

	/**
	 * Resolve all of the bindings for a given tag.
	 *
	 * @param  string $tag
	 * @return iterable
	 */
	public function tagged($tag)
	{
		// TODO: Implement tagged() method.
	}

	/**
	 * Register a binding with the container.
	 *
	 * @param  string $abstract
	 * @param  \Closure|string|null $concrete
	 * @param  bool $shared
	 * @return void
	 */
	public function bind($abstract, $concrete = null, $shared = false)
	{
		// TODO: Implement bind() method.
	}

	/**
	 * Register a binding if it hasn't already been registered.
	 *
	 * @param  string $abstract
	 * @param  \Closure|string|null $concrete
	 * @param  bool $shared
	 * @return void
	 */
	public function bindIf($abstract, $concrete = null, $shared = false)
	{
		// TODO: Implement bindIf() method.
	}

	/**
	 * Register a shared binding in the container.
	 *
	 * @param  string $abstract
	 * @param  \Closure|string|null $concrete
	 * @return void
	 */
	public function singleton($abstract, $concrete = null)
	{
		// TODO: Implement singleton() method.
	}

	/**
	 * "Extend" an abstract type in the container.
	 *
	 * @param  string $abstract
	 * @param  \Closure $closure
	 * @return void
	 *
	 * @throws \InvalidArgumentException
	 */
	public function extend($abstract, Closure $closure)
	{
		// TODO: Implement extend() method.
	}

	/**
	 * Register an existing instance as shared in the container.
	 *
	 * @param  string $abstract
	 * @param  mixed $instance
	 * @return mixed
	 */
	public function instance($abstract, $instance)
	{
		// TODO: Implement instance() method.
	}

	/**
	 * Add a contextual binding to the container.
	 *
	 * @param  string $concrete
	 * @param  string $abstract
	 * @param  \Closure|string $implementation
	 * @return void
	 */
	public function addContextualBinding($concrete, $abstract, $implementation)
	{
		// TODO: Implement addContextualBinding() method.
	}

	/**
	 * Define a contextual binding.
	 *
	 * @param  string|array $concrete
	 * @return \Illuminate\Contracts\Container\ContextualBindingBuilder
	 */
	public function when($concrete)
	{
		// TODO: Implement when() method.
	}

	/**
	 * Get a closure to resolve the given type from the container.
	 *
	 * @param  string $abstract
	 * @return \Closure
	 */
	public function factory($abstract)
	{
		// TODO: Implement factory() method.
	}

	/**
	 * Flush the container of all bindings and resolved instances.
	 *
	 * @return void
	 */
	public function flush()
	{
		// TODO: Implement flush() method.
	}

	/**
	 * Resolve the given type from the container.
	 *
	 * @param  string $abstract
	 * @param  array $parameters
	 * @return mixed
	 *
	 * @throws \Illuminate\Contracts\Container\BindingResolutionException
	 */
	public function make($abstract, array $parameters = [])
	{
		// TODO: Implement make() method.
	}

	/**
	 * Call the given Closure / class@method and inject its dependencies.
	 *
	 * @param  callable|string $callback
	 * @param  array $parameters
	 * @param  string|null $defaultMethod
	 * @return mixed
	 */
	public function call($callback, array $parameters = [], $defaultMethod = null)
	{
		// TODO: Implement call() method.
	}

	/**
	 * Determine if the given abstract type has been resolved.
	 *
	 * @param  string $abstract
	 * @return bool
	 */
	public function resolved($abstract)
	{
		// TODO: Implement resolved() method.
	}

	/**
	 * Register a new resolving callback.
	 *
	 * @param  \Closure|string $abstract
	 * @param  \Closure|null $callback
	 * @return void
	 */
	public function resolving($abstract, Closure $callback = null)
	{
		// TODO: Implement resolving() method.
	}

	/**
	 * Register a new after resolving callback.
	 *
	 * @param  \Closure|string $abstract
	 * @param  \Closure|null $callback
	 * @return void
	 */
	public function afterResolving($abstract, Closure $callback = null)
	{
		// TODO: Implement afterResolving() method.
	}

	/**
	 * Finds an entry of the container by its identifier and returns it.
	 *
	 * @param string $id Identifier of the entry to look for.
	 *
	 * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
	 * @throws ContainerExceptionInterface Error while retrieving the entry.
	 *
	 * @return mixed Entry.
	 */
	public function get($id)
	{
		// TODO: Implement get() method.
	}

	/**
	 * Returns true if the container can return an entry for the given identifier.
	 * Returns false otherwise.
	 *
	 * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
	 * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
	 *
	 * @param string $id Identifier of the entry to look for.
	 *
	 * @return bool
	 */
	public function has($id)
	{
		// TODO: Implement has() method.
	}
}