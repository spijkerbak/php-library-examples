<?php

class Book
{

    // fields
    private string $isbn;
    private int $year;
    private string $title;
    private string $author;

    // relations
    private $copies = [];
    private $library; // book knows library to register copies

    // constructor
    function __construct(Library $library, string $isbn, int $year, string $title, string $author)
    {
        $this->library = $library;
        $this->isbn = $isbn;
        $this->year = $year;
        $this->title = $title;
        $this->author = $author;
    }

    function __toString(): string
    {
        return "{$this->author} ({$this->year}). {$this->title}. ";
    }

    function getISBN(): string
    {
        return $this->isbn;
    }

    function addCopies(int $count): void
    {
        for ($i = 0; $i < $count; $i++) {
            $copy = new Copy($this);
            $this->copies[] = $copy;
            $this->library->addCopy($copy);
        }
    }

    function getActiveCopyNumbers(): array
    {
        $numbers = [];
        foreach ($this->copies as $copy) {
            if (!$copy->isWrittenOff()) {
                $numbers[] = $copy->getNumber();
            }
        }
        return $numbers;
    }

}