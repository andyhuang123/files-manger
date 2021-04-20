<?php

namespace DcatAdmin\FilesManger;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class FilesMangerServiceProvider extends ServiceProvider
{
	protected $js = [
        'vendor/dcat-admin-extensions/dcat-admin/files-manger/js/index.js',
    ];
	protected $css = [
		'vendor/dcat-admin-extensions/dcat-admin/files-manger/css/index.css',
	];
	// 注册菜单
	protected $menu = [
		[ 'title' => '文件管理', 'uri'   => '', 'icon'  => 'feather icon-file-minus', ],
		[ 'parent' => '文件管理', 'title'  => '文件列表', 'icon'  => 'feather icon-align-justify', 'uri'    => 'media', ],
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		Admin::js($this->js);
		Admin::css($this->css);

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
