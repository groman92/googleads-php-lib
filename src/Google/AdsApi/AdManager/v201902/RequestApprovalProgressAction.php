<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RequestApprovalProgressAction extends \Google\AdsApi\AdManager\v201902\ProgressAction
{

    /**
     * @var int $approverId
     */
    protected $approverId = null;

    /**
     * @var int[] $eligibleApproverUserIds
     */
    protected $eligibleApproverUserIds = null;

    /**
     * @var int[] $eligibleApproverTeamIds
     */
    protected $eligibleApproverTeamIds = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @param \Google\AdsApi\AdManager\v201902\DateTime $evaluationTime
     * @param string $evaluationStatus
     * @param int $approverId
     * @param int[] $eligibleApproverUserIds
     * @param int[] $eligibleApproverTeamIds
     * @param string $comment
     * @param string $approvalStatus
     */
    public function __construct($evaluationTime = null, $evaluationStatus = null, $approverId = null, array $eligibleApproverUserIds = null, array $eligibleApproverTeamIds = null, $comment = null, $approvalStatus = null)
    {
      parent::__construct($evaluationTime, $evaluationStatus);
      $this->approverId = $approverId;
      $this->eligibleApproverUserIds = $eligibleApproverUserIds;
      $this->eligibleApproverTeamIds = $eligibleApproverTeamIds;
      $this->comment = $comment;
      $this->approvalStatus = $approvalStatus;
    }

    /**
     * @return int
     */
    public function getApproverId()
    {
      return $this->approverId;
    }

    /**
     * @param int $approverId
     * @return \Google\AdsApi\AdManager\v201902\RequestApprovalProgressAction
     */
    public function setApproverId($approverId)
    {
      $this->approverId = (!is_null($approverId) && PHP_INT_SIZE === 4)
          ? floatval($approverId) : $approverId;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getEligibleApproverUserIds()
    {
      return $this->eligibleApproverUserIds;
    }

    /**
     * @param int[]|null $eligibleApproverUserIds
     * @return \Google\AdsApi\AdManager\v201902\RequestApprovalProgressAction
     */
    public function setEligibleApproverUserIds(array $eligibleApproverUserIds = null)
    {
      $this->eligibleApproverUserIds = $eligibleApproverUserIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getEligibleApproverTeamIds()
    {
      return $this->eligibleApproverTeamIds;
    }

    /**
     * @param int[]|null $eligibleApproverTeamIds
     * @return \Google\AdsApi\AdManager\v201902\RequestApprovalProgressAction
     */
    public function setEligibleApproverTeamIds(array $eligibleApproverTeamIds = null)
    {
      $this->eligibleApproverTeamIds = $eligibleApproverTeamIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \Google\AdsApi\AdManager\v201902\RequestApprovalProgressAction
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param string $approvalStatus
     * @return \Google\AdsApi\AdManager\v201902\RequestApprovalProgressAction
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

}
