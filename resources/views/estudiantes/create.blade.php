<!DOCTYPE html>

  <html lang="en">

  <head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Estudiantes</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  </head>

  <body>

    <h1 class="text-3xl font-bold underline">
      Estudiantes Create
    </h1>
    <br>
    <!DOCTYPE html>

  <html lang="en">

  <head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Estudiantes</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  </head>

  <body>

    <h1 class="text-3xl font-bold underline">

      Estudiantes Create

    </h1>

    <br>

    <form action="{{ route('estudiantes.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

      <div class="mb-6">

        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">

          Código

        </label>

        <input type="text" name="codigo" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

      </div>



      <div class="mb-6">

        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">

          Nombres

        </label>

        <input type="text" name="nombres" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">        

      </div>



      <div class="mb-6">

        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">

          Primer Apellido

        </label>

        <input type="text" name="pri_ape" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">        

      </div>



      <div class="mb-6">

        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">

          Segundo Apellido

        </label>

        <input type="text" name="seg_ape" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">        

      </div>



      <div class="mb-6">

        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">

          DNI

        </label>

        <input type="text" name="dni" autocomplete="off" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">        

      </div>



      <div class="flex items-center justify-between">

        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">

          Guardar

        </button>

      </div>

    </form>

  </body>

</html>


  </body>

</html>