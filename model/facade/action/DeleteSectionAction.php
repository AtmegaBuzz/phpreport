<?php

/** File for DeleteSectionAction
 *
 *  This file just contains {@link DeleteSectionAction}.
 *
 * @filesource
 * @package PhpReport
 * @subpackage facade
 * @author Jorge L�pez Fern�ndez <jlopez@igalia.com>
 */

include_once('phpreport/model/facade/action/Action.php');
include_once('phpreport/model/dao/DAOFactory.php');
include_once('phpreport/model/vo/SectionVO.php');

/** Delete Section Action
 *
 *  This action is used for deleting an Section.
 *
 * @package PhpReport
 * @subpackage facade
 * @author Jorge L�pez Fern�ndez <jlopez@igalia.com>
 */
class DeleteSectionAction extends Action{

    /** The Section
     *
     * This variable contains the Section we want to delete.
     *
     * @var SectionVO
     */
    private $section;

    /** DeleteSectionAction constructor.
     *
     * This is just the constructor of this action.
     *
     * @param SectionVO $section the Section value object we want to delete.
     */
    public function __construct(SectorVO $section) {
        $this->section=$section;
        $this->preActionParameter="DELETE_SECTION_PREACTION";
        $this->postActionParameter="DELETE_SECTION_POSTACTION";

    }

    /** Specific code execute.
     *
     * This is the function that contains the code that deletes the Section from persistent storing.
     *
     * @return int it just indicates if there was any error (<i>-1</i>) or not (<i>0</i>).
     */
    protected function doExecute() {

        $dao = DAOFactory::getSectionDAO();
        if ($dao->delete($this->section)!=1) {
            return -1;
        }

        return 0;
    }

}

/*
//Test code

$sectionvo= new SectionVO();
$sectionvo->setId(1);
$action= new DeleteSectionAction($sectionvo);
var_dump($action);
$action->execute();
var_dump($sectionvo);
*/
