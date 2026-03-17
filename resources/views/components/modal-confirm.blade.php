@props([
    'id',
    'title' => '¿Estás seguro?',
    'message' => 'Esta acción no se puede deshacer.',
    'action',
    'method' => 'DELETE',
])

<div id="{{ $id }}" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40">

    <div class="bg-white rounded-xl shadow-xl w-full max-w-md mx-4 p-6">

        {{-- Ícono --}}
        <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-red-100">
            <i class="bi bi-exclamation-triangle text-red-500 text-2xl"></i>
        </div>

        {{-- Texto --}}
        <h3 class="text-lg font-semibold text-gray-800 text-center">{{ $title }}</h3>
        <p class="text-sm text-gray-500 text-center mt-1 mb-6">{{ $message }}</p>

        {{-- Botones --}}
        <div class="flex gap-3">
            <button type="button" onclick="closeModal('{{ $id }}')"
                class="flex-1 px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 transition">
                Cancelar
            </button>

            <form action="{{ $action }}" method="POST" class="flex-1">
                @csrf
                @method($method)
                <button type="submit"
                    class="w-full px-4 py-2 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-600 transition">
                    Sí, eliminar
                </button>
            </form>
        </div>
    </div>
</div>
<script>
    function openModal(id) {
        const modal = document.getElementById(id);
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeModal(id) {
        const modal = document.getElementById(id);
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    // Cerrar al hacer clic fuera del modal
    document.addEventListener('click', function(e) {
        document.querySelectorAll('[id^="modal-"]').forEach(modal => {
            if (e.target === modal) closeModal(modal.id);
        });
    });
</script>
