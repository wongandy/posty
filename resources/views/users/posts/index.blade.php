<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user->name }}'s posts ({{ $posts->count() }})
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @forelse ($posts as $post)
                        <div class="mb-4">
                            <div>
                                <span class="font-bold">{{ $post->user->name }}</span> <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                            
                            <p>{{ $post->body }}</p>

                            @can('delete', $post)
                                <form method="POST" action="{{ route('posts.delete', $post) }}">
                                    @csrf
                                    @method('DELETE')

                                    <button class="text-blue-500" type="submit">Delete</button>
                                </form>
                            @endcan
                        </div>
                    
                    @empty
                        <div class="mb-4">
                            <p>No posts yet.</p>
                        </div>
                    @endforelse

                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
