<?= $header ?>

<body>

  <div class="">
    <h2>Crear Nuevo Libro</h2>
  </div>

  <div class="max-w-md mx-auto bg-[#414141] p-6 rounded-md shadow-md">

    <?php if (session('errors')) { ?>
      <div class="bg-red-500 text-white font-bold text-center py-2 rounded-full">
        <?php echo session('errors') ?>
      </div>
    <?php } ?>

    <form method="post" action="<?= site_url('/save') ?>" enctype="multipart/form-data" class="space-y-4">
      <?= csrf_field() ?>

      <label for="name" class="block text-sm font-semibold text-white">Nombre:</label>
      <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-white" value="<?= old('name') ?>">

      <label for="author" class="block text-sm font-semibold text-white">Autor:</label>
      <input type="text" name="author" id="author" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-white" value="<?= old('author') ?>">

      <div class="flex gap-5">
        <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500 focus:outline-none focus:bg-blue-600">Guardar</button>

        <a type="submit" class="w-full py-2 bg-[#212329] text-white rounded-md hover:bg-gray-500 focus:outline-none focus:bg-blue-600 text-center" href="<?=base_url('/books')?>" >Cancelar</a>
      </div>

    </form>
  </div>
</body>

<?= $footer ?>