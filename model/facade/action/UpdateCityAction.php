<?php

/** File for UpdateCityAction
 *
 *  This file just contains {@link UpdateCityAction}.
 *
 * @filesource
 * @package PhpReport
 * @subpackage facade
 * @author Jorge L�pez Fern�ndez <jlopez@igalia.com>
 */

include_once('phpreport/model/facade/action/Action.php');
include_once('phpreport/model/dao/DAOFactory.php');
include_once('phpreport/model/vo/UserVO.php');

/** Update City Action
 *
 *  This action is used for updating a City.
 *
 * @package PhpReport
 * @subpackage facade
 * @author Jorge L�pez Fern�ndez <jlopez@igalia.com>
 */
class UpdateCityAction extends Action{

    /** The City
     *
     * This variable contains the City we want to update.
     *
     * @var CityVO
     */
    private $city;

    /** UpdateCityAction constructor.
     *
     * This is just the constructor of this action.
     *
     * @param CityVO $sector the City value object we want to update.
     */
    public function __construct(SectorVO $sector) {
        $this->sector=$sector;
        $this->preActionParameter="UPDATE_CITY_PREACTION";
        $this->postActionParameter="UPDATE_CITY_POSTACTION";

    }

    /** Specific code execute.
     *
     * This is the function that contains the code that updates the City on persistent storing.
     *
     * @return int it just indicates if there was any error (<i>-1</i>) or not (<i>0</i>).
     * @throws {@link SQLQueryErrorException}, {@link SQLUniqueViolationException}
     */
    protected function doExecute() {

        $dao = DAOFactory::getCityDAO();
        if ($dao->update($this->city)!=1) {
            return -1;
        }

        return 0;
    }

}

/*
//Test code

$cityvo= new CityVO();
$cityvo->setId(1);
$cityvo->setName('Old New York');
$action= new UpdateCityAction($cityvo);
var_dump($action);
$action->execute();
var_dump($cityvo);
*/
