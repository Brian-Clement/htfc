<?php
namespace Consolidation\Config;

interface ConfigInterface
{
    /**
     * Determine if a non-default config value exists.
     */
    public function has($key);

    /**
     * Fetch a configuration value
     *
     * @param string $key Which config item to look up
     * @param string|null $defaultFallback Fallback default value to use when
     *   configuration object has neither a value nor a default. Use is
     *   discouraged; use default context in ConfigOverlay, or provide defaults
     *   using a config processor.
     *
     * @return mixed
     */
    public function get($key, $defaultFallback = null);

    /**
     * Set a config value
     *
     * @param string $key
     * @param mixed $value
     *
     * @return $this
     */
    public function set($key, $value);

    /**
     * Import configuration from the provided nexted array, replacing whatever
     * was here previously. No processing is done on the provided data.
     *
     * @param array $data
     * @return Config
     */
    public function import($data);

    /**
     * Export all configuration as a nested array.
     */
    public function export();

    /**
     * Return the default value for a given configuration item.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function hasDefault($key);

    /**
     * Return the default value for a given configuration item.
     *
     * @param string $key
     * @param mixed $defaultFallback
     *
     * @return mixed
     */
    public function getDefault($key, $defaultFallback = null);

    /**
     * Set the default value for a configuration setting. This allows us to
     * set defaults either before or after more specific configuration values
     * are loaded. Keeping defaults separate from current settings also
     * allows us to determine when a setting has been overridden.
     *
     * @param string $key
     * @param string $value
     */
    public function setDefault($key, $value);
}
