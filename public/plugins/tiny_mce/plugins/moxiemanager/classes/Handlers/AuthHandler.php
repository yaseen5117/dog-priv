<?php
/**
 * TokenHandler.php
 *
 * Copyright 2003-2013, Moxiecode Systems AB, All rights reserved.
 */

/**
 * Http handler that returns the csrf request token.
 *
 * @package MOXMAN_Handlers
 */
class MOXMAN_Handlers_AuthHandler implements MOXMAN_Http_IHandler {
	/**
	 * Process a request using the specified context.
	 *
	 * @param MOXMAN_Http_Context $httpContext Context instance to pass to use for the handler.
	 */
	public function processRequest(MOXMAN_Http_Context $httpContext) {
		$request = $httpContext->getRequest();
		$response = $httpContext->getResponse();
		$config = MOXMAN::getConfig();
		$allItems = $config->getAll();
		$licenseKey = trim($config->get("general.license"));
		$installed = !empty($allItems);

		$response->disableCache();
		$response->setHeader('Content-type', 'application/json');

		if ($request->getMethod() != 'POST') {
			throw new MOXMAN_Exception("Not a HTTP post request.");
		}

		if ($installed && !preg_match('/^([0-9A-Z]{4}\-){7}[0-9A-Z]{4}$/', $licenseKey)) {
			throw new MOXMAN_Exception("Invalid license key specified in config.");
		}

		$authInfo = (object) array(
			"token" => MOXMAN_Http_Csrf::createToken(MOXMAN::getConfig()->get('general.license')),
			"installed" => $installed,
			"loggedin" => MOXMAN::getAuthManager()->isAuthenticated(),
			"loginurl" => $config->get("authenticator.login_page", ""),
			"standalone" => MOXMAN::getAuthManager()->hasStandalone()
		);

		$args = new MOXMAN_Auth_AuthInfoEventArgs();
		MOXMAN::getPluginManager()->get("core")->fire("AuthInfo", $args);

		foreach ($args->getInfo() as $key => $value) {
			$authInfo->{$key} = $value;
		}

		$response->sendJson($authInfo);
	}
}

?>