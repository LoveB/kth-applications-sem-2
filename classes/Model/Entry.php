<?php
namespace Model;

/**
 *
 *
 * Holds one entry in the conversation.
 */
class Entry {
    private $commenter_name;
    private $comment_entry;
    private $timestamp;
    private $deleted;
    /**
     * Constructs a new, not deleted, entry with the timestamp set to the time when this constructor is called.
     */
    public function __construct($commenter_name, $comment_entry) {
        $this->commenter_name = $commenter_name;
        $this->comment_entry = $comment_entry;
        $this->timestamp = time();
        $this->deleted = false;
    }
    /**
     * @return string The author's nick name.
     */
    public function getCommenterName() {
        return $this->commenter_name;
    }
    /**
     * @return string The message.
     */
    public function getMsg() {
        return $this->comment_entry;
    }
    /**
     * @return int The time (on the server) when this entry was created.
     */
    public function getTimestamp() {
        return $this->timestamp;
    }
    public function getFormattedDate() {
        $date = date_create();
        date_timestamp_set($date,$this->timestamp);
        return date_format($date,"Y-m-d H:i");
    }
    /**
     * @return boolean True if the entry has been deleted.
     */
    public function isDeleted() {
        return $this->deleted;
    }
    /**
     * @param boolean $deleted Set to true if the entry shall be deleted.
     */
    public function setDeleted($deleted) {
        $this->deleted = $deleted;
    }
}