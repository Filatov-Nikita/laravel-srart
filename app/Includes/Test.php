<?php
    namespace App\Includes;
    use App\Includes\InterfaceTest;

    class Test implements InterfaceTest {
        protected $count = 0;
        public function increment() {
            $this->count++;
        }
        public function decrement() {
            $this->count--;
        }
        public function getValue() {
            return $this->count;
        }
    }
