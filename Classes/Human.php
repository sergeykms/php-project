<?php

namespace Classes\Human;
class Human
{
    private string $name;
    private int $age;
    private string $job;
    private string $about;
    private array $languages = [];

    public function setHuman(string $name, int $age, string $job, string $about, array $languages): void
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
        $this->about = $about;
        $this->languages = $languages;
    }

    public function showHuman(): void
    {
        echo "
          <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Age</th>
              <th>Job</th>
              <th>About</th>
              <th>languages</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{$this->name}</td>
              <td>{$this->age}</td>
              <td>{$this->job}</td>
              <td>$this->about</td>
            </tr>
            <tr>
          </tbody>
        </table>
        ";
    }

    public function infoHuman(): array
    {
        return [
            "name" => $this->name,
            "age" => $this->age,
            "job" => $this->job,
            "about" => $this->about,
            "languages" => $this->languages,
        ];
    }
}