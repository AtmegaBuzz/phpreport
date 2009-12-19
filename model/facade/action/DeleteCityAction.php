<?php

/** File for DeleteCityAction
 *
 *  This file just contains {@link DeleteCityAction}.
 *
 * @filesource
 * @package PhpReport
 * @subpackage facade
 * @author Jorge L�pez Fern�ndez <jlopez@igalia.com>
 */

include_once('phpreport/model/facade/action/Action.php');
include_once('phpreport/model/dao/DAOFactory.php');
include_once('phpreport/model/vo/CityVO.php');

/** Delete City Action
 *
 *  This action is used for deleting a City.
 *
 * @package PhpReport
 * @subpackage facade
 * @author Jorge L�pez Fern�ndez <jlopez@igalia.com>
 */
class DeleteSectorAction extends Action{

    /** The City
     *
     * This variable contains the City we want to delete.
     *
     * @var CityVO
     */
    private $city;

    /** DeleteCityAction constructor.
     *
     * This is just the constructor of this action.
     *
     * @param CityVO $city the City value object we want to delete.
     */
    public function __construct(CityVO $city) {
        $this->city=$city;
        $this->preActionParameter="DELETE_CITY_PREACTION";
        $this->postActionParameter="DELETE_CITY_POSTACTION";

    }

    /** Specific code execute.
     *
     * This is the function that contains the code that deletes the City from persistent storing.
     *
     * @return int it just indicates if there was any error (<i>-1</i>) or not (<i>0</i>).
     */
    protected function doExecute() {

        $dao = DAOFactory::getCityDAO();
        if ($dao->delete($this->city)!=1) {
            return -1;
        }

        return 0;
    }

}

/*
//Test code

$cityvo= new CityVO();
$cityvo->setId(1);
$action= new DeleteCityAction($cityvo);
var_dump($action);
$action->execute();
var_dump($cityvo);
*/
