<?php
    class DB {
        private $mysqli;
        public function __construct($settings) {
            #region Settings
            $settings = explode(";", $settings);
            $host = $settings[0];
            $user = $settings[1];
            $password = $settings[2];
            $db = $settings[3];
            #endregion
            $this->mysqli = @ new mysqli($host, $user, $password, $db);
            if($this->mysqli->connect_errno) {
                throw new Exception($this->mysqli->connect_error);
            }
        }
        public function escape($string) {
            return $this->mysqli->escape($string);
        }
        public function error() {
            return $this->mysqli->error;
        }
        public function query($sql, $fetch = true, $escape = false) {
            if($escape) $sql = $this->escape($sql);
            $query = $this->mysqli->query($sql);
            if($this->error()) throw new Exception($this->error());
            if(!$fetch || is_bool($query)) return $query;
            $result =  $query->fetch_all(MYSQLI_ASSOC);
            if(count($result) == 1) return $result[0];
            return $result;
        }
        public function find($table, $key, $val) {
            if(is_string($val)) $val = $this->escape($val);
            return $this->query("SELECT * FROM $table WHERE $key = '$val' LIMIT 1", true, false);
        }
    }
?>