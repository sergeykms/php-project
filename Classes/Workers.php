<?php

class Workers
{
    private static array $workers = [];

    public static function create(array $worker): array
    {
        foreach ($worker as $value) {
            if (count(self::checkField($value)) === 0) {
                $value['register_time'] = date("d-m-Y H:i");
                self::$workers[] = $value;
            };
        }
        return self::$workers;
    }

    public static function all(): array
    {
        if (count(self::$workers) != 0) {
            return [
                'workers_count' => count(self::$workers),
                self::$workers
            ];
        }
        return [];
    }

    public static function save(): void
    {
        $fileName = 'workers.txt';
        $fileContent = array_reduce(self::$workers, function ($acc, $item) {
            foreach ($item as $key => $value) {
                $acc .= $key . ": " . $value . "\n";
            }
            return $acc . "----------------------------------------------------\n";
        }, "----------------------------------------------------\n");
        file_put_contents($fileName, $fileContent);
    }

    private static function checkField(array $worker): array
    {
        $error = [];
        if (!array_key_exists('name', $worker) || empty($worker['name'])) {
            $error['name'] = "Name is required";
        }
        if (!array_key_exists('email', $worker) || empty($worker['email'])) {
            $error['email'] = "Email is required";
        }
        if (!array_key_exists('age', $worker) || empty($worker['age'])) {
            $error['age'] = "Age is required";
        }
        if (!array_key_exists('profession', $worker) || empty($worker['profession'])) {
            $error['profession'] = "Rrofession is required";
        }
        return $error;
    }
}