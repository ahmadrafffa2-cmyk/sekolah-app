@extends('layouts.app')
@section('content')
<h1>Edit Nilai</h1>
<form action="{{ route('nilai.update', $nilai->id) }}" method="POST">
@csrf @method('PUT')
<label>Siswa</label>
<select name="siswa_id">
@foreach($siswa as $s)
<option value="{{ $s->id }}" {{ $nilai->siswa_id == $s->id ? 'selected' : '' }}>{{ $s->nama }}</option>
@endforeach
</select><br>

<label>Guru</label>
<select name="guru_id">
@foreach($guru as $g)
<option value="{{ $g->id }}" {{ $nilai->guru_id == $g->id ? 'selected' : '' }}>{{ $g->nama }}</option>
@endforeach
</select><br>

<label>Mapel</label><input name="mata_pelajaran" value="{{ $nilai->mata_pelajaran }}"><br>
<label>Tugas</label><input name="nilai_tugas" type="number" value="{{ $nilai->nilai_tugas }}"><br>
<label>UTS</label><input name="nilai_uts" type="number" value="{{ $nilai->nilai_uts }}"><br>
<label>UAS</label><input name="nilai_uas" type="number" value="{{ $nilai->nilai_uas }}"><br>
<label>Akhir</label><input name="nilai_akhir" type="number" value="{{ $nilai->nilai_akhir }}"><br>

<button>Update</button>
</form>
@endsection