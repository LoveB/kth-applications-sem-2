<?php

namespace Integration;

include __DIR__ . '/DbAccess.php';
include __DIR__ . '/../Model/User.php';

use Model\User;

/**
 * Handles all SQL calls to the <code>users</code> database.
 */
class UserDAO {

    const DB_NAME = 'users';
    const TABLE_NAME = 'user';
    const NAME_COL_NAME = 'name';
    const PASS_COL_NAME = 'password';

    private $dropTableStmt;
    private $createTableStmt;
    private $insertStmt;
    private $deleteStmt;
    private $updateStmt;
    private $selectStmt;
    private $usersDb;

    /**
     * Connetcs to the <code>users</code> database.
     *
     * @throws \mysqli_sql_exception If unable to connect to the database or to empty it.
     */
    public function __construct() {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->usersDb = new \mysqli('localhost', DbAccess::USER, DbAccess::PASS, self::DB_NAME);
        //$this->createTableStmt();
        //$this->deleteAllUsers();
        $this->createContentStmts();
    }

    /**
     * Closes the connection to the <code>users</code> database.
     */
    public function __destruct() {
        $this->usersDb->close();
    }

    /**
     * Updates a person.
     *
     * @param type $name  The name of the user that is updated.
     * @param type $password   The new password of the user.
     * @throws \mysqli_sql_exception If unable to update.
     */
    public function updateUser($name, $password) {
        $this->updateStmt->bind_param('ss', $name, $password);
        $this->updateStmt->execute();
    }

    /**
     * Creates a new user.
     *
     * @param type $name  The name of the person that is inserted.
     * @param type $password   The password of the user that is inserted
     * @throws \mysqli_sql_exception If unable to insert.
     */
    public function createUser($name, $password) {
        $this->insertStmt->bind_param('ss', $name, $password);
        $this->insertStmt->execute();
    }

    /**
     * Deletes a user.
     *
     * @param type $name  The name of the user that is deleted.
     * @throws \mysqli_sql_exception If unable to delete.
     */
    public function deleteUserByName($name) {
        $this->deleteStmt->bind_param('s', $name);
        $this->deleteStmt->execute();
    }

    /**
     * Lists all users.
     *
     * @return array An array of <code>User</code> objects with all persons in the register.
     * @throws \mysqli_sql_exception If unable to delete.
     */
    public function getAllUsers() {
        $users = array();
        $this->selectStmt->execute();
        $this->selectStmt->bind_result($name, $password);
        while ($this->selectStmt->fetch()) {
            $users[] = new User($name, $password);

        }
        return $users;
    }

    /**
     * Deletes all users.
     */
    public function deleteAllUsers() {

        $this->usersDb->query($this->dropTableStmt);
        $this->usersDb->query($this->createTableStmt);
    }

    public function createTableStmt() {

        $this->dropTableStmt = "DROP TABLE IF EXISTS " . self::TABLE_NAME;
        $this->createTableStmt = "CREATE TABLE " . self::TABLE_NAME . " (" . self::NAME_COL_NAME .
            " VARCHAR(40), " . self::PASS_COL_NAME . " VARCHAR(15)) ";
    }

    private function createContentStmts() {

//        $this->dropTableStmt = "DROP TABLE IF EXISTS " . self::TABLE_NAME;
//        $this->createTableStmt = "CREATE TABLE " . self::TABLE_NAME . " (" . self::NAME_COL_NAME .
//            " VARCHAR(40), " . self::PASS_COL_NAME . " VARCHAR(15)) ";

        $this->insertStmt = $this->usersDb->prepare("INSERT INTO " . self::TABLE_NAME .
            " (" . self::NAME_COL_NAME . ", " .
            self::PASS_COL_NAME . ") VALUES (?, ?)");

        $this->deleteStmt = $this->usersDb->prepare("DELETE FROM " . self::TABLE_NAME . " WHERE " .
            self::NAME_COL_NAME . " = ?");

        $this->updateStmt = $this->usersDb->prepare("UPDATE " . self::TABLE_NAME . " SET " .
            self::PASS_COL_NAME . " = ? WHERE " .
            self::NAME_COL_NAME . " = ?");

        $this->selectStmt = $this->usersDb->prepare("SELECT * FROM " . self::TABLE_NAME);
    }



}