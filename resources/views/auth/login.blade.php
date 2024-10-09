<x-layout>
    <div class="container vh-100">
        <div class="row justify-content-center mt-5 py-5">
            <div class="col-12">
                <h1 class="text-center">Accedi</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('login') }}" method="POST" class="shadow rounded p-5">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control password-input" id="password">
                        <a href="#" class="input-group-text eye eye1" id="basic-addon2"><i
                                class="bi bi-eye"></i></a>
                    </div>
                    <button class="btn btn-info">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
