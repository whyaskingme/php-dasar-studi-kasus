<?php

namespace Service {


    use Repository\TodolistRepository;

    interface TodolistService {

        function showtodolist() : void;

        function addtodolist(string $todo): void;

        function removetodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService {
       
       private TodolistRepository $todoListRepository;

       public function __construct(TodolistRepository $todolistRepository)
       {
            $this->todoListRepository = $todolistRepository;
       }

        function showtodolist() : void
        {
            echo "TODOLIST" . PHP_EOL;
            $todolist = $this->todoListRepository->findall();
            foreach ($todolist as $number => $value) {
                echo "$number. $value" . PHP_EOL;
            }
        }

        function addtodolist(string $todo): void
        {
            
        }

        function removetodolist(int $number): void
        {
             
        }
    }
}