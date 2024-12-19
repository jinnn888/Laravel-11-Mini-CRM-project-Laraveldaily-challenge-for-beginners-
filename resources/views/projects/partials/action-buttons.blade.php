<div class="flex flex-row items-center space-x-2">
    <a href="{{ route('projects.edit', $project->id) }}" class="p-2 bg-green-600 text-gray-900 rounded text-sm text-white cursor-pointer shadow-sm">
        Edit
    </a>
    <form method="POST" action="{{ route('projects.destroy', $project->id) }}" class="inline-block">
        @csrf
        @method('DELETE')
        <button type="submit" class="p-2 bg-red-600 text-sm text-white rounded cursor-pointer shadow-sm">
            Delete
        </button>
    </form>
</div>
<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
