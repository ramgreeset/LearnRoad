<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TermFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => 'Создание баз данных',
            'description' => 'create database...',
            'links' => 'https://tuk.com',
            'grade' => '0',
            'tag' => 'SQL',
            'repeat_counter' => '0',
        ];
    }
}
