<?php

class sessionResult{
    //session status constants
    const SESSION_STATUS_SCHEDULED = 0;
    const SESSION_STATUS_INSESSION = 3; //1?
    const SESSION_STATUS_FINISHED = 2;
    /**
     * @var int
     */
    public $currentUsersInSession;
    /**
     * @var long
     */
    public $duration;
    /**
     * @var string
     */
    public $endDate;
    /**
     * @var long
     */
    public $endDateTimeStamp;
    /**
     * @var boolean
     */
    public $hasModerationPin;
    /**
     * @var boolean
     */
    public $hassessionPin;
    /**
     * @var boolean
     */
    public $listPubliclyInColibri;
    /**
     * @var int
     */
    public $maxSessionUsers;
    /**
     * @var string
     */
    public $moderationPin;
    /**
     * @var string
     */
    public $name;
    /**
     * @var recordingInfo
     */
    public $recordInfo;
    /**
     * @var string
     */
    public $resultMessage;
    /**
     * @var string
     */
    public $sessionNumber;
    /**
     * @var string
     */
    public $sessionPin;
    /**
     * @var int
     */
    public $sessionStatus;
    /**
     * @var string
     */
    public $sessionUniqueID;
    /**
     * @var string
     */
    public $startDate;
    /**
     * @var long
     */
    public $startDateTimeStamp;
    /**
     * @var boolean
     */
    public $sucess;
}
