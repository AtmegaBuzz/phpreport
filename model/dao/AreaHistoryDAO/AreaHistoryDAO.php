<?php

/** File for AreaHistoryDAO
 *
 *  This file just contains {@link AreaHistoryDAO}.
 *
 * @filesource
 * @package PhpReport
 * @subpackage DAO
 * @author Jorge L�pez Fern�ndez <jlopez@igalia.com>
 */

include_once('phpreport/model/vo/AreaHistoryVO.php');
include_once('phpreport/model/dao/BaseDAO.php');

/** DAO for Area Histories
 *
 *  This is the base class for all types of Area History DAOs responsible for working with data from Area History table, providing a common interface.
 *
 * @see DAOFactory::getAreaHistoryDAO(), AreaHistoryVO
 */
abstract class AreaHistoryDAO extends BaseDAO{

    /** Area History DAO constructor.
     *
     * This is the base constructor of Area History DAOs, and it just calls its parent's constructor.
     *
     * @throws {@link ConnectionErrorException}
     * @see BaseDAO::__construct()
     */
    protected function __construct() {
    parent::__construct();
    }

    /** Area History retriever by id.
     *
     * This function retrieves the row from Area History table with the id <var>$areaHistoryId</var> and creates an {@link AreaHistoryVO} with its data.
     *
     * @param int $areaHistoryId the id of the row we want to retrieve.
     * @return AreaHistoryVO a value object {@link AreaHistoryVO} with its properties set to the values from the row.
     * @throws {@link OperationErrorException}
     */
    public abstract function getById($areaHistoryId);

    /** Area History retriever by User id.
     *
     * This function retrieves the rows from Area History table that are associated with the User with
     * the id <var>$userId</var> and creates an {@link AreaHistoryVO} with data from each row.
     *
     * @param int $userId the id of the User whose Area History we want to retrieve.
     * @return array an array with value objects {@link AreaHistoryVO} with their properties set to the values from the rows
     * and ordered ascendantly by their database internal identifier.
     * @throws {@link OperationErrorException}
     */
    public abstract function getByUserId($userId);

    /** Area History current entry retriever by User id.
     *
     * This function retrieves the current row from Area History table that is associated with the User with
     * the id <var>$userId</var> and creates an {@link AreaHistoryVO} with data from that row.
     *
     * @param int $userId the id of the User whose Area History current entry we want to retrieve.
     * @return AreaHistoryVO a value object {@link AreaHistoryVO} with its properties set to the values from the row.
     * @throws {@link OperationErrorException}
     */
    public abstract function getCurrentByUserId($userId);

    /** Area History retriever by User id and date interval.
     *
     * This function retrieves the rows from Area History table that are associated with the User with
     * the id <var>$userId</var> and that lay inside the interval defined by <var>$init</var> and <var>$end</var>
     * and creates an {@link AreaHistoryVO} with data from each row.
     * If we don't indicate a User id, then entries for all users are returned.
     *
     * @param DateTime $init the DateTime object that represents the beginning of the date interval.
     * @param DateTime $end the DateTime object that represents the end of the date interval (included).
     * @param int $userId the id of the User whose Area History we want to retrieve. It's optional.
     * @return array an array with value objects {@link AreaHistoryVO} with their properties set to the values from the rows
     * and ordered ascendantly by the User database internal identifier and the beginning date.
     * @throws {@link OperationErrorException}
     */
    public abstract function getByIntervals(DateTime $init, DateTime $end, $userId = NULL);

    /** Area History retriever by Area id.
     *
     * This function retrieves the rows from Area History table that are associated with the Area with
     * the id <var>$areaId</var> and creates an {@link AreaHistoryVO} with data from each row.
     *
     * @param int $areaId the id of the Area whose Area History associated entries we want to retrieve.
     * @return array an array with value objects {@link AreaHistoryVO} with their properties set to the values from the rows
     * and ordered ascendantly by their database internal identifier.
     * @throws {@link OperationErrorException}
     */
    public abstract function getByAreaId($areaId);

    /** Area History retriever.
     *
     * This function retrieves all rows from Area History table and creates an {@link AreaHistoryVO} with data from each row.
     *
     * @return array an array with value objects {@link AreaHistoryVO} with their properties set to the values from the rows
     * and ordered ascendantly by their database internal identifier.
     * @throws {@link OperationErrorException}
     */
    public abstract function getAll();

    /** Area History updater.
     *
     * This function updates the data of an Area History by its {@link AreaHistoryVO}.
     *
     * @param AreaHistoryVO $areaHistoryVO the {@link AreaHistoryVO} with the data we want to update on database.
     * @return int the number of rows that have been affected (it should be 1).
     * @throws {@link OperationErrorException}, {@link SQLUniqueViolationException}
     */
    public abstract function update(AreaHistoryVO $areaHistoryVO);

    /** Area History creator.
     *
     * This function creates a new row for an Area History by its {@link AreaHistoryVO}. The internal id of <var>$areaHistoryVO</var> will be set after its creation.
     *
     * @param AreaHistoryVO $areaHistoryVO the {@link AreaHistoryVO} with the data we want to insert on database.
     * @return int the number of rows that have been affected (it should be 1).
     * @throws {@link OperationErrorException}, {@link SQLUniqueViolationException}
     */
    public abstract function create(AreaHistoryVO $areaHistoryVO);

    /** Area History deleter.
     *
     * This function deletes the data of an Area History by its {@link AreaHistoryVO}.
     *
     * @param AreaHistoryVO $areaHistoryVO the {@link AreaHistoryVO} with the data we want to delete from database.
     * @return int the number of rows that have been affected (it should be 1).
     * @throws {@link OperationErrorException}
     */
    public abstract function delete(AreaHistoryVO $areaHistoryVO);

}
