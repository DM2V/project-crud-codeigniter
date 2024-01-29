<body class="bg-gray-100 mt-9">
  <?= $header ?>


  <div class="container mx-auto bg-white shadow-md rounded-lg overflow-hidden">
    <div class="flex items-center justify-between">
      <a class="pb-3" href="<?= base_url('/') ?>"></a>
          <a class="pb-3" href="<?= base_url('/create') ?>">Crear Libro -></a>
    </div>

    <h1 class="text-2xl font-bold bg-gray-800 text-white p-4">Lista de Libros</h1>

    <table class="min-w-full border border-gray-300">
      <thead>
        <tr class="bg-gray-200">
          <th class="py-3 border-b text-center font-bold text-md text-gray-700">ID</th>
          <th class="py-3 border-b text-center font-bold text-md text-gray-700">Nombre</th>
          <th class="py-3 border-b text-center font-bold text-md text-gray-700">Autor</th>
          <th class="py-3 border-b text-center font-bold text-md text-gray-700">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- All Books -->
        <?php foreach ($books as $book) : ?>
          <tr class="hover:bg-gray-100 text-center">
            <td class="py-4 px-3 border-b"><?= $book['id'] ?></td>
            <td class="py-4 px-3 border-b"><?= $book['name'] ?></td>
            <td class="py-4 px-3 border-b"><?= $book['author'] ?></td>
            <td class="py-4 px-3 border-b">

              <a href="<?= base_url('edit/' . $book['id']) ?>" type="button" class="p-1 ml-2 text-blue-800">Editar</a>

              <a href="<?= base_url('delete/' . $book['id']) ?>" type="button" class="p-1 ml-2 text-white bg-red-500 rounded">Borrar</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <?= $footer ?>
</body>