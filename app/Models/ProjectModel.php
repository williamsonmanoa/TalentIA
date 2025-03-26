<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model{

    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'created_at', 'updated_at'];

    // Optional: You can define validation rules if needed
    protected $validationRules = [
        'name' => 'required|max_length[255]',
        'description' => 'max_length[100]',
    ];


    function getActiveSkills($idProjet){
        // mila dinihana le requete
        $sqlActive = "
            select 
                * 
            from 
                info_projet ip
            left join
                skills s
            on ip.idSkill = s.id
            where 
                ip.id = 3
            and
        ";
    }

}












?>