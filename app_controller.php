<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
  public $components = array('Session',
                             'Auth' => array(
                                'loginAction' => '/login',
                                'authError' => 'Ban can dang nhap de tiep tuc',
                                'flash' => array(
                                    'element' => 'default',
                                    'key' => 'auth',
                                    'params' => array('class' => 'alert alert-danger')
                                  ),
                                'loginRedirect' => '/'
                              )    
                             );

  public function beforeFilter(){
    $this->set('user_info', $this->get_user());
  }

  public function get_user(){
    if ($this->Auth->login()) {
      return $this->Auth->user();
    }
  }
}
