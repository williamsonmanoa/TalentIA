<?php

namespace App\Controllers;

use App\Models\SkillModel;
use CodeIgniter\Controller;

class SkillController extends Controller
{
    public function index()
    {
        $skillModel = new SkillModel();
        $data['skills'] = $skillModel->findAll();  // Fetch all skills
        return view('skills/index', $data);  // Load skill list view
    }

    public function create()
    {
        return view('skills/create');  // Load create skill form
    }

    public function store()
    {
        $skillModel = new SkillModel();

        // Collect form data
        $data = [
            'name'     => $this->request->getPost('name'),
            'category'  => $this->request->getPost('category'),
        ];

        // Save the skill
        $skillModel->insert($data);

        return redirect()->to(base_url('/skills'))->with('success', 'Skill added successfully!');
    }

    public function edit($id)
    {
        $skillModel = new SkillModel();
        $data['skill'] = $skillModel->find($id);  // Find the skill by ID
        return view('skills/edit', $data);  // Load edit form with skill data
    }

    public function update($id)
    {
        $skillModel = new SkillModel();

        // Collect form data
        $data['name']     = $this->request->getPost('name');
        $data['category']  = $this->request->getPost('category');

        // Update skill
        $skillModel->update($id, $data);

        return redirect()->to(base_url('/skills'))->with('success', 'Skill updated successfully!');
    }

    public function delete($id)
    {
        $skillModel = new SkillModel();
        $skillModel->delete($id);  // Delete the skill
        return redirect()->to(base_url('/skills'))->with('success', 'Skill deleted successfully!');
    }
}