@extends('templates_dashboard.main')

@section('title', isset($event) ? 'Edit Acara' : 'Tambah Acara')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ isset($event) ? 'Edit Acara' : 'Tambah Acara' }}</h1>
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
                            <h5 class="card-title mb-0">{{ isset($event) ? 'Edit Detail Acara' : 'Tambah Acara Baru' }}</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ isset($event) ? route('events.update', $event->id) : route('events.store') }}"
                                method="POST">
                                @csrf
                                @if (isset($event))
                                    @method('PUT')
                                @endif

                                <div class="form-group mb-3">
                                    <label for="name">Nama Acara</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name', $event->name ?? '') }}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ old('email', $event->email ?? '') }}" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control" required>
                                        <option value="Admin"
                                            {{ old('role', $event->role ?? '') == 'Admin' ? 'selected' : '' }}>Admin
                                        </option>
                                        <option value="Editor"
                                            {{ old('role', $event->role ?? '') == 'Editor' ? 'selected' : '' }}>Editor
                                        </option>
                                        <option value="Viewer"
                                            {{ old('role', $event->role ?? '') == 'Viewer' ? 'selected' : '' }}>Viewer
                                        </option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="Active"
                                            {{ old('status', $event->status ?? '') == 'Active' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="Pending"
                                            {{ old('status', $event->status ?? '') == 'Pending' ? 'selected' : '' }}>
                                            Pending</option>
                                        <option value="Inactive"
                                            {{ old('status', $event->status ?? '') == 'Inactive' ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                </div>

                                <div class="form-group text-end">
                                    <button type="submit"
                                        class="btn btn-primary">{{ isset($event) ? 'Update' : 'Simpan' }}</button>
                                    <a href="{{ route('events.list') }}" class="btn btn-secondary">Batal</a>
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
