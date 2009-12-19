<?php

/** File for ProjectVO
 *
 *  This file just contains {@link ProjectVO}.
 *
 * @filesource
 * @package PhpReport
 * @subpackage VO
 * @author Jorge L�pez Fern�ndez <jlopez@igalia.com>
 */

/** VO for Projects
 *
 *  This class just stores Project data.
 *
 *  @property int $id database internal identifier.
 *  @property boolean $activation says if the Project is active or not.
 *  @property double $invoice invoice of this Project.
 *  @property double $estHours number of working hours we have estimated this Project will require.
 *  @property DateTime $init beginning date of this Project.
 *  @property DateTime $_end end date (included) of this Project.
 *  @property int $areaId database internal identifier of the associated Area.
 *  @property string $description description of this Project.
 *  @property double $movedHours hours this Project has moved from the estimation.
 *  @property string $type type of this Project.
 *  @property string $schedType type of scheduling this project has.
 */
class ProjectVO {

    /**#@+
     *  @ignore
     */
    protected $id = NULL;
    protected $activation = NULL;
    protected $init = NULL;
    protected $_end = NULL;
    protected $invoice = NULL;
    protected $estHours = NULL;
    protected $areaid = NULL;
    protected $description = NULL;
    protected $movedHours = NULL;
    protected $schedType = NULL;
    protected $type = NULL;

    public function setId($id) {
        if (is_null($id))
        $this->id = $id;
    else
            $this->id = (int) $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setActivation($activation) {
        $this->activation = (boolean) $activation;
    }

    public function getActivation() {
        return $this->activation;
    }

    public function setInit(DateTime $init = NULL) {
        $this->init = $init;
    }

    public function getInit() {
        return $this->init;
    }

    public function setEnd(DateTime $_end = NULL) {
        $this->_end = $_end;
    }

    public function getEnd() {
        return $this->_end;
    }

    public function setInvoice($invoice) {
        if (is_null($invoice))
        $this->invoice = $invoice;
    else
            $this->invoice = (double) $invoice;
    }

    public function getInvoice() {
        return $this->invoice;
    }

    public function setEstHours($estHours) {
        if (is_null($estHours))
        $this->estHours = $estHours;
    else
            $this->estHours = (double) $estHours;
    }

    public function getEstHours() {
        return $this->estHours;
    }

    public function setDescription($description) {
        $this->description = (string) $description;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setType($type) {
        $this->type = (string) $type;
    }

    public function getType() {
        return $this->type;
    }

    public function setMovedHours($movedHours) {
        if (is_null($movedHours))
        $this->movedHours = $movedHours;
    else
            $this->movedHours = (double) $movedHours;
    }

    public function getMovedHours() {
        return $this->movedHours;
    }

    public function setAreaId($areaId) {
        if (is_null($areaId))
        $this->areaId = $areaId;
    else
            $this->areaId = (int) $areaId;
    }

    public function getAreaId() {
        return $this->areaId;
    }

    public function setSchedType($schedType) {
        $this->schedType = (string) $schedType;
    }

    public function getSchedType() {
        return $this->schedType;
    }

    /**#@-*/

}
