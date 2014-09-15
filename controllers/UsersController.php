<?php 

/** Not autoloading is lame... */
require_once CONTROLLER_DIR.'/UsersController.php';

/**
 * A class to override the default user actions with the LDAP system.
 *
 * @package   LDAP
 * @author    Dave Widmer <dwidmer@bgsu.edu>
 */

class Ldap_UsersController extends UsersController
{
	/**
	 * Since we are using a LDAP system the password can't be changed through Omeka
	 */
	public function forgotPasswordAction()
	{
		return;
  }
}
