Neon based WebLoader
=========

Component for CSS and JS files loading

Author: Jan Marek, Tomáš Votruba

Licence: MIT

Philosophy: Write only necessary stuffs.


BasePresenter
---------------

Factories in Nette which never changes, can be moved to Presenter.

	<?php

	protected function createComponentCss()
	{
		return new Components\CssLoader($this->template->basePath);
	}

	protected function createComponentJs()
	{
		return new Components\JsLoader($this->template->basePath);
	}


	/* alternative for AdminModule */

	protected function createComponentCssAdmin()
	{
		return new Components\CssLoader($this->template->basePath, "cssAdmin");
	}

	protected function createComponentJsAdmin()
	{
		return new Components\JsLoader($this->template->basePath, "jsAdmin");
	}



app/config/header.neon
---------------

Set up files to load.


	css: [
		bootstrap.min.css,
		jquery-ui.css,
		screen.css,
		../js/fancybox/jquery.fancybox-1.3.4.css,
	]

	js: [
		jquery-1.7.1.min.js,
		jquery.nette.js,
		netteForms.js,
		bootstrap.min.js,
		scripts.js
	]

	cssAdmin: [
		bootstrap.min.css,
		someother.css
	]

	jsAdmin: [
		jquery-1.7.1.min.js,
		jquery.nette.js,
		netteForms.js,
		scriptsAdmin.js
	]


Template
---------------

	{control css}
	{control js}


	<!-- in admin layout -->
	{control cssAdmin}
	{control jsAdmin}