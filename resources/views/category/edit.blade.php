<x-app-layout>


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-md-0">
            <h2 class="h4">Edit Category</h2>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-12 col-xl-8">

            <div class="card card-body border-0 shadow mb-4">
                <h2 class="h5 mb-4">Category information</h2>

                <form method="POST" action="{{ route('categories.update', $category->id) }}">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name" type="text" placeholder="Name"
                                    value="{{ old('name', $category->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="category">Description</label>
                                <input class="form-control @error('description') is-invalid @enderror" id="description"
                                    name="description" type="text" placeholder="Description"
                                    value="{{ old('description', $category->description) }}" required>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Update</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
