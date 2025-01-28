<?php

namespace App\Models;

use CodeIgniter\Model;

class UserSkillModel extends Model
{
    protected $table = 'user_skills';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'skill_id', 'level', 'added_at'];

    // Optional: You can define validation rules if needed
    protected $validationRules = [
        'user_id' => 'required|is_not_unique[users.id]',
        'skill_id' => 'required|is_not_unique[skills.id]',
        'level' => 'required|in_list[beginner,intermediate,advanced,expert]',
    ];
}