<?php
/**
 * Created by JetBrains PhpStorm.
 * User: manu
 * Date: 08/08/13
 * Time: 12:44
 * To change this template use File | Settings | File Templates.
 */

namespace Thelia\Core\Template\Loop;


use Thelia\Core\Template\Element\BaseLoop;

class Cart extends BaseLoop {

    /**
     *
     * this function have to be implement in your own loop class.
     *
     * All your parameters are defined in defineArgs() and can be accessible like a class property.
     *
     * example :
     *
     * public function defineArgs()
     * {
     *  return array (
     *      "ref",
     *      "id" => "optional",
     *      "stock" => array(
     *          "optional",
     *          "default" => 10
     *          )
     *  );
     * }
     *
     * you can retrieve ref value using $this->ref
     *
     * @param $pagination
     *
     * @return mixed
     */
    public function exec(&$pagination)
    {
        // TODO: Implement exec() method.
    }

    /**
     *
     * define all args used in your loop
     *
     * array key is your arg name.
     *
     * example :
     *
     * return array (
     *  "ref",
     *  "id" => "optional",
     *  "stock" => array(
     *          "optional",
     *          "default" => 10
     *          )
     * );
     *
     * @return \Thelia\Core\Template\Loop\Argument\ArgumentCollection
     */
    protected function getArgDefinitions()
    {
        // TODO: Implement getArgDefinitions() method.
    }
}