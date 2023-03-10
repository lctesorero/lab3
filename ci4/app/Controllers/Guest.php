<?php

namespace App\Controllers;

use App\Models\GuestModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Guest extends BaseController
{
    public function index()
    {
        $model = model(GuestModel::class);

        $data = [
            'guest'  => $model->getGuest(),
            'title' => 'My Guest',
        ];

        return view('templates/header', $data)
            . view('guest/index')
            . view('templates/footer');
    }

    public function view($note_id = null)
    {
        $model = model(GuestModel::class);

        $data['guest'] = $model->getGuest($note_id);

        if (empty($data['guest'])) {
            throw new PageNotFoundException('This person does not exist: ' . $note_id);
        }

        $data['title'] = $data['guest']['name'];

        return view('templates/header', $data)
            . view('guest/view')
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('templates/header', ['title' => 'Form'])
                . view('guest/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['id','name', 'email', 'website', 'comment', 'gender']);

        // Checks whether the submitted data passed the validation rules.
        if (! $this->validateData($post, [
            'name' => 'required|max_length[100]|min_length[3]',
            'email' => 'required|max_length[100]|min_length[3]',
            'website' => 'required|max_length[100]|min_length[10]',
            'comment' => 'required|max_length[100]|min_length[3]',
            'gender' => 'required|max_length[100]|min_length[3]',
        ])) {
            // The validation fails, so returns the form.
            return view('templates/header', ['title' => 'Form'])
                . view('guest/create')
                . view('templates/footer');
        }

        $model = model(GuestModel::class);

        $model->save([
            'name' => $post['name'],
            'email'  => $post['email'],
            'website'  => $post['website'],
            'comment'  => $post['comment'],
            'gender'  => $post['gender'],
        ]);

        return view('templates/header', ['title' => 'Form'])
            . view('guest/success')
            . view('templates/footer');
    }
}
