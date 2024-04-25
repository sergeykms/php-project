<?php

class Lesson
{
    private string $title;
    private string $description;
    private string $data;
    private int $time;
    private string $work;
    private string $teacher;

    public function __construct(string $title, string $description, string $data, int $time, string $work, string $teacher)
    {
        $this->title = $title;
        $this->description = $description;
        $this->data = $data;
        $this->time = $time;
        $this->work = $work;
        $this->teacher = $teacher;
    }

    public function hours(): float
    {
        return $this->time / 60;
    }

    public function info(): array
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'start' => $this->data,
            'time' => $this->hours(),
            'work' => $this->work,
            'teacher' => $this->teacher,
        ];
    }

    public function updateStart(string $data): void
    {
        $this->data = $data;
    }
}