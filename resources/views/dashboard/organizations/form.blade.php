@extends('templates_dashboard.main')

@section('title', isset($organization) ? 'Edit Organisasi' : 'Tambah Organisasi')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ isset($organization) ? 'Edit Organisasi' : 'Tambah Organisasi' }}</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ isset($organization) ? 'Edit Detail Organisasi' : 'Tambah Organisasi Baru' }}</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ isset($organization) ? route('organizations.update', $organization->id) : route('organizations.store') }}"
                                method="POST">
                                @csrf
                                @if (isset($organization))
                                    @method('PUT')
                                @endif

                                <div class="form-group mb-3">
                                    <label for="name">Nama Organisasi</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name', $organization->name ?? '') }}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ old('email', $organization->email ?? '') }}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control" required>
                                        <option value="Admin"
                                            {{ old('role', $organization->role ?? '') == 'Admin' ? 'selected' : '' }}>Admin
                                        </option>
                                        <option value="Editor"
                                            {{ old('role', $organization->role ?? '') == 'Editor' ? 'selected' : '' }}>Editor
                                        </option>
                                        <option value="Viewer"
                                            {{ old('role', $organization->role ?? '') == 'Viewer' ? 'selected' : '' }}>Viewer
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="Active"
                                            {{ old('status', $organization->status ?? '') == 'Active' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="Pending"
                                            {{ old('status', $organization->status ?? '') == 'Pending' ? 'selected' : '' }}>
                                            Pending</option>
                                        <option value="Inactive"
                                            {{ old('status', $organization->status ?? '') == 'Inactive' ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group text-end">
                                    <button type="submit"
                                        class="btn btn-primary">{{ isset($organization) ? 'Update' : 'Simpan' }}</button>
                                    <a href="{{ route('organizations.list') }}" class="btn btn-secondary">Batal</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
@endsection
