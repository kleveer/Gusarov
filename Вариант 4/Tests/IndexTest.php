<?php
namespace Tests;
use PHPUnit\Framework\TestCase;
require 'Задание 1\index.php';
require 'Задание 2\index.php';


class IndexTest extends TestCase
{
    public function testIndex1(): void
    {
      $string = "В материале речь идет о том";
       
       $result = countLetters($string);
       self::assertEquals( ["В"=>1,"м"=> 2,"а"=>2,"т"=>3,"е"=>4,"р"=>2,"и"=>2,"л"=>1,"ч"=>1,"ь"=>1,"д"=>1, "о"=>2,],$result);
    }
    public function testIndex2(): void
    {
      $arr = [[
        'name' =>'Иван',
        'surname' => 'Иванович',
        'p_name' => 'Иванов',
        'education' => 'среднее',
        'position' => 'тестировщик',
        'tel' => '+79112212112',
        'adresss' => 'Санкт-Петербург, пр.Просвещения д.8,кв.4'
      ],
      [
        'name' => 'Андрей',
        'surname' => 'Иванович',
        'p_name' => 'Кузнецов',
        'education' => 'общее',
        'position' => 'слесарь',
        'tel' => '+79112223344',
        'adresss' => 'Санкт-Петербург, пр.Карпинского д.8,кв.4'
      ],[
        'name' => 'Петр',
        'surname' => 'Иванович',
        'p_name' => 'Петров',
        'education' => 'высшее',
        'position' => 'менеджер проекта',
        'tel' => '+79112212112',
        'adresss' => 'Санкт-Петербург, ул.Учительская д.8,кв.4'
      ],[
        'name' => 'Николай',
        'surname' => 'Иванович',
        'p_name' => 'Смирнов',
        'education' => 'общее',
        'position' => 'плотник',
        'tel' => '+79112212552',
        'adresss' => 'Санкт-Петербург, ул.Ушинского д.8,кв.4'
      ],[
        'name' => 'Владимир',
        'surname' => 'Иванович',
        'p_name' => 'Сидоров',
        'education' => 'высшее',
        'position' => 'начальник отдела',
        'tel' => '+79112212552',
        'adresss' => 'Санкт-Петербург, ул.Ушинского д.8,кв.4'
      ]
    ];
       
       $result = education($arr,'высшее');
       self::assertEquals([
        [
          'name' => 'Петр',
          'surname' => 'Иванович',
          'p_name' => 'Петров',
          'education' => 'высшее',
        ],[
          'name' => 'Владимир',
          'surname' => 'Иванович',
          'p_name' => 'Сидоров',
          'education' => 'высшее',
        ]
       ],$result);
    }
}

