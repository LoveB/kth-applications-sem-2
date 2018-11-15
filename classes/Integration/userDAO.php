<?php

namespace PersonRegister\Integration;

include __DIR__ . '/DbAccess.php';
include __DIR__ . '/../../User.php';

use PersonRegister\Model\Person;

/**
 * Handles all SQL calls to the <code>persons</code> database.
 */
class PersonDAO {

    const DB_NAME = 'persons';
    const TABLE_NAME = 'person';
    const NAME_COL_NAME = 'name';
    const AGE_COL_NAME = 'age';
    const PHONE_COL_NAME = 'phone';

    private $dropTableStmt;
    private $createTableStmt;
    private $insertStmt;
    private $deleteStmt;
    private $updateStmt;
    private $selectStmt;
    private $personDb;

    /**
     * Connetcs to the <code>persons</code> database and empties it.
     *
     * @throws \mysqli_sql_exception If unable to connect to the database or to empty it.
     */
    public function __construct() {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->personDb = new \mysqli('localhost', DbAccess::USER, DbAccess::PASS, self::DB_NAME);
        $this->createTAbleStmts();
        $this->deleteAllPersons();
        $this->createContentStmts();
    }

    /**
     * Closes the connection to the <code>persons</code> database.
     */
    public function __destruct() {
        $this->personDb->close();
    }

    /**
     * Updates a person.
     *
     * @param type $name  The name of the person that is updated.
     * @param type $age   The new age of the person.
     * @param type $phone The new phone of the person.
     * @throws \mysqli_sql_exception If unable to update.
     */
    public function updatePerson($name, $age, $phone) {
        $this->updateStmt->bind_param('iss', $age, $phone, $name);
        $this->updateStmt->execute();
    }

    /**
     * Creates a new person.
     *
     * @param type $name  The name of the person that is inserted.
     * @param type $age   The new age of the person that is inserted.
     * @param type $phone The new phone of the person that is inserted.
     * @throws \mysqli_sql_exception If unable to insert.
     */
    public function createPerson($name, $age, $phone) {
        $this->insertStmt->bind_param('sis', $name, $age, $phone);
        $this->insertStmt->execute();
    }

    /**
     * Deletes a person.
     *
     * @param type $name  The name of the person that is deleted.
     * @throws \mysqli_sql_exception If unable to delete.
     */
    public function deletePersonByName($name) {
        $this->deleteStmt->bind_param('s', $name);
        $this->deleteStmt->execute();
    }

    /**
     * Lists all persons.
     *
     * @return array An array of <code>Person</code> objects with all persons in the register.
     * @throws \mysqli_sql_exception If unable to delete.
     */
    public function getAllPersons() {
        $persons = array();
        $this->selectStmt->execute();
        $this->selectStmt->bind_result($name, $age, $phone);
        while ($this->selectStmt->fetch()) {
            $persons[] = new Person($name, $age, $phone);
        }
        return $persons;
    }

    /**
     * Deletes all persons.
     */
    public function deleteAllPersons() {
        $this->personDb->query($this->dropTableStmt);
        $this->personDb->query($this->createTableStmt);
    }

    private function createTableStmts() {
        $this->dropTableStmt = "DROP TABLE IF EXISTS " . self::TABLE_NAME;
        $this->createTableStmt = "CREATE TABLE " . self::TABLE_NAME . " (" . self::NAME_COL_NAME .
            " VARCHAR(100), " . self::AGE_COL_NAME . " INT(3), " .
            self::PHONE_COL_NAME . " VARCHAR(12))";
    }

    private function createContentStmts() {
        $this->dropTableStmt = "DROP TABLE IF EXISTS " . self::TABLE_NAME;
        $this->createTableStmt = "CREATE TABLE " . self::TABLE_NAME . " (" . self::NAME_COL_NAME .
            " VARCHAR(100), " . self::AGE_COL_NAME . " INT(3), " .
            self::PHONE_COL_NAME . " VARCHAR(12))";
        $this->insertStmt = $this->personDb->prepare("INSERT INTO " . self::TABLE_NAME .
            " (" . self::NAME_COL_NAME . ", " .
            self::AGE_COL_NAME . ", " .
            self::PHONE_COL_NAME . ") VALUES (?, ?, ?)");
        $this->deleteStmt = $this->personDb->prepare("DELETE FROM " . self::TABLE_NAME . " WHERE " .
            self::NAME_COL_NAME . " = ?");
        $this->updateStmt = $this->personDb->prepare("UPDATE " . self::TABLE_NAME . " SET " .
            self::AGE_COL_NAME . " = ?, " .
            self::PHONE_COL_NAME . " = ? WHERE " .
            self::NAME_COL_NAME . " = ?");
        $this->selectStmt = $this->personDb->prepare("SELECT * FROM " . self::TABLE_NAME);
    }

}