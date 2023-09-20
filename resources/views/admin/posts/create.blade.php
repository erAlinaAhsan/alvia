<x-layout>
    <x-setting heading="Publish New Post">
        <div class="mt-6">
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" />
                <x-form.input name="slug" />

                <x-form.input name="thumbnail" type="file" />
                <x-form.textarea name="excerpt" />
                <x-form.textarea name="body" />

                <x-form.field>
                    <label for="published_at">Publishing Date: </label>
                    <input type="published_at" id="published_at" name="published_at" value="{{ date('Y-m-d') }}"
                        required>
                    <x-form.error name="published_at" />
                </x-form.field>

                <x-form.field>
                    <x-form.label name="category" />
                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                {{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category" />
                </x-form.field>

                <x-form.button>Publish</x-form.button>
            </form>
        </div>
    </x-setting>
</x-layout>
