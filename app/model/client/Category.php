<?php

use Octopod\Octophp\BaseModel;

class Category extends BaseModel {

    protected static $table = 'categories';

    protected static $fields = array (
        "id" => array ("type"=>"key"),
        "name" => array ("type"=>"column", "required"=>true, "datatype"=>"string"),
        "type" => array ("type"=>"column", "required"=>true, "datatype"=>"string"),
        "categoryId" => array ("type"=>"column", "required"=>true, "datatype"=>"string"),
    );

}