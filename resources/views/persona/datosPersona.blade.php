<x-layout>
    <x-slot:title>
        Persona | Medida
    </x-slot>
    Persona
    <br>

    @foreach ($medidas as $medida)
        <div class="flex items-center space-x-4"" >
            {{$medida->prenda}} | {{$medida->valor}}
        </div>
        
        <br>
    @endforeach

    <form action="{{ route('persona.update', $persona)  }}" method="POST">
        @method('PUT')
        @csrf
        <!-- Sección Poleras -->
        <div class="section" id="polera-section">
            <h3>Poleras</h3>
            <div class="flex space-y-2 field-group ">
                <input type="text" name="polera[]" id="polera-1" class="border border-gray-400 p-2">
            </div>
            <div class="flex   space-y-2 field-group ">
                <input type="text" name="polera[]" id="polera-2" class="border border-gray-400 p-2">
            </div>
            <button class="bg-green-500 text-white px-4 py-2 mt-4 rounded"
             type="button" onclick="addField('polera-section', 'polera')">Agregar Medida</button>
        </div>

        <!-- Sección Camisas -->
        <div class="section" id="camisa-section">
            <h3>Camisas</h3>
            <div class="flex   space-y-2 field-group ">
                <input type="text" name="camisa[]" id="camisa-1" class="border border-gray-400 p-2">
            </div>
            <div class="flex   space-y-2 field-group ">
                <input type="text" name="camisa[]" id="camisa-2" class="border border-gray-400 p-2">
            </div>
            <button class="bg-green-500 text-white px-4 py-2 mt-4 rounded"
            type="button" onclick="addField('camisa-section', 'camisa')">Agregar Medida</button>
        </div>

        <button type="submit">Enviar</button>
    </form>


    <script>
        function addField(sectionId, fieldName) {
            // Seleccionar la sección donde se agregará el nuevo campo
            const section = document.getElementById(sectionId);

            // Contar cuántos campos ya existen en la sección
            const fieldCount = section.querySelectorAll('input').length;

            // Crear un nuevo div para el campo
            const fieldGroup = document.createElement('div');
            fieldGroup.className = 'field-group';

            // Crear la etiqueta
            const label = document.createElement('label');
            label.setAttribute('for', `${fieldName}-${fieldCount + 1}`);
            label.textContent = `Medida ${fieldCount + 1}:`;

            // Crear el campo de entrada
            const input = document.createElement('input');
            input.type = 'text';
            input.className = 'border border-gray-400 p-2';
            input.name = `${fieldName}[]`;
            input.id = `${fieldName}-${fieldCount + 1}`;

            // Agregar los elementos al div y luego a la sección
            //fieldGroup.appendChild(label);
            fieldGroup.appendChild(input);
            section.appendChild(fieldGroup);
        }
    </script>

</x-layout>
