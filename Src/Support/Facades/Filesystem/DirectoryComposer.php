<?php

namespace Wordpress\PluginName\Support\Facades\Filesystem;

class DirectoryComposer
{
    const PLUGIN_NAME_DIR =  'wordpress-starter-kit';

    public string $pluginRoot;
    public string $pluginRootFile;
    public string $themes;
    public string $views;
    public string $assets;
    public string $storageRoot;
    public string $logsRoot;
    public array $uploadPath;

    public function __construct()
    {
        $this->pluginRoot = WP_PLUGIN_DIR . '/' . self::PLUGIN_NAME_DIR;
        $this->pluginRootFile = "$this->pluginRoot/index.php";
        $this->themes = WP_CONTENT_DIR . '/themes/';
        $this->views = $this->pluginRoot . "/Src/Resources/Views";
        $this->assets = WP_PLUGIN_URL . '/' . self::PLUGIN_NAME_DIR . "/Src/Resources";
        $this->storageRoot = WP_PLUGIN_DIR . '/' . self::PLUGIN_NAME_DIR . '/Src/Storage';
        $this->logsRoot =  "$this->storageRoot/Logs";
        $this->uploadPath = wp_upload_dir();
    }
}
