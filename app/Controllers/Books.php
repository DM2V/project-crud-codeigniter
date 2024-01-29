<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Book;

class Books extends Controller
{

  /* Gett all books */
  public function index()
  {
    $book = new Book();
    $data['books'] = $book->orderBy('id', 'ASC')->findAll();

    $data['header'] = view('templates/header');
    $data['footer'] = view('templates/footer');

    return view('books/get_all_books', $data);
  }

  /* Create ans save book */
  public function create()
  {
    $book = new Book();

    $data['header'] = view('templates/header');
    $data['footer'] = view('templates/footer');

    return view('books/create', $data);
  }

  public function save()
  {
    $book = new Book();

    $validation = $this->validate([
      'name' => 'required|min_length[3]|max_length[20]',
      'author' => 'required|min_length[3]|max_length[20]'
    ]);

    if (!$validation) {
      $session = session();
      $session->setFlashdata('errors', 'Porfavor revise la información ingresada');

      return redirect()->back()->withInput();
    }

    $data = [
      'name' => $this->request->getPost('name'),
      'author' => $this->request->getPost('author')
    ];

    $book->insert($data);

    return $this->response->redirect(site_url('/books'));
  }

  /* Delete book */
  public function delete($id = null)
  {
    $book = new Book();

    $book->where('id', $id)->delete($id);

    return $this->response->redirect(site_url('/books'));
  }

  /* Edit  and -update book */
  public function edit($id = null)
  {
    $book = new Book();

    $data['book'] = $book->where('id', $id)->first();

    $data['header'] = view('templates/header');
    $data['footer'] = view('templates/footer');


    return view('books/edit', $data);
  }

  public function update()
  {
    $book = new Book();

    $data = [
      'name' => $this->request->getPost('name'),
      'author' => $this->request->getPost('author')
    ];
    $id = $this->request->getPost('id');

    $validation = $this->validate([
      'name' => 'required|min_length[3]|max_length[20]',
      'author' => 'required|min_length[3]|max_length[20]'
    ]);

    if (!$validation) {
      $session = session();
      $session->setFlashdata('errors', 'Porfavor revise la información ingresada');

      return redirect()->back()->withInput();
    }

    $book->update($id, $data);

    return $this->response->redirect(site_url('/books'));
  }
}
