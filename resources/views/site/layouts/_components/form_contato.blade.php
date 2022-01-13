<form action={{ route('site.contato') }} method="post">
    @csrf
    
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
        @if ($errors->has('nome'))
        <b style="font-size: 12px; color:red;">{{ $errors->first('nome') }}</b>
        @endif
    <br>

    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
    <b style="font-size: 12px; color:red;">{{ $errors->has('telefone') ? $errors->first('telefone') : '' }}</b>

    <br>

    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    <b style="font-size: 12px; color:red;">{{ $errors->has('email') ? $errors->first('email') : '' }}</b>

    <br>

    <select name="motivo_contatos_id" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach($motivo_contatos as $key => $motivo_contato)
            <option value="{{$motivo_contato->id}}" {{ old('motivo_contatos_id') == $motivo_contato->id ? 'selected' : '' }}>{{$motivo_contato->motivo_contato}}</option>
        @endforeach
    </select>

    <b style="font-size: 12px; color:red;">{{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}</b>

    <br>

    <textarea name="mensagem" class="{{ $classe }}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui a sua mensagem' }}</textarea>
    <b style="font-size: 12px; color:red;">{{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}</b>

    <br>

    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>
