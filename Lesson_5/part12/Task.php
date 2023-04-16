<?php

class Task
{
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priority;
    private bool $isDone = false;
    private User $user;
    private array $comments = [];

    public function __construct(User $user, string $description, int $priority = 1)
    {
        $this->setDateCreated(new DateTime());
        $this->user = $user;
        $this->description = $description;
        $this->priority = $priority;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
        $this->setDateUpdated(new DateTime());
    }

    public function markAsDone(): void
    {
       $this->setIsDone(true);
       $this->setDateDone(new DateTime());
       $this->setDateUpdated(new DateTime());
    }

    /**
     * @return DateTime
     */
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @param DateTime $dateCreated
     */
    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * @param DateTime $dateUpdated
     */
    public function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * @return DateTime
     */
    public function getDateDone(): DateTime
    {
        return $this->dateDone;
    }

    /**
     * @param DateTime $dateDone
     */
    public function setDateDone(DateTime $dateDone): void
    {
        $this->dateDone = $dateDone;
    }

    /**
     * @return bool
     */
    public function getIsDone(): bool
    {
        return $this->isDone;
    }

    /**
     *
     */
    private function setIsDone(): void
    {
        $this->isDone = true;
    }

    /**
     * @return array
     */
    public function getComments(): array
    {
        return $this->comments;
    }

    /**
     * @param string $comment
     */
    public function setComment(Comment $comment): void
    {
        $this->comments[] = $comment;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }
}