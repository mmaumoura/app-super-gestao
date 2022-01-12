<form action="{{route('site.contato')}}" method="post">
    @csrf
    
    <input type="text" value="{{ old('nome') }}" name="nome" placeholder="Nome" class="{{ $classe }}">
    <br>

    <input type="text" value="{{ old('telefone') }}" name="telefone" placeholder="Telefone" class="{{ $classe }}">

    <br>

    <input type="text" value="{{ old('email') }}" name="email" placeholder="E-mail" class="{{ $classe }}">
    <br>

    <select name="motivo_contato" class="{{ $classe }}">
        <option value="">Qual o motivo do contato?</option>

        @foreach ($motivo_contatos as $key => $mc)
            <option value="{{ $key }}" {{ old('motivo_contato') == $key ? 'selected' : '' }}>{{ $mc }}</option>
        @endforeach 

    </select>

    <br>
    
    <textarea name="mensagem" class="{{ $classe }}">{{ (old('mensagem') != '') ? old('mensagem') : 'Preencha aqui sua mensagem' }}</textarea>

    <br>

    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>