@extends('layouts.template')
@section('content')
<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-body p-0">
                    <div class="text-center bg-light py-5 border-bottom">
                        <div class="position-relative d-inline-block mb-3">
                            <div class="profile-image-container position-relative d-inline-block">
                                @if ($user->profile_image)
                                    <img src="{{ asset('storage/photos/' . $user->profile_image) }}"
                                        class="rounded-circle profile-image"
                                        style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #ffffff; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
                                @else
                                    <img src="{{ asset('/public/img/polinema-bw.png') }}"
                                        class="rounded-circle profile-image"
                                        style="width: 150px; height: 150px; object-fit: cover; border: 4px solid #ffffff; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
                                @endif
                            </div>
                        </div>
                        <h3 class="fw-bold mb-1">{{ $user->nama }}</h3>
                        <p class="text-muted">
                            <i class="fas fa-user-circle"></i>
                            {{ $user->username }}
                        </p>
                    </div>

                    <div class="p-5">
                        <h4 class="text-center mb-4">
                            <i class="fas fa-user-edit me-2"></i>
                            Edit Profil
                        </h4>

                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-circle me-2"></i>
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('profile.update', $user->user_id) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input id="username" type="text" 
                                            class="form-control @error('username') is-invalid @enderror"
                                            name="username" value="{{ $user->username }}" 
                                            required autocomplete="username" placeholder="Username">
                                        <label for="username">
                                            <i class="fas fa-at me-1"></i>
                                            Username
                                        </label>
                                        @error('username')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input id="nama" type="text" 
                                            class="form-control @error('nama') is-invalid @enderror"
                                            name="nama" value="{{ old('nama', $user->nama) }}" 
                                            required autocomplete="nama" placeholder="Nama Lengkap">
                                        <label for="nama">
                                            <i class="fas fa-user me-1"></i>
                                            Nama Lengkap
                                        </label>
                                        @error('nama')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <hr class="my-4">
                                    <h5 class="text-muted mb-3">
                                        <i class="fas fa-lock me-1"></i>
                                        Ubah Password
                                    </h5>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input id="password" type="password" 
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" autocomplete="new-password" 
                                            placeholder="Password Baru">
                                        <label for="password">
                                            <i class="fas fa-lock me-1"></i>
                                            Password Baru
                                        </label>
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <hr class="my-4">
                                    <div class="mb-3">
                                        <label for="profile_image" class="form-label">
                                            <i class="fas fa-image me-1"></i>
                                            Foto Profil
                                        </label>
                                        <input id="profile_image" type="file" 
                                            class="form-control"
                                            name="profile_image">
                                        <div class="form-text">
                                            <i class="fas fa-info-circle me-1"></i>
                                            Upload foto dengan format JPG, PNG, atau GIF (max. 2MB)
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-5">
                                <button type="button" class="btn btn-light btn-lg me-2">
                                    <i class="fas fa-times me-1"></i>
                                    Batal
                                </button>
                                <button type="submit" class="btn btn-primary btn-lg px-4">
                                    <i class="fas fa-save me-1"></i>
                                    Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.form-floating > label {
    padding-left: 1.5rem;
}
.form-floating > .form-control {
    height: 3.5rem;
    padding: 1rem 1rem;
}
.profile-image-container {
    transition: transform 0.3s ease;
}
.profile-image-container:hover {
    transform: scale(1.05);
}
.profile-image {
    transition: box-shadow 0.3s ease;
}
.profile-image:hover {
    box-shadow: 0 0 30px rgba(0,0,0,0.2) !important;
}
</style>
@endsection