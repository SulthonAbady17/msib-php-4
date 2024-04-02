<?php

class Mahasiswa
{
    private string $grade;
    private string $predicate;
    private string $status;

    public function __construct(
        private ?string $nim,
        private ?string $name,
        private ?string $college,
        private ?string $subject,
        private ?int $point,
    ) {
        $this->setGrade();
        $this->setPredicate();
        $this->setStatus();
    }

    public function setGrade(): void
    {
        if ($this->point >= 85) $this->grade = 'A';
        if ($this->point >= 75) $this->grade = 'B';
        if ($this->point >= 60) $this->grade = 'C';
        if ($this->point >= 40) $this->grade = 'D';
        else $this->grade = 'E';
    }

    public function setPredicate(): void
    {
        if ($this->getGrade() === 'A') $this->predicate = 'Sangat Memuaskan';
        if ($this->getGrade() === 'B') $this->predicate = 'Memuaskan';
        if ($this->getGrade() === 'C') $this->predicate = 'Cukup';
        if ($this->getGrade() === 'D') $this->predicate = 'Kurang';
        else $this->predicate = 'Sangat Kurang';
    }

    public function setStatus() : void {
        $this->status = $this->point >= 65 ? 'Lulus' : 'Tidak Lulus';
    }

    public function getNim(): string
    {
        return $this->nim;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCollege(): string
    {
        return $this->college;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getPoint(): int
    {
        return $this->point;
    }

    public function getGrade(): string
    {
        return $this->grade;
    }

    public function getPredicate(): string
    {
        return $this->predicate;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
