<?php
    class user {
        public function insertName() {
            return $this->insertNameInput();
        }

        private function insertNameInput() {
            return "INSERT INTO name (name) VALUES (?)";
        }
    }
?>