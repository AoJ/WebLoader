<?php


abstract class BasePresenter extends Nette\Application\UI\Presenter
{

	/**
	 * Css component
	 * @return Components\CssLoader
	 */
	protected function createComponentCss()
	{
		return new Components\CssLoader($this->template->basePath);
	}

	/**
	 * Js component 
	 * @return Components\JsLoader
	 */
	protected function createComponentJs()
	{
		return new Components\JsLoader($this->template->basePath);
	}


}