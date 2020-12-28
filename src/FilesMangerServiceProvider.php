<?php

namespace DcatAdmin\FilesManger;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class FilesMangerServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
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

		//
		
	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
