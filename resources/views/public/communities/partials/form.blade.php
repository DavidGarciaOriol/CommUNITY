<div class="form-group">
    <label for="name">Community Name</label>
    <input type="text" class="form-control {{ $errors->has('title')?"is-invalid":"" }}" id="name" name="name" placeholder="Introduce a name for this Community" value="{{ isset($community)?$community->name:old('name') }}" required>
    @if( $errors->has('name'))
    <div class="invalid-feedback">
        {{ $errors->first('name') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="creator_nickname">Creator Nickname</label>
    <input type="text" class="form-control {{ $errors->has('creator_nickname')?"is-invalid":"" }}" id="creator_nickname" name="creator_nickname" placeholder="Introduce el nombre que será visible como Creador." value="{{ isset($community)?$community->creator_nickname:old('creator_nickname') }}"required>
    @if( $errors->has('creator_nickname'))
    <div class="invalid-feedback">
        {{ $errors->first('creator_nickname') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="creator_nickname">Community Music Genre/s</label>
    <input type="text" class="form-control {{ $errors->has('genre')?"is-invalid":"" }}" id="genre" name="genre" placeholder="Pop, Rock, Metal..." value="{{ isset($community)?$community->genre:old('genre') }}"required>
    @if( $errors->has('genre'))
    <div class="invalid-feedback">
        {{ $errors->first('genre') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="author">Max number of Users</label>
    <input type="number" class="form-control {{ $errors->has('max_users')?"is-invalid":"" }}" id="max_users" name="max_users" value="{{ isset($community)?$community->max_users:old('max_users') }}"required>
    @if( $errors->has('max_users'))
    <div class="invalid-feedback">
        {{ $errors->first('max_users') }}
    </div>
    @endif
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control {{ $errors->has('description')?"is-invalid":"" }}" id="description" name="description" rows="10" placeholder="Community Description" required>{{ isset($community)?$community->description:old('description') }}</textarea>
    @if( $errors->has('description'))
    <div class="invalid-feedback">
        {{ $errors->first('description') }}
    </div>
    @endif
</div>

@push('estilos')
  <link href="{{ mix('css/forms.css')}}" rel="stylesheet">
@endpush

@push('scripts')
  <script href="{{ mix('js/validations.js')}}" defer></script>
@endpush
