<?php

namespace Polon\Type;

class Personnel
{

    /**
     * @var string
     */
    private $Type;

    /**
     * @var string
     */
    private $LastName;

    /**
     * @var string
     */
    private $FirstName;

    /**
     * @var string
     */
    private $MiddleName;

    /**
     * @var string
     */
    private $DocType;

    /**
     * @var string
     */
    private $DocSeries;

    /**
     * @var string
     */
    private $DocNumber;

    /**
     * @var string
     */
    private $DocIssue;

    /**
     * @var \DateTimeInterface
     */
    private $DocIssueDate;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return Personnel
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return Personnel
     */
    public function withLastName($LastName)
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return Personnel
     */
    public function withFirstName($FirstName)
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }

    /**
     * @param string $MiddleName
     * @return Personnel
     */
    public function withMiddleName($MiddleName)
    {
        $new = clone $this;
        $new->MiddleName = $MiddleName;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocType()
    {
        return $this->DocType;
    }

    /**
     * @param string $DocType
     * @return Personnel
     */
    public function withDocType($DocType)
    {
        $new = clone $this;
        $new->DocType = $DocType;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocSeries()
    {
        return $this->DocSeries;
    }

    /**
     * @param string $DocSeries
     * @return Personnel
     */
    public function withDocSeries($DocSeries)
    {
        $new = clone $this;
        $new->DocSeries = $DocSeries;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocNumber()
    {
        return $this->DocNumber;
    }

    /**
     * @param string $DocNumber
     * @return Personnel
     */
    public function withDocNumber($DocNumber)
    {
        $new = clone $this;
        $new->DocNumber = $DocNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocIssue()
    {
        return $this->DocIssue;
    }

    /**
     * @param string $DocIssue
     * @return Personnel
     */
    public function withDocIssue($DocIssue)
    {
        $new = clone $this;
        $new->DocIssue = $DocIssue;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDocIssueDate()
    {
        return $this->DocIssueDate;
    }

    /**
     * @param \DateTimeInterface $DocIssueDate
     * @return Personnel
     */
    public function withDocIssueDate($DocIssueDate)
    {
        $new = clone $this;
        $new->DocIssueDate = $DocIssueDate;

        return $new;
    }


}

