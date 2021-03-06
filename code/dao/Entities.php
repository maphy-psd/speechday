<?php

abstract class Entity {
    private $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }
}

class User extends Entity {
    private $userName;
    private $passwordHash;
    private $firstName;
    private $lastName;
    private $class;
    private $role;
    private $title;
    private $absent;

    public function __construct($id, $userName, $passwordHash, $firstName, $lastName, $class, $role, $title, $absent = 0) {
        parent::__construct($id);
        $this->userName = $userName;
        $this->passwordHash = $passwordHash;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->class = $class;
        $this->role = $role;
        $this->title = $title;
        $this->absent = $absent;
    }


    public function getUserName() {
        return $this->userName;
    }

    public function getPasswordHash() {
        return $this->passwordHash;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getClass() {
        return $this->class;
    }

    public function getRole() {
        return $this->role;
    }

    public function getTitle() {
        return $this->title;
    }

    public function isAbsent() {
        return $this->absent;
    }

    public function __toString() {
        return json_encode(array(
            'id' => $this->getId(),
            'userName' => $this->userName,
            'passwordHash' => $this->passwordHash,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'class' => $this->class,
            'role' => $this->role,
            'title' => $this->title,
            'absent' => $this->absent
        ));
    }
}

class Event extends Entity {
    private $name;
    private $dateFrom;
    private $dateTo;
    private $slotTime;
    private $breakFrequency;
    private $isActive;
    private $startPostDate;
    private $finalPostDate;

    public function __construct($id, $name, $dateFrom, $dateTo, $slotTime, $breakFrequency, $isActive, $startPostDate, $finalPostDate) {
        parent::__construct($id);
        $this->name = $name;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->slotTime = $slotTime;
        $this->breakFrequency = $breakFrequency;
        $this->isActive = $isActive;
        $this->startPostDate = $startPostDate;
        $this->finalPostDate = $finalPostDate;
    }

    public function getName() {
        return $this->name;
    }

    public function getDateFrom() {
        return $this->dateFrom;
    }

    public function getDateTo() {
        return $this->dateTo;
    }

    public function getSlotTime() {
        return $this->slotTime;
    }

    public function getBreakFrequency() {
        return $this->breakFrequency;
    }

    public function isActive() {
        return $this->isActive;
    }
    public function getstartPostDate() {
        return $this->startPostDate;
    }
    public function getfinalPostDate() {
        return $this->finalPostDate;
    }
}

class Slot extends Entity {
    private $eventId;
    private $teacherId;
    private $studentId;
    private $dateFrom;
    private $dateTo;
    private $type;
    private $available;
    private $bookedbyteacher;

    public function __construct($id, $eventId, $teacherId, $studentId, $dateFrom, $dateTo, $type, $available, $bookedbyteacher) {
        parent::__construct($id);
        $this->eventId = $eventId;
        $this->teacherId = $teacherId;
        $this->studentId = $studentId;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->type = $type;
        $this->available = $available;
        $this->bookedbyteacher = $bookedbyteacher;
    }

    public function getEventId() {
        return $this->eventId;
    }

    public function getTeacherId() {
        return $this->teacherId;
    }

    public function getStudentId() {
        return $this->studentId;
    }

    public function getDateFrom() {
        return $this->dateFrom;
    }

    public function getDateTo() {
        return $this->dateTo;
    }

    public function getType() {
        return $this->type;
    }

    public function getAvailable() {
        return $this->available;
    }
    
    public function getBookedByTeacher() {
        return $this->bookedbyteacher;
    }
}

class Log extends Entity {
    private $userId;
    private $action;
    private $info;
    private $date;

    public function __construct($id, $userId, $action, $info, $date) {
        parent::__construct($id);
        $this->userId = $userId;
        $this->action = $action;
        $this->info = $info;
        $this->date = $date;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getAction() {
        return $this->action;
    }

    public function getInfo() {
        return $this->info;
    }

    public function getDate() {
        return $this->date;
    }
}

class Room extends Entity {
    private $roomNumber;
    private $roomName;
    private $teacherId;

    public function __construct($id, $roomNumber, $roomName, $teacherId) {
        parent::__construct($id);
        $this->roomNumber = $roomNumber;
        $this->roomName = $roomName;
        $this->teacherId = $teacherId;
    }

    public function getRoomNumber() {
        return $this->roomNumber;
    }

    public function getRoomName() {
        return $this->roomName;
    }

    public function getTeacherId() {
        return $this->teacherId;
    }
}
