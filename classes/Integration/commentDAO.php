<?php

namespace Integration;

include __DIR__ . '/DbAccess.php';
include __DIR__ . '/../Model/Entry.php';

use Model\Entry;

/**
 * Handles all SQL calls to the <code>persons</code> database.
 */
class CommentDAO {

    const DB_NAME_PC = 'comments_pc';
    const DB_NAME_MB = 'comments_mb';
    const TABLE_NAME = 'comment';
    const ID_COL_NAME = 'id';
    const NAME_COL_NAME = 'name';
    const COM_COL_NAME = 'comment';
    const TIME_COL_NAME = 'time';
    const DEL_COL_NAME = 'deleted';

    private $dropTableStmt;
    private $createTableStmt;
    private $insertStmt;
    private $deleteStmt;
    private $updateStmt;
    private $selectStmt;
    private $commentsDb;

    /**
     * Connetcs to the <code>persons</code> database and empties it.
     *
     * @throws \mysqli_sql_exception If unable to connect to the database or to empty it.
     */
    public function __construct($type) {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        if($type == 'pc') {
            $this->commentsDb = new \mysqli('localhost', DbAccess::USER, DbAccess::PASS, self::DB_NAME_PC);
        }
        if($type == 'mb') {
            $this->commentsDb = new \mysqli('localhost', DbAccess::USER, DbAccess::PASS, self::DB_NAME_MB);
        }
//         $this->createTableStmt();
//       $this->deleteAllComments();

        $this->createContentStmts();

    }

    /**
     * Closes the connection to the <code>persons</code> database.
     */
    public function __destruct() {
        $this->commentsDb->close();
    }

    /**
     * Updates a person.
     *
     * @param type $name  The name of the person that is updated.
     * @param type $password   The new age of the person.
     * @throws \mysqli_sql_exception If unable to update.
     */
    public function updateComment($id, $name, $comment) {
        $this->updateStmt->bind_param('iss', $id, $name, $comment);
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
    public function createComment($id, $name, $comment) {
        $this->insertStmt->bind_param('iss', $id, $name, $comment);
        $this->insertStmt->execute();
    }

    /**
     * Deletes a person.
     *
     * @param type $name  The name of the person that is deleted.
     * @throws \mysqli_sql_exception If unable to delete.
     */
    public function deleteCommentById($id) {
        $this->deleteStmt->bind_param('i', $id);
        $this->deleteStmt->execute();
    }

    /**
     * Lists all persons.
     *
     * @return array An array of <code>Person</code> objects with all persons in the register.
     * @throws \mysqli_sql_exception If unable to delete.
     */
    public function getAllComments() {
        $comments = array();
        $this->selectStmt->execute();
        $this->selectStmt->bind_result($id, $name, $comment);
        while ($this->selectStmt->fetch()) {
            $comments[] = new Entry($id, $name, $comment);
        }
        return $comments;
    }

    /**
     * Deletes all persons.
     */
    public function deleteAllComments() {

        $this->commentsDb->query($this->dropTableStmt);
        $this->commentsDb->query($this->createTableStmt);
    }

    public function createTableStmt() {
        $this->dropTableStmt = "DROP TABLE IF EXISTS " . self::TABLE_NAME;
        $this->createTableStmt = "CREATE TABLE " . self::TABLE_NAME . " (" .
            self::ID_COL_NAME . " INT(3), " .
            self::NAME_COL_NAME . " VARCHAR(40), " .
            self::COM_COL_NAME . " VARCHAR(40), " .
            self::TIME_COL_NAME . " VARCHAR(40), " .
            self::DEL_COL_NAME . " INT(2))";
    }

    private function createContentStmts() {

//        $this->dropTableStmt = "DROP TABLE IF EXISTS " . self::TABLE_NAME;
//        $this->createTableStmt = "CREATE TABLE " . self::TABLE_NAME . " (" . self::ID_COL_NAME .
//           " INT(3), " . self::NAME_COL_NAME . " VARCHAR(40), " .
//            self::COM_COL_NAME . " VARCHAR(100))";



        $this->insertStmt = $this->commentsDb->prepare("INSERT INTO " . self::TABLE_NAME .
            " (" . self::ID_COL_NAME . ", " .
            self::NAME_COL_NAME . ", " .
            self::COM_COL_NAME . ") VALUES (?, ?, ?)");


        $this->deleteStmt = $this->commentsDb->prepare("DELETE FROM " . self::TABLE_NAME . " WHERE " .
            self::ID_COL_NAME . " = ?");
        $this->updateStmt = $this->commentsDb->prepare("UPDATE " . self::TABLE_NAME . " SET " .
            self::NAME_COL_NAME . " = ?, " .
            self::COM_COL_NAME . " = ? WHERE " .
            self::ID_COL_NAME . " = ?");
        $this->selectStmt = $this->commentsDb->prepare("SELECT * FROM " . self::TABLE_NAME);
    }



}