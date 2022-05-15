<?php

class Albums extends DbConn{

    public function getAlbums(){
        $sql = "SELECT * FROM albums";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0){
            while($row = $result->fetch_assoc()){
                $data[]=$row; 
            }
            return $data;
        }
    }
}